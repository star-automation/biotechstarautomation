<template>
    <div className="col-md-12" style="padding: 0px;">
                <h1 style="text-align: center; margin-bottom: 25px; padding-top: 30px;color: white;">Upload Reports</h1>
        <div class="col-md-6 m-auto" style="display:table !important;padding-right: 0px;">
            <div class="card">
                <div class="card-header">Add New Files</div>

                <div class="card-body">
                    <div v-if="success != ''" class="alert alert-success" role="alert">
                        {{success}}
                    </div>
                    <form @submit="formSubmit" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="label">Select Category</label>
                            <select class="form-control" v-model="select_category" id="sel1" required>
                                <option value="1">Volume</option>
                                <option value="2">Temperature</option>
                                <option value="3">Flow</option>
                            </select>
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Add Title </span>
                                </div>
                                <input type="text" class="form-control" v-model="name" required>
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group// -->


                        <div class="form-group">
                            <div class="input-group">
                                <input type="file" class="form-control" style="padding-bottom: 36px;" v-on:change="onFileChange" required>
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group// -->
                        <button class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import LineChart from './LineChart.js'
import {GraphReporting} from "../helpers/api";
import {logout} from "../helpers/auth";
import Chart from 'chart.js'
import { Line } from 'vue-chartjs';
import moment from "moment";
import 'datatables.net'
import 'datatables.net-bs';
import 'datatables.net-buttons-bs'
import 'datatables.net-responsive'
window.$ = window.jQuery = require( 'jquery' );
require( 'datatables.net' );
require( 'datatables.net-bs' );
export default {
    name: "PDFReport",
    data() {

        return {
            name: '',
            select_category:1,
            file: '',
            success: '',
            getreports:[]
            }

    },
    methods: {
        onFileChange(e){
            console.log(e.target.files[0]);
            this.file = e.target.files[0];
        },
        formSubmit(e) {
            e.preventDefault();
            let currentObj = this;

            const config = {
                headers: { 'content-type': 'multipart/form-data', 'Authorization': 'Bearer '+this.currentUser.token }
            }

            let formData = new FormData();
            formData.append('file', this.file);
            formData.append('name', this.name);
            formData.append('select_category', this.select_category);

            axios.post('api/formSubmit', formData, config)
                .then(function (response) {
                    currentObj.success = response.data.success;

                })
                .catch(function (error) {
                    currentObj.output = error;
                });
           this.name = '';
        },
    },
    beforeCreate: function() {
        document.querySelector('body').style.maxWidth = "100%";
        document.querySelector('body').style.minWidth = "100%";
    },
    beforeMount() {
        document.querySelector('body').style.color = "black";
    },
    mounted() {
    //     if (localStorage.getItem('reloaded')) {
    //         // The page was just reloaded. Clear the value from local storage
    //         // so that it will reload the next time this page is visited.
    //         localStorage.removeItem('reloaded');
    //     } else {
    //         // Set a flag so that we know not to reload the page twice.
    //         localStorage.setItem('reloaded', '1');
    //         location.reload();
    //     }
        document.getElementById('change-row').style.marginRight = "0px";
    },
    computed: {
        currentUser() {
            return this.$store.getters.currentUser
        }
    }
}
</script>

<style scoped>
.display tr{
    color: black !important;
}
#graphReport tr td {
    padding: 15px;
    text-align: center;
    border: 1px solid black !important;
}
retainer-data tr th{
    padding: 15px;
    text-align: center;
}

</style>
