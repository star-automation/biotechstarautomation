<template>
    <div class="login row justify-content-center" style="width: 100%">
{{getData()}}
        <div class="col-md-8" style="margin-top: 35px; ">
            <h3 class="text-center mb-5">All Registered Users</h3>
            <table class="table table-dark text-center" style="color: white !important;">
                <thead>
                    <tr class="bg-info">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <tr v-for="user in users">
                    <td>{{user.name}}</td>
                    <td>{{user.email}}</td>
                    <td v-if="user.role ==2">Engineer</td>
                    <td v-else>Operator</td>
                    <td><button class="btn btn-danger btn-sm"  @click.prevent="removeUser(user.id)">Delete</button></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</template>

<script>
import {login} from "../helpers/auth";
import {screen1} from "../helpers/api";
import {Viewallusers} from "../helpers/api";

export default {
    name: "Login",
    data() {
        return {
            users:[]
        }
    },
    methods: {
        getData() {
            const token = "Bearer "+this.currentUser.token;
            Viewallusers(token)
                .then((res)=>{
                    this.users = res.users
                })
                .catch((err)=>{
                    console.log(err)
                });
        },
        removeUser(id){

                axios.get('api/deleteuser/'+id, {headers: {'Authorization': 'Bearer '+this.currentUser.token}})
                .then(res=>{

                    }).catch(error=>{console.log(error.response.data)});
                }

    },
    mounted() {
        console.log();
        if(this.$store.getters.currentUser.role == 2){
            // window.location.replace('/');
            alert('Frist Login As Admin!')
            window.location = "http://localhost:8000";
        }else if(this.$store.getters.currentUser.role == 3){
            alert('Frist Login As Admin!')
            window.location = "http://localhost:8000";
        }
        if (localStorage.getItem('reloaded')) {
            // The page was just reloaded. Clear the value from local storage
            // so that it will reload the next time this page is visited.
            localStorage.removeItem('reloaded');
        } else {
            // Set a flag so that we know not to reload the page twice.
            localStorage.setItem('reloaded', '1');
            location.reload();
        }
    },

    computed: {

        currentUser() {
            return this.$store.getters.currentUser
        }
    }
}
</script>

<style scoped>

</style>
