<template>
<div>
    <section v-if="id">
        <h1>Hello {{detailuser.name}}</h1>
        <router-link :to="{name: 'User'}">Back</router-link>
        
    </section>
    <section v-else>
        <h1>Daftar User</h1>
        <ul>
            <li v-for="user in users" v-bind:key="user.id">
                <!-- <router-link :to="profile_uri(user.name)">{{user.name}}</router-link>  -->
                <!-- <a href=""@click.prevent="lihatuser(user.name)">{{user.name}}</a> -->
                <a href="" @click.prevent="lihatuser(user.id)">{{user.name}}</a>
            </li>
        </ul>
    </section>
</div>
</template>
<script>
export default {
    props :['id'],
    data(){
        return{
            detailuser: {}
        }
    },
    watch:{
        '$route': 'getUsers'

    },
    mounted(){
       this.getUsers()
        // fetch('/api/users')
        // .then(response => response.json())
        // .then(data => {
        //     console.log(data)
        //     this.users = data
        //     })
    },
    methods:{
        getUsers(){
             axios.get('/api/users').then((response) => {
            console.log(response)
            this.users = response.data
            if(this.id){
                this.detailuser = this.users.filter(item => item.id == this.id)[0]
                console.log(this.detailuser)
            }
            })
        }
        }
    }
}
</script>