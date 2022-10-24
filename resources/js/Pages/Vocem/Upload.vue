

<template>

</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue';
	import { Quasar } from 'quasar'
	// import 'primeicons/primeicons.css';
    export default {
      components: {
        AppLayout
      },
	
		created() {
      this.upload()
		},
		data() {
			return {

			}
		},

		computed: {

		},
		methods: { 	
        async upload (){
            await axios.get(route('vocem.uploadCsv'))
            .then((res)=>{
              window.location.pathname ='/vocem/upload/progress/'+res.data
            })
        },
	    }
    }
    </script>

