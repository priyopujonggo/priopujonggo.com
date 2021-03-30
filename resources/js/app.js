require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import router from './router'
import VueGeolocation from 'vue-browser-geolocation'
import * as VueGoogleMaps from 'vue2-google-maps'
Vue.use(VueGeolocation)
Vue.use(VueGoogleMaps, {
    load:{
        key:'AIzaSyArpauKkohsTnowklVHeaskn5aeEMLtXxU'
    }
})

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', require('./components/Header.vue').default);
Vue.component('footer-component', require('./components/Footer.vue').default);


const app = new Vue({
    el: '#app',
    data: {
        title: 'Priyo Pujonggo'
    },
    router
});
