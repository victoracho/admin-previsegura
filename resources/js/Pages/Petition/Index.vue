

<template>
    <AppLayout title="Dashboard">
        <div class="py-12">
            <q-dialog ref="dialog">
                <q-card style="width: 800px">
                    <q-card-section>
                        <div class="text-h6">Usuario</div>
                        <q-input v-model="firstnames" label="Nombres" />
                        <q-input v-model="lastnames" label="Apellidos" />
                        <q-input v-model="email" label="Correo Electronico" />
                        <q-input v-model="phone_number" label="Numero Telefonico" />
                        <q-input v-model="doc" label="Documento de Identidad" />
                    </q-card-section>
                    <q-card-section>
                        <div class="text-h6">Planes</div>
                        <div class="q-pa-md" style="max-width: 800px">
                            <q-select v-model="plan" :options="plans" label="Escoge una opcion"></q-select>
                            <q-select v-model="type" :options="types" label="Escoge una opcion"></q-select>
                        </div>
                    </q-card-section>
                    <q-card-section>
                        <div class="text-h6">Asistencias</div>
                        <q-checkbox v-for="assistance in assistances" :label="assistance.name">
                        </q-checkbox>
                        <q-card-actions align="right">
                            <q-btn flat label="Cerrar" color="primary" v-close-popup />
                            <q-btn flat label="Editar" color="primary" @click="onOKClick()" v-close-popup />
                        </q-card-actions>
                    </q-card-section>
                </q-card>
            </q-dialog>
            <q-dialog ref="assistancesDialog">
                <q-card style="width: 800px">
                    <q-card-section>
                        <div class="text-h6">Asistencias</div>
                        <q-checkbox v-for="assistance in assistances" :disable="assistance.selected"
                            :label="assistance.name"></q-checkbox>
                    </q-card-section>
                </q-card>
            </q-dialog>

            <div class="q-pa-md">
                <q-table :rows="rows" :columns="columns" row-key="name">
                    <template v-slot:body="props">
                        <q-tr :props="props">
                            <q-td key="user" :props="props">
                                <u><a title="Escribir al correo" href="mailto:${props.row.user}">
                                        {{ props.row.email }}</a> </u>
                            </q-td>
                            <q-td key="names" :props="props">
                                {{ props.row.names }}
                            </q-td>
                            <q-td key="doc" :props="props">
                                {{ props.row.doc }}
                            </q-td>
                            <q-td key="phone_number" :props="props">
                                <u><a title="Escribir por telefono" href="tel:${props.row.phone_number}">
                                        {{ props.row.phone_number }}</a> </u>
                            </q-td>
                            <q-td key="user_type" :props="props">
                                {{ props.row.user_type }}
                            </q-td>
                            <q-td key="assistances" :props="props">
                                <q-btn round color="primary" icon="visibility" size="sm"
                                    @click="assistances(props.row.id)" />
                            </q-td>
                            <q-td key="date" :props="props">
                                {{ props.row.date }}
                            </q-td>
                            <q-td key="plan" :props="props">
                                {{ props.row.plan }}
                            </q-td>
                            <q-td key="actions" :props="props">
                                <q-btn round color="negative" icon="delete" size="sm" @click="remove(props.row.id)" />
                                <q-btn round color="primary" icon="edit" size="sm" @click="show(props.row.id)" />
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
    props: ['petitions', 'assistances', 'plans'],
    created() {
        this.rows = this.petitions;
        this.columns = [
            { name: 'user', label: 'Correo', field: 'user', sortable: true },
            { name: 'names', label: 'Nombres y apellidos', field: 'names' },
            { name: 'doc', label: 'Cédula', field: 'doc' },
            { name: 'phone_number', label: 'Teléfono', field: 'phone_number' },
            { name: 'user_type', label: 'Tipo de cliente', field: 'user_type' },
            { name: 'assistances', label: 'Asistencias', field: 'assistances' },
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
            firstnames: null,
            lastnames: null,
            assistances: [
                {
                    name: "Asistencia funeraria nacional e internacional",
                    id: 1,
                    selected: false
                },
                {
                    name: "Asistencia financiera en duelo",
                    id: 2,
                    selected: false
                },
                {
                    name: "Asistencia médica telefónica y domiciliaria",
                    id: 3,
                    selected: false
                },
                {
                    name: "Combo citas medicas",
                    id: 4,
                    selected: false
                },
                {
                    name: "Asistencia odontológica",
                    id: 5,
                    selected: false

                },
                {
                    name: "Asistencia financiera en hospitalización",
                    id: 6,
                    selected: false

                },
                {
                    name: "Asistencia financiera enfermedad grave",
                    id: 7,
                    selected: false

                },
                {
                    name: "Asistencia mascotas en el cielo",
                    id: 8,
                    selected: false

                },

            ],
            plan: null,
            doc: null,
            maximizedToggle: true,
            phone_number: null,
            email: null,
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
        openModal(id) {
            window.location.pathname = "/assistance/" + id
        },
        async remove(id) {
            await axios.post(route('petition.delete'), { id: id })
                .then((res) => {
                    window.location.pathname = '/dashboard'
                })
        },
        async show(id) {
            this.currentPetition = id
            await axios.post(route('petition.getInfo'), { id: id })
                .then((res) => {
                    console.log(res.data.data.assistances);
                    this.assistances = res.data.data.assistances
                    this.firstnames = res.data.data.user.firstnames
                    this.lastnames = res.data.data.user.lastnames
                    this.email = res.data.data.user.email
                    this.phone_number = res.data.data.user.phone_number
                    this.plan = res.data.data.plan.name
                    this.doc = res.data.data.user.doc
                    this.type = res.data.data.user.user_type == 1 ? 'nuevo' : 'registrado'
                })
            this.$refs.dialog.show()
        },
        async assistances(id) {
            this.currentpetition = id
            await axios.post(route('petition.getAssistances'), { id: id })
                .then((res) => {
                    const assistances = res.data.data
                    this.firstnames = null
                    this.lastnames = null
                    this.email = null
                    this.phone_number = null
                    this.plan = null
                    this.doc = null
                    this.type = null
                })
            this.$refs.assistancesDialog.show()
        },
        hide() {
            this.$refs.dialog.hide()
        },

        onDialogHide() {
            // required to be emitted
            // when QDialog emits "hide" event
            this.$emit('hide')
        },

        async onOKClick() {
            const user = {
                firstnames: this.firstnames,
                lastnames: this.lastnames,
                email: this.email,
                phone_number: this.phone_number,
                type: this.type,
                doc: this.doc
            }
            const sendAssistances = this.assistances.map(x => {
                return x.id;
            });
            await axios.post(route('petition.sendAssistances'), {
                id: this.currentPetition,
                assistances: this.assistances,
                user: user,
                plan: this.plan,
                phone_number: this.phone_number,

            })
                .then((res) => {
                    window.location.pathname = '/dashboard'
                })

            this.$emit('ok')
            // or with payload: this.$emit('ok', { ... })

            // then hiding dialog
            this.hide()
        },

        onCancelClick() {
            // we just need to hide the dialog
            this.hide()
        }
    }
}
</script>

