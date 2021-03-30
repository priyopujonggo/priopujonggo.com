<template>
<div>
    <h1>Your Coordinates</h1>
    <p>{{ coordinates.lat }} Latitude, {{ coordinates.lng }} Longitude </p>
    <gmap-map 
    :center="mapCenter" 
    :zoom="10" 
    style="width: 100%; height:440px;"
    @click="handleMapClick">
        <gmap-info-window
        :option="infoWindowOption"
        :position="infoWindowPosition"
        :opened="infoWindowOpened"
        @closeclick="handleInfoWindowClose">
        <div class="info-window">
            <h2 v-text="activeAlamat.nama"></h2>
            <h5 v-text="'Hours: ' + activeAlamat.hours"></h5>
            <p v-text="activeAlamat.address"></p>
            <p v-text="activeAlamat.city + ', ' + activeAlamat.state"></p>
        </div>
        </gmap-info-window>
        <gmap-marker
        v-for="(r) in alamats"
        :key="r.id"
        :position="getPosition(r)"
        :clickable="true"
        :draggable="false"
        @click="handleMarkerClicked(r)"
        ></gmap-marker>
    </gmap-map>
</div>
    
</template>

<script>
export default {
    data() {
        return {
            alamats:[],
            infoWindowOption: {
                pixelOffset: {
                    width: 0,
                    height: -35
                }

            },
            activeAlamat: {},
            
            infoWindowOpened: false,

            coordinates: {
                lat: 0,
                lng: 0
            }
        }
    },
    // created() {
    //     this.$getLocation({})
    //     .then(coordinates => {
    //         this.coordinates = coordinates;
    //     })
    //     .catch(error => alert(error));

    // }
    created(){
        axios.get('/api/map')
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
        },
        handleMarkerClicked(r){
            this.activeAlamat = r;
            this.infoWindowOpened = true;
        },
        handleInfoWindowClose() {
            this.activeAlamat = {};
            this.infoWindowOpened = false;
        },
        handleMapClick(e){
            this.alamats.push({
                nama: "Placeholder",
                hours: "00:00am-00:00pm",
                city: "Purbalingga",
                state: "Jawa Tengah",
                latitude: e.latLng.lat(),
                longitude: e.latLng.lng()
            });

        }
    },
    computed: {
        mapCenter() {
            if (!this.alamats.length) {
                return {
                    lat: 10,
                    lng: 10
                }
            }
            return {
                lat: parseFloat(this.alamats[0].latitude),
                lng: parseFloat(this.alamats[0].longitude)
            }
        },
        infoWindowPosition() {
            return{
                lat: parseFloat(this.activeAlamat.latitude),
                lng: parseFloat(this.activeAlamat.longitude)
            };
         }
    }
}
</script>