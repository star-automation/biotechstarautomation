<template>
    <div class="login row justify-content-center">
        <div class="col-md-4" style="margin-top: 235px;">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4 mt-1">Scada BioTech</h4>
                    <hr>
                    <div class="form-group" v-if="authError">
                        <p class="text-danger text-center">You are  {{authError}}</p>
                    </div>
                    <form @submit.prevent="authenticate">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                </div>
                                <input type="email" class="form-control" name="email" id="email" v-model="form.email" placeholder="Email">
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group// -->

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input type="password" name="password" id="password" v-model="form.password" class="form-control" placeholder="******">
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group// -->

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit-btn" class="btn btn-primary btn-block" value="Login">
                        </div> <!-- form-group// -->
                        <p class="text-center"><a href="#" class="btn">Forgot password?</a></p>


                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {login} from "../../helpers/auth";

export default {
    name: "Login",
    data(){
        return {
            form: {
                email: '',
                password: ''
            }
        }
    },
    methods: {
        authenticate(){
            this.$store.dispatch('login');

            login(this.$data.form)
            .then((res)=>{
                if (res.status_code === 200){
                    this.$store.commit("loginSuccess", res);
                    this.$router.push("/");
                } else {
                    this.$store.commit("loginFailed", {res});
                }
            })
            .catch((err)=>{
                this.$store.commit("loginFailed", {err});
            });
        }
    },
    computed: {
        authError() {
            return this.$store.getters.authError;
        }
    }
}
</script>

<style scoped>
.error {
    text-align: center;
    color: red;
}
.card{
    opacity: 0.78;
    background: black;
    border-radius: 25px;
}
</style>
