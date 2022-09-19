

    <template>
        <AppLayout title="Dashboard">
            <div class="py-12">
				<div class="q-pa-md">
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
							<q-td key="date" :props="props">
								{{ props.row.date }}
							</q-td>
							<q-td key="plan" :props="props">
								{{ props.row.plan }}
							</q-td>
							<q-td key="assistances" :props="props">
								<q-btn round color="primary" icon="edit" />
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
	// import 'primeicons/primeicons.css';
    export default {
      components: {
        AppLayout
      },
			props: ['petitions'],
			created() {
				this.rows = this.petitions;
				this.columns = [
					{ name: 'user', label: 'Usuario', field: 'user', align: "left", sortable: true },
					{ name: "date", label: "Fecha", field: "date", sortable: true },
					{ name: "plan", label: "Plan", field: 'plan', sortable: true },
					{ name: "assistances", label: "Asistencias", field: "assistances", sortable: true }
				];
			},
      data() {
				return {
					rows: null,
					columns: null
				}
      },
		computed: {

		},
			methods: {
				openModal(id){
			window.location.pathname = "/assistance/"+id
				}
			}
		}
    </script>

