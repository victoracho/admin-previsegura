

    <template>
        <AppLayout title="Dashboard">
			<div class="py-12">
                
            </div>
        </AppLayout>
    </template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue';
	import { Quasar } from 'quasar'
	// import 'primeicons/primeicons.css';
    export default {
      components: {
        AppLayout
      },
		props: ,
		created() {
            
		},
		data() {
			return {
				rows: null,
				currentPetition: null,
				columns: null,
				assisCitas: false,
				assisEnfermedad: false,
				assisFinanciera: false,
				assisFuneraria: false,
				assisHospitalizacion: false,
				assisMedica: false,
				assisOndotologica: false,
				assisMascotas: false,
				firstnames: null,
				lastnames: null,
				plan: null,
				doc: null,
        maximizedToggle: true,
				phone_number: null,
				email: null,
				types: ['Nuevo', 'Registrado'],
				type: null
			}
		},

		computed: {

		},
		methods: { 	
            async upload (){
                await axios.post(route('petition.uploadCsv'))
                .then((res)=>{
                })
            },
	    }
    }
    </script>

