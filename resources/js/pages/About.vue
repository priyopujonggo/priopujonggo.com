<template>
    <h1>About</h1>
    
    
</template>

<script>
import {gmapApi} from 'vue2-google-maps'
export default {
    computed: {
    google: gmapApi
  },
    data(){
        return {
            alamats:[]
        }
    },
    created(){
        axios.get('/api/about')
        .then((response) => {
            console.log(response)
            this.alamats = response.data
        }).catch((error) => console.error(error));
    },

}
</script>