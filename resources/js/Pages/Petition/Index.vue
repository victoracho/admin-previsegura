

    <template>
        <AppLayout title="Dashboard">
			<div class="py-12">
				<q-dialog ref="dialog" @hide="onDialogHide">
					<q-carousel
						transition-prev="slide-right"
						transition-next="slide-left"
						swipeable
						animated
						v-model="slide"
						control-color="primary"
						navigation-icon="radio_button_unchecked"
						navigation
						padding
						
						class="bg-white shadow-1 rounded-borders"
					>
						<q-carousel-slide :name="1" class="column no-wrap flex-center" >
							<q-card-section >
								<div class="text-h6">Asistencias</div>
								<q-checkbox v-model="assisFuneraria" label="Asistencia funeraria nacional e internacional"></q-checkbox>
								<q-checkbox v-model="assisFinanciera" label="Asistencia financiera en duelo"></q-checkbox>
								<q-checkbox v-model="assisMedica" label="Asistencia médica telefónica y domiciliaria"></q-checkbox>
									<br>
								<q-checkbox v-model="assisCitas" label="Combo citas médicas"></q-checkbox>
									<br>
								<q-checkbox v-model="assisOndotologica" label="Asistencia odontológica"></q-checkbox>
									<br>
								<q-checkbox v-model="assisMascotas" label="Mascotas de cielo"></q-checkbox>
							</q-card-section>
							<q-card-actions align="right">
								<q-btn flat label="Cerrar" color="primary" v-close-popup />
								<q-btn flat label="Editar" color="primary" @click="onOKClick()"  v-close-popup />
							</q-card-actions>
						</q-carousel-slide>
						<q-carousel-slide :name="2" class="column no-wrap flex-center">
							<q-card-section >
								<div class="text-h6">Usuario</div>
								<q-input v-model="firstnames" label="Nombres" />
								<q-input v-model="lastnames" label="Apellidos" />
								<q-input v-model="email" label="Correo Electronico" />
								<q-input v-model="phone_number" label="Numero Telefonico" />
							</q-card-section>
							<q-card-actions align="right">
								<q-btn flat label="Cerrar" color="primary" v-close-popup />
								<q-btn flat label="Editar" color="primary" @click="onOKClick()" v-close-popup />
							</q-card-actions>
						</q-carousel-slide>
						<q-carousel-slide :name="3" class="column no-wrap flex-center">
							<q-card-section >
								<div class="text-h6">Planes</div>
								<div class="q-pa-md" style="max-width: 800px">
									<q-select v-model="plan" :options="plans" label="Escoge una opcion"></q-select>
									<q-select v-model="type" :options="types" label="Escoge una opcion"></q-select>
								</div>
							</q-card-section>
							<q-card-actions align="right">
								<q-btn flat label="Cerrar" color="primary" v-close-popup />
								<q-btn flat label="Editar" color="primary" @click="onOKClick()"   v-close-popup/>
							</q-card-actions>
						</q-carousel-slide>
					</q-carousel>
				</q-dialog>

				<div class="q-pa-md">
					<q-table
					:rows="rows"
					:columns="columns"
					row-key="name"
					>
					<template v-slot:body="props">
						<q-tr :props="props">
							<q-td key="user" :props="props">
								<u><a title="Escribir al correo" href=" mailto:${props.row.user}"> {{props.row.user}}</a> </u>
							</q-td>
							<q-td key="names" :props="props">
								{{ props.row.names }}
							</q-td>
							<q-td key="doc" :props="props">
								{{ props.row.doc }}
							</q-td>
							<q-td key="phone_number" :props="props">
								<u><a title="Escribir por telefono" href="https://wa.me/{props.row.phone_number}"> {{props.row.phone_number}}</a> </u>
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
							<q-td key="actions" :props="props">
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
		props: ['petitions', 'plans'],
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
				{ name: "actions", label: "Acciones", field: "assistances", sortable: true }
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
				assisMascotas: false,
				firstnames: null,
				lastnames: null,
				plan: null,
				phone_number: null,
				email: null,
				slide: 1,
				types: ['Nuevo', 'Registrado'],
				type: null
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
				await axios.post(route('petition.getInfo'), {id: id})
				.then((res) => {
					console.log(res.data.data.assistances);
					const assistances = res.data.data.assistances
					this.firstnames = res.data.data.user.firstnames
					this.lastnames = res.data.data.user.lastnames
					this.email = res.data.data.user.email
					this.phone_number = res.data.data.user.phone_number
					this.plan = res.data.data.plan.name
					this.type = res.data.data.user.user_type== 1 ? 'Nuevo' : 'Registrado'

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
				this.assisMascotas = false

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
					case "Mascotas de cielo":
						this.assisMascotas = true;
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

			async onOKClick () {
				const user = {
					firstnames: this.firstnames,
					lastnames: this.lastnames,
					email: this.email,
					phone_number: this.phone_number,
					type: this.type
				}

				await axios.post(route('petition.sendAssistances'), {id: this.currentPetition,
					assisCitas: this.assisCitas,
					assisOdontologica: this.assisOndotologica, 
					assisEnfermedad: this.assisEnfermedad,
					assisFuneraria: this.assisFuneraria,
					assisFinanciera: this.assisFinanciera,
					assisHospitalizacion: this.assisHospitalizacion,
					assisMedica: this.assisMedica,
					assisMascotas: this.assisMascotas,
					user: user,
					plan: this.plan,


				})
				.then((res) => {
					window.location.pathname = '/dashboard'
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

