<template>
  <AppLayout title="Vocem">
    <div class="py-12">
      <div class="vocem-container">
        <q-card class="vocem-card">
          <q-card-section class="vocem-card__header">
            <div class="text-h6">Carga de archivos</div>
          </q-card-section>
    
          <q-separator/>

          <q-card-section class="vocem-card__body">
            <q-uploader
              label="Carga tus archivos"
              :url="urlUpload"
              color="blue"
              ref="uploader" 
              :headers="[{name: 'X-CSRF-TOKEN', value: token}]"  
              extensions=".csv"           
              flat
              bordered
              style="min-width: 600px"
              @failed="failed"
              @uploaded="uploaded"
            >
              <template v-slot:header="scope">
                <div class="row no-wrap items-center q-pa-sm q-gutter-xs">
                  <q-btn v-if="scope.uploadedFiles.length > 0" icon="done_all" @click="scope.removeUploadedFiles" round dense flat >
                    <q-tooltip>Elimina los archivos cargados</q-tooltip>
                  </q-btn>
                  <q-spinner v-if="scope.isUploading" class="q-uploader__spinner" />
                  <div class="col">
                    <div class="q-uploader__title">Carga un CSV</div>
                    <div class="q-uploader__subtitle">{{ scope.uploadSizeLabel }} / {{ scope.uploadProgressLabel }}</div>
                  </div>
                  <q-btn v-if="scope.canAddFiles" type="a" icon="add_box" @click="scope.pickFiles" round dense flat>
                    <q-uploader-add-trigger />
                    <q-tooltip>Escoge un archivo</q-tooltip>
                  </q-btn>
                  <q-btn v-if="scope.canUpload" icon="cloud_upload" @click="scope.upload" round dense flat >
                    <q-tooltip>Carga archivos</q-tooltip>
                  </q-btn>
        
                  <q-btn v-if="scope.isUploading" icon="clear" @click="scope.abort" round dense flat >
                    <q-tooltip>Cancelar carga</q-tooltip>
                  </q-btn>
                </div>
                <div class="q-pa-md" >
                  <q-linear-progress size="25px" :value="progressPercentage" color="blue">
                    <div class="absolute-full flex flex-center">
                      <q-badge color="white" text-color="black" :label="progressLabel1"></q-badge>
                    </div>
                  </q-linear-progress>
                </div>
              </template>
            </q-uploader>

          </q-card-section>
        </q-card>
      </div>
    </div>
  </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import ProgressBar from '@/Pages/Vocem/UploadProgress.vue';
// import 'primeicons/primeicons.css';
export default {
  components: {
    AppLayout
  },
  props: ['id'],

  created() {
    if(this.idBatch){
      this.getUploadProgress()
    }
  },
  data() {
    return {
      urlUpload : route('vocem.uploadCsv'),
      token : this.$page.props.csrf,
      idBatch: this.id ? this.id : null,
      progressPercentage : 0.0,
    }
  },
  computed: {
    progressLabel1(){
      return (this.progressPercentage * 100).toFixed(2) + '%'
    }
  },
  methods: {
    failed (response) {
      const error = response.xhr 
      const errorMsg = `Error: ${error.status}, ${error.statusText}.`
      this.progressPercentage = 0.0
    },
    uploaded (response) {
      const error = response.xhr
      this.idBatch = error.responseText
      this.idBatch = this.idBatch.substring(1, this.idBatch.length - 1);
      this.getUploadProgress()
    },

    getUploadProgress(){
      let self = this;
      let progressResponse = setInterval(() => {
        axios.post(route('vocem.progress'), {
            id: self.idBatch,
            progress: true
        }). then(function(response){
          if(!response.data.total_jobs){
            clearInterval(progressResponse)
            this.idBatch = null
          }
          let totalJobs = parseInt(response.data.total_jobs)
          let pendingJobs = parseInt(response.data.pending_jobs)
          let completedJobs = totalJobs - pendingJobs
          if(pendingJobs == 0){
              self.progressPercentage = 100;
              clearInterval(progressResponse)
          } else {
              self.progressPercentage = parseInt(completedJobs / totalJobs * 100).toFixed(0)                            
          }
        }).catch((error)=> {
          self.progressPercentage = 0.0
          clearInterval(progressResponse)
        });  
      }, 1000); 
    }
     
  }
}
</script>

<style scoped lang="scss">
.vocem {
  &-container {
    display: flex;
    justify-content: center;
  }

  &-card {
    &__header, &__body {
      padding: 2em;
    }
  }
}
</style>
