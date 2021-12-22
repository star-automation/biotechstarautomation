<template>
    <div className="col-md-12" style="padding: 0px;">

        <h1 style="text-align: center;padding-top: 30px;">Graph Report Of RDLs</h1>
        <form name="chartForm" @submit.prevent="submit">
            <table style="margin:0 auto; margin-bottom: 30px;">
                <tr>
                    <td>
                        <div class="form-group" >
                            <label >Select Rdl</label>
                            <select v-model="fields.select_rdl"  class="form-control" id="rdls">
                                <option value="rdl_1">RDL 1</option>
                                <option value="rdl_2">RDL 2</option>
                                <option value="rdl_3">RDL 3</option>
                                <option value="rdl_4">RDL 4</option>
                                <option value="rdl_5">RDL 5</option>
                                <option value="rdl_6">RDL 6</option>
                                <option value="rdl_7">RDL 7</option>
                                <option value="rdl_8">RDL 8</option>
                                <option value="rdl_9">RDL 9</option>
                                <option value="rdl_10">RDL 10</option>
                                <option value="rdl_11">RDL 11</option>
                                <option value="rdl_12">RDL 12</option>
                                <option value="rdl_13">RDL 13</option>
                                <option value="rdl_14">RDL 14</option>
                                <option value="rdl_15">RDL 15</option>
                                <option value="rdl_16">RDL 16</option>
                                <option value="rdl_17">RDL 17</option>
                                <option value="rdl_18">RDL 18</option>
                                <option value="rdl_19">RDL 19</option>
                                <option value="rdl_20">RDL 20</option>
                                <option value="rdl_21">RDL 21</option>
                                <option value="rdl_22">RDL 22</option>
                                <option value="rdl_23">RDL 23</option>
                                <option value="rdl_24">RDL 24</option>
                                <option value="rdl_25">RDL 25</option>
                                <option value="rdl_26">RDL 26</option>
                                <option value="rdl_27">RDL 27</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group" >
                            <label>Set Intervals</label>
                            <select v-model="fields.setInterval" class="form-control" id="interval">

                                <option value="1">1 Minute</option>
                                <option value="2">2 Minute</option>
                                <option value="5">5 Minute</option>
                                <option value="10">10 Minute</option>
                                <option value="30">30 Minute</option>
                                <option value="60">1 Hour</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label>Start Date</label>
                            <input type="datetime-local"  class="form-control" v-model="fields.startdate" id="js_fromdate"  >
                        </div>

                    </td>
                    <td>
                        <div class="form-group">
                            <label>End Date</label>
                            <input type="datetime-local" v-model="fields.enddate" class="form-control" required>
                        </div>
                    </td>
                    <td>
                        <div class="form-group" style="margin-top: 30px;">
                            <input type="submit" value="Show Data" class="btn btn-primary">
                        </div>
                    </td>
                </tr>

            </table>
        </form>
        <button id="btn_print" v-on:click="print" class="btn btn-success" style="position:absolute; left: 86%; top: 130px;">Print Chart</button>
        <div class="container-2 col-md-10 m-auto">
            <table class="col-md-6 table" style="margin: 0 auto; text-align: center; color: white">
                <tr>
                    <td>Value</td>
                    <td>Interval</td>
                    <td>From </td>
                    <td>To </td>
                </tr>
                <tr>
                    <th v-if="fields.select_rdl == ''"></th>
                    <th v-if="fields.select_rdl == 'rdl_1'">RDL 1</th>
                    <th v-if="fields.select_rdl == 'rdl_2'">RDL 2</th>
                    <th v-if="fields.select_rdl == 'rdl_3'">RDL 3</th>
                    <th v-if="fields.select_rdl == 'rdl_4'">RDL 4</th>
                    <th v-if="fields.select_rdl == 'rdl_5'">RDL 5</th>
                    <th v-if="fields.select_rdl == 'rdl_6'">RDL 6</th>
                    <th v-if="fields.select_rdl == 'rdl_7'">RDL 7</th>
                    <th v-if="fields.select_rdl == 'rdl_8'">RDL 8</th>
                    <th v-if="fields.select_rdl == 'rdl_9'">RDL 9</th>
                    <th v-if="fields.select_rdl == 'rdl_10'">RDL 10</th>
                    <th v-if="fields.select_rdl == 'rdl_11'">RDL 11</th>
                    <th v-if="fields.select_rdl == 'rdl_12'">RDL 12</th>
                    <th v-if="fields.select_rdl == 'rdl_13'">RDL 13</th>
                    <th v-if="fields.select_rdl == 'rdl_14'">RDL 14</th>
                    <th v-if="fields.select_rdl == 'rdl_15'">RDL 15</th>
                    <th v-if="fields.select_rdl == 'rdl_16'">RDL 16</th>
                    <th v-if="fields.select_rdl == 'rdl_17'">RDL 17</th>
                    <th v-if="fields.select_rdl == 'rdl_18'">RDL 18</th>
                    <th v-if="fields.select_rdl == 'rdl_19'">RDL 19</th>
                    <th v-if="fields.select_rdl == 'rdl_20'">RDL 20</th>
                    <th v-if="fields.select_rdl == 'rdl_21'">RDL 21</th>
                    <th v-if="fields.select_rdl == 'rdl_22'">RDL 22</th>
                    <th v-if="fields.select_rdl == 'rdl_23'">RDL 23</th>
                    <th v-if="fields.select_rdl == 'rdl_24'">RDL 24</th>
                    <th v-if="fields.select_rdl == 'rdl_25'">RDL 25</th>
                    <th v-if="fields.select_rdl == 'rdl_26'">RDL 26</th>
                    <th v-if="fields.select_rdl == 'rdl_27'">RDL 27</th>
                    <th v-if="fields.select_rdl == 'rdl_28'">RDL 28</th>
                    <th v-if="fields.select_rdl == 'rdl_29'">RDL 29</th>
                    <th v-if="fields.select_rdl == 'rdl_30'">RDL 30</th>
                    <th v-if="fields.select_rdl == 'rdl_31'">RDL 31</th>

                    <th v-if="fields.setInterval == ''"></th>
                    <th v-if="fields.setInterval == '1'">1 Minute</th>
                    <th v-if="fields.setInterval == '2'">2 Minute</th>
                    <th v-if="fields.setInterval == '5'">5 Minute</th>
                    <th v-if="fields.setInterval == '10'">10 Minute</th>
                    <th v-if="fields.setInterval == '30'">30 Minute</th>
                    <th v-if="fields.setInterval == '60'">1 Hour</th>

                    <th>{{ fields.startdate | formatDate }}</th>
                    <th>{{fields.enddate | formatDate}}</th>
                </tr>
            </table>
            <canvas id="myChart" width="450" height="150" style="color: white;"></canvas>
        </div>

    </div>
