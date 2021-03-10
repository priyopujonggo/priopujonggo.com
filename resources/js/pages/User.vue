<template>
<div>
    <section v-if="username">
        <h1>Hello {{username}}</h1>
        <router-link :to="{name: 'User'}">Back</router-link>
        
    </section>
    <section v-else>
        <h1>Daftar User</h1>
        <ul>
            <li v-for="user in users">
                <!-- <router-link :to="profile_uri(user.name)">{{user.name}}</router-link>  -->
                <a href=""@click.prevent="lihatuser(user.name)">{{user.name}}</a>
            </li>
        </ul>
    </section>
</div>
</template>
<script>
export default {
    props :['username'],
    data(){
        return{
            users:[
                { id: 1, name:'PriyoPujonggo' },
                { id: 2, name:'Lanangun' },
                { id: 3, name:'Rinitial' }
            ]
        }
    },
    methods:{
        profile_uri(name){
            return '/user/' +name.toLowerCase()
        },
        lihatuser(name){
            // this.$router.push('/user/' +name.toLowerCase())
            this.$router.push({
                name: 'User',
                params: {username: name.toLowerCase()}
            })
        }
    }
}
</script>