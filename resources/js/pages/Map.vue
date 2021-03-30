<template>
<div>
    <h1>Your Coordinates</h1>
    <p>{{ coordinates.lat }} Latitude, {{ coordinates.lng }} Longitude </p>
    <gmap-map :center="{lat:10, lng:10}" :zoom="7" style="width: 100%; height:440px;">
        <gmap-marker
        :position="{lat:10, lng:10}"
        :clickable="true"
        :draggable="false"
        ></gmap-marker>
    </gmap-map>
</div>
    
</template>

<script>
export default {
    data() {
        return {
            coordinates: {
                lat: 0,
                lng: 0
            }
        }
    },
    created() {
        this.$getLocation({})
        .then(coordinates => {
            this.coordinates = coordinates;
        })
        .catch(error => alert(error));

    }
}
</script>