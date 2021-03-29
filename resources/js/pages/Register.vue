<template>
    <div>
        <h1>Register</h1>
        <form @submit.prevent="handleSubmit" action="/users" method="POST">
            <div class="input-group">
                <label>Name</label>
                <input type="text" v-model="user.name">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="text" v-model="user.email">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="text" v-model="user.password">
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</template>

<script>
export default {
    data(){
        return {
            user: {
                name:'',
                email:'',
                password:''
            }
        }

    },
    methods: {
        handleSubmit(){
            console.log(this.user)
            axios.post('/api/users', this.user)
            .then((response) =>{
                console.log(response)
            }).catch((error) => {
                console.log(error)
            })
        }
    }
    
}
</script>
<style>
.input-group{
    margin-bottom: 5px;
}
</style>