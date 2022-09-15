

    <template>
        <AppLayout title="Dashboard">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
					<EasyDataTable
						:headers="columns"
						:items="rows"
					>
						<template #item-assistances="{ assistances, id }">
							<div class="player-wrapper">
								<button @click="openModal(id)">
									<i class="pi pi-pencil" style="font-size: 1rem"></i>
								</button>
							</div>
						</template>
					</EasyDataTable>
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
				this.columns = [
					{ text: "Usuario", value: "user", sortable: true },
					{ text: "Plan", value: "plan", sortable: true },
					{ text: "Fecha", value: "date", sortable: true },
					{ text: "Asistencias", value: "assistances", sortable: true }
				];

				this.rows = this.petitions;
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

