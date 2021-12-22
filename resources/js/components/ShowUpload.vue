<template>
    <div className="col-md-12" style="padding: 0px;">
        <h1 style="text-align: center; padding-top: 30px; color: white; margin-bottom: 25px">Uploaded Reports</h1>

        <div class="col-md-6 m-auto custom-changing" style="display:table !important; padding-right: 0px;">
           <div class="float-right" style="margin-bottom: 15px">
               <form class="form-inline">
                   <input class="form-control mr-sm-2" id="searchinto" v-on:click="tablesearch()" placeholder="Search" aria-label="Search" style="margin-right: 0px !important;">
<!--                   <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
               </form>
           </div>
            <table id="myTable" class="table text-center" style="width:100%;background-color: white;">
                <thead>
                <tr>
                    <th>File Title</th>
                    <th>File</th>
                    <th>File Category</th>
                    <th>File Create Date</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>

                <tr v-for="getreport in getreports">
                    <td>{{getreport.name}}</td>
                    <td><a href="#" @click.prevent="getFile(getreport.address)" class="btn btn-primary">{{getreport.address}}</a></td>
                    <td v-if="getreport.category == 1">Volume</td>
                    <td v-if="getreport.category == 2">Temperature</td>
                    <td v-if="getreport.category == 3">Flow</td>
                    <td>{{getreport.created_at | formatDate1}}</td>
                    <td><button class="btn btn-danger" @click.prevent="deleteFile(getreport.id)">Delete</button></td>
                </tr>


                </tbody>
                <tfoot>
                <tr>
                    <th>File title</th>
                    <th>File</th>
                    <th>File Category</th>
                    <th>File Create Date</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
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
            select_category:0,
            file: '',
            success: '',
            getreports:[]
        }

    },
    methods: {
        tablesearch(){
            $("#searchinto").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            console.log()
        },
        getFile(file) {
            window.open("/upload/" + file, "_blank");
        },
        deleteFile(id){

            axios.get('/api/deleteupload/'+id,{headers: {'Authorization': 'Bearer '+this.currentUser.token}}).then(response => {
                this.getData()
            });
        },
        getData() {
            axios.get('api/getuploadedreports',{headers: {'Authorization': 'Bearer '+this.currentUser.token}})
                .then((response) => {
                    this.getreports = response.data.getreports;

                })
                .catch(err =>{
                    console.log(err);
                })
        },
    },
    beforeCreate: function() {
        document.querySelector('body').style.maxWidth = "100%";
        document.querySelector('body').style.minWidth = "100%";

        // document.getElementById("main").style.overflow = "hidden";
    },
    beforeMount() {
        this.getData();
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
