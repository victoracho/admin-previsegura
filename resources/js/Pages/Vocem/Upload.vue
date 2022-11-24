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
              url="/vocem/upload/csv"
              label="Upload files"
              color="blue"
              flat
              bordered
              style="min-width: 600px"
              @failed="failed"
            >
              <template v-slot:header="scope">
                <div class="row no-wrap items-center q-pa-sm q-gutter-xs">
                  <q-btn v-if="scope.uploadedFiles.length > 0" icon="done_all" @click="scope.removeUploadedFiles" round dense flat >
                    <q-tooltip>Remove Uploaded Files</q-tooltip>
                  </q-btn>
                  <q-spinner v-if="scope.isUploading" class="q-uploader__spinner" />
                  <div class="col">
                    <div class="q-uploader__title">Upload your files</div>
                    <div class="q-uploader__subtitle">{{ scope.uploadSizeLabel }} / {{ scope.uploadProgressLabel }}</div>
                  </div>
                  <q-btn v-if="scope.canAddFiles" type="a" icon="add_box" @click="scope.pickFiles" round dense flat>
                    <q-uploader-add-trigger />
                    <q-tooltip>Pick Files</q-tooltip>
                  </q-btn>
                  <q-btn v-if="scope.canUpload" icon="cloud_upload" @click="scope.upload" round dense flat >
                    <q-tooltip>Upload Files</q-tooltip>
                  </q-btn>
        
                  <q-btn v-if="scope.isUploading" icon="clear" @click="scope.abort" round dense flat >
                    <q-tooltip>Abort Upload</q-tooltip>
                  </q-btn>
                </div>
                <q-linear-progress size="3px" :value="scope.uploadProgressLabel" color="positive" />
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
// import 'primeicons/primeicons.css';
export default {
  components: {
    AppLayout
  },

  created() {
    // this.upload()
  },
  data() {
    return {
    }
  },
  computed: {
    // progress() {
    //   const progress = this.$refs.uploader
    //   return progress
    // }
  },
  methods: {
    failed (response) {
      const error = response.xhr 
      const errorMsg = `Error: ${error.status}, ${error.statusText}.`
      console.log(errorMsg)
    },    
    async upload (){
        await axios.get(route('vocem.uploadCsv'))
        .then((res)=>{
          window.location.pathname ='/vocem/upload/progress/'+res.data
        })
    },
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
