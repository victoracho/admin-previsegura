

    <template>
        <AppLayout title="Dashboard">
            <div class="py-12">
				<div class="q-pa-md">
					<q-dialog ref="dialog" @hide="onDialogHide">
						<q-card class="q-dialog-plugin">
							<div class="q-gutter-sm">
								<q-checkbox v-model="assisFuneraria" label="Asistencia funeraria nacional e internacional"></q-checkbox>
								<q-checkbox v-model="assisFinanciera" label="Asistencia financiera en duelo"></q-checkbox>
								<q-checkbox v-model="assisMedica" label="Asistencia médica telefónica y domiciliaria"></q-checkbox>
								<q-checkbox v-model="assisCitas" label="Combo citas médicas"></q-checkbox>
								<br>
								<q-checkbox v-model="assisOndotologica" label="Asistencia odontológica"></q-checkbox>
								<q-checkbox v-model="assisHospitalizacion" label="Asistencia financiera en hospitalización"></q-checkbox>
								<q-checkbox v-model="assisEnfermedad" label="Asistencia financiera en enfermedad grave"></q-checkbox>
							</div>
						<q-card-actions align="right">
							<q-btn color="primary" label="Editar" @click="onOKClick" />
							<q-btn color="primary" label="Cancelar" @click="onCancelClick" />
						</q-card-actions>
						</q-card>
					</q-dialog>
					<q-table
					:rows="rows"
					:columns="columns"
					row-key="name"
					>
					<template v-slot:body="props">
						<q-tr :props="props">
							<q-td key="user" :props="props">
								{{ props.row.user }}
							</q-td>
							<q-td key="names" :props="props">
								{{ props.row.names }}
							</q-td>
							<q-td key="doc" :props="props">
								{{ props.row.doc }}
							</q-td>
							<q-td key="phone_number" :props="props">
								{{ props.row.phone_number }}
							</q-td>
							<q-td key="user_type" :props="props">
								{{ props.row.user_type }}
							</q-td>
							<q-td key="date" :props="props">
								{{ props.row.date }}
							</q-td>
							<q-td key="plan" :props="props">
								{{ props.row.plan }}
							</q-td>
							<q-td key="assistances" :props="props">
								<q-btn round color="primary" icon="edit" @click="show(props.row.id)" />
							</q-td>
						</q-tr>
					</template>
					</q-table>
				</div>
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
		props: ['petitions'],
		created() {
			this.rows = this.petitions;
			this.columns = [
				{ name: 'user', label: 'Correo', field: 'user',  sortable: true },
				{ name: 'names', label: 'Nombres y apellidos', field: 'names' },
				{ name: 'doc', label: 'Cédula', field: 'doc' },
				{ name: 'phone_number', label: 'Teléfono', field: 'phone_number' },
				{ name: 'user_type', label: 'Tipo de cliente', field: 'user_type' },
				{ name: "date", label: "Fecha", field: "date", sortable: true },
				{ name: "plan", label: "Plan", field: 'plan', sortable: true },
				{ name: "assistances", label: "Asistencias", field: "assistances", sortable: true }
			];

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
			}
		},
	  	emits: [
			// REQUIRED
			'ok', 'hide'
		],
		computed: {

		},
		methods: { 	
			openModal(id){
				window.location.pathname = "/assistance/"+id
			},
			radio () {

			},
			async show (id) {
				this.currentPetition = id
				await axios.post(route('petition.getAssistances'), {id: id})
				.then((res) => {
					const assistances = res.data.data
					this.checkAssistances(assistances)
				})
				this.$refs.dialog.show()
			},
			

			// following method is REQUIRED
			// (don't change its name --> "hide")
			checkAssistances(assistances){
				this.assisCitas = false
				this.assisOndotologica = false
				this.assisEnfermedad = false
				this.assisFuneraria = false
				this.assisFinanciera = false
				this.assisHospitalizacion = false
				this.assisMedica = false
				assistances.forEach(element => {
					switch (element.name) {
					case "Asistencia funeraria nacional e internacional":
						this.assisFuneraria = true;
						break;
					case "Asistencia financiera en duelo":
						this.assisFinanciera = true;
						break;
					case "Asistencia médica telefónica y domiciliaria":
						this.assisMedica = true;
						break;
					case "Combo citas médicas":
						 this.assisCitas= true;
						break;
					case "Asistencia odontológica":
						this.assisOndotologica = true;
						break;
					case "Asistencia financiera en hospitalización":
						this.assisHospitalizacion = true;
						break;
					case "Asistencia financiera en enfermedad grave":
						this.assisEnfermedad = true;
					}
				});
			},
			hide () {
			this.$refs.dialog.hide()
			},

			onDialogHide () {
			// required to be emitted
			// when QDialog emits "hide" event
			this.$emit('hide')
			},

			async onOKClick (id) {
				await axios.post(route('petition.sendAssistances'), {id: this.currentPetition,
					assisCitas: this.assisCitas,
					assisOdontologica: this.assisOndotologica, 
					assisEnfermedad: this.assisEnfermedad,
					assisFuneraria: this.assisFuneraria,
					assisFinanciera: this.assisFinanciera,
					assisHospitalizacion: this.assisHospitalizacion,
					assisMedica: this.assisMedica
				})
				.then((res) => {

				})

				this.$emit('ok')
				// or with payload: this.$emit('ok', { ... })

				// then hiding dialog
				this.hide()
			},

			onCancelClick () {
			// we just need to hide the dialog
			this.hide()
			}
		}
	}
    </script>

