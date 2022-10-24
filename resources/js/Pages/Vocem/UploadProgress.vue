

<template>
    <h1>{{progressPercentage}}</h1>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { Quasar } from 'quasar'
    // import 'primeicons/primeicons.css';
    export default {

        components: {
        AppLayout
        },
        props: ['percentage', 'id'],

        created() {
            this.getUploadProgress()
        },
        data() {
            return {
                progressPercentage: 0,
            }
        },

        computed: {

        },
        methods: { 	
            getUploadProgress(){
                let self = this;
                let progressResponse = setInterval(() => {
                    axios.post(route('vocem.progress'), {
                        id: self.id,
                        progress: true
                    }). then(function(response){
                        let totalJobs = parseInt(response.data.total_jobs)
                        let pendingJobs = parseInt(response.data.pending_jobs)
                        let completedJobs = totalJobs - pendingJobs
                        if(pendingJobs == 0){
                            self.progressPercentage = 100;
                        } else {
                            self.progressPercentage = parseInt(completedJobs / totalJobs * 100).toFixed(0)                            
                        }
                    });  
                }, 1000); 
            }
        }
    }
    </script>

