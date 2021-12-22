<template>
    <div class="login row justify-content-center" style="width: 100%">

        <div class="col-md-5" style="margin-top: 35px;">
            <h3 class=" text-center mb-4 mt-1">Add New Users</h3>
            <div class="card">
                <div class="card-body">
                    <hr>
                    <form @submit.prevent="submit">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                </div>
                                <input type="text" class="form-control input-group-lg" id="name" v-model="form.name" placeholder="Name">
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                </div>
                                <input type="email" class="form-control" id="email" v-model="form.email" placeholder="Email">
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input type="password" id="password" v-model="form.password" class="form-control" placeholder="******">
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                </div>
                                <select v-model="form.role" class="form-control">
                                    <option value="2">Engineer</option>
                                    <option value="3">Operator</option>
                                </select>
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit-btn" class="btn btn-primary btn-block"
                                   value="Submit">
                        </div> <!-- form-group// -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {login} from "../helpers/auth";



export default {
    name: "Login",
    data() {
        return {
            form:{
                name:'',
                email: '',
                password: '',
                role:2,

            }
        }
    },
    methods: {

        submit() {
            axios.post('api/register', this.form ,{headers: {'Authorization': 'Bearer '+this.currentUser.token}})
                .then((response) => {
                    console.log(response)
                    window.location.reload();
                    alert('Registered Successfully!')
                })
                .catch(err =>{
                    console.log(err);
                    alert('Please Try Other Email!')
                })
        },
    },
    mounted() {
        console.log();
        if(this.$store.getters.currentUser.role == 2){
            // window.location.replace('/');
            alert('Login As Admin')
            window.location = "http://localhost:8000";
        }else if(this.$store.getters.currentUser.role == 3){
            alert('Login As Admin')
            window.location = "http://localhost:8000";
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
.error {
    text-align: center;
    color: red;
}
.card {
    background: #343a40;
}
</style>