</template>

<script>
import LineChart from './LineChart.js'
import {GraphReporting} from "../helpers/api";
import {logout} from "../helpers/auth";
import Chart from 'chart.js'
import { Line } from 'vue-chartjs';

export default {
    components: {
        LineChart
    },
    name: "GraphReporting",
    extends: Line,
    data() {
        return {
            fields:{
                select_rdl:'rdl_1',
                setInterval:'1',
                startdate:'',
                enddate:''
            },
            rdl: [],
            timing:[],
        }
    },

    methods: {
        print(){
            $(".container-2").printThis({
                debug: false,
                canvas: true,              // copy canvas content
                printContainer: true,
                header: "<h1 style='text-align: center'>Bio Tech Energy (PVT) LTD </h1>",
                formValues: true,
                importCSS: true,
                importStyle: true,
                removeInline: false
            });
        },
        submit() {
            axios.post('api/rdlgraphreporting', this.fields , {headers: {'Authorization': 'Bearer '+this.currentUser.token}})
                .then((response) => {
                    this.rdl = response.data.rdl
                    this.timing = response.data.timing
                    var ctx = document.getElementById('myChart').getContext('2d');
                    if(window.bar != undefined)
                        window.bar.destroy();
                    window.bar = new Chart(ctx, {
                        type: 'line',
                        tooltips: {enabled: false},
                        hover: {mode: null},
                        data: {
                            labels: this.timing,
                            datasets: [{
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.fields.select_rdl,
                                data: this.rdl,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                                ,fill: false,
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                        min: 1,
                                    },

                                }],
                                xAxes: [{
                                    stacked: true,
                                    ticks: {
                                        autoSkip: true,
                                    }
                                }],

                            },


                        }
                    });
                })
                .catch(err =>{
                    console.log(err);
                })
        },


    },


    computed: {

        currentUser() {
            return this.$store.getters.currentUser
        }
    }
}
</script>

<style scoped>
table tr td{
    padding:15px;
    text-align: center;
}
.retainer-data tr th{
    padding: 15px;
    text-align: center;
}
@media print {
    body {
        color: #000000 !important;
        -webkit-print-color-adjust: exact;
    }
}
</style>
