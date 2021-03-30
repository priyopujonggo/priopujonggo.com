import Vue from 'vue'

import VueRouter from 'vue-router'
Vue.use(VueRouter)

const Home = require('../pages/Home.vue').default
const About = require('../pages/About.vue').default

// const NotFound = require('./pages/NotFound.vue').default
import NotFound from '../pages/NotFound.vue'
import User from '../pages/User.vue'
import Profile from '../pages/Profile.vue'
import Register from '../pages/Register.vue'
import Map from '../pages/Map.vue'



const routes = [
    { name: 'Home', path: '/home', component: Home },
    { name: 'Beranda', path: '/', component: Home },
   
    {name: 'About',path:'/about', component: About},
    // {name: 'User',path:'/user/:username?', component: User, props:true}
    {name: 'User',path:'/user', component: User},
    {name: 'Register', path:'/user/create', component: Register},
    {name: 'Profile',path:'/user/:id', component: Profile, props:true},
    {name: 'Map', path: '/map', component: Map},
    { path:'*', component:NotFound}
    
]
const router = new VueRouter({
    linkActiveClass: 'active',
    mode:'history',
   routes 
})

export default router

