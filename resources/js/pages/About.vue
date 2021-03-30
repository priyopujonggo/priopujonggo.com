<template>
<div>
    <h1>About</h1>
    <h1>Your Coordinates</h1>
    <p>{{ coordinates.lat }} Latitude, {{ coordinates.lng }} Longitude </p>
    <gmap-map :center="{lat:10, lng:10}" :zoom="7" style="width: 100%; height:440px;">
        <gmap-marker
        v-for="(r) in alamats"
        :key="r.id"
        :position="getPosition(r)"
        :clickable="true"
        :draggable="false"
        ></gmap-marker>
    </gmap-map>
</div>
    
</template>

<script>

export default {
   
    data(){
        return {
            alamats:[],
            coordinates: {
                lat: 0,
                lng: 0
            }
        }
    },
    created(){
        axios.get('/api/about')
        .then((response) => {
            console.log(response)
            this.alamats = response.data
        }).catch((error) => console.error(error));
    },
    methods: {
        getPosition(r){
            return{
                lat: parseFloat(r.latitude),
                lng: parseFloat(r.longitude)
            }
        }
    }

}
</script>