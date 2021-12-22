<template>
    <div className="col-md-12" style="padding: 0px;">

        <h1 style="text-align: center;padding-top: 30px;">Graph Report Of RTDs</h1>
<form name="chartForm" @submit.prevent="submit">
        <table style="margin:0 auto; margin-bottom: 30px;">
                <tr>
                    <td>
                        <div class="form-group" >
                            <label >Select Rtd</label>
                            <select v-model="fields.select_rtd"  class="form-control" id="rtds">
                                <option value="rtd_1">RTD 1</option>
                                <option value="rtd_2">RTD 2</option>
                                <option value="rtd_3">RTD 3</option>
                                <option value="rtd_4">RTD 4</option>
                                <option value="rtd_5">RTD 5</option>
                                <option value="rtd_6">RTD 6</option>
                                <option value="rtd_7">RTD 7</option>
                                <option value="rtd_8">RTD 8</option>
                                <option value="rtd_9">RTD 9</option>
                                <option value="rtd_10">RTD 10</option>
                                <option value="rtd_11">RTD 11</option>
                                <option value="rtd_12">RTD 12</option>
                                <option value="rtd_13">RTD 13</option>
                                <option value="rtd_14">RTD 14</option>
                                <option value="rtd_15">RTD 15</option>
                                <option value="rtd_16">RTD 16</option>
                                <option value="rtd_17">RTD 17</option>
                                <option value="rtd_18">RTD 18</option>
                                <option value="rtd_19">RTD 19</option>
                                <option value="rtd_20">RTD 20</option>
                                <option value="rtd_21">RTD 21</option>
                                <option value="rtd_22">RTD 22</option>
                                <option value="rtd_23">RTD 23</option>
                                <option value="rtd_24">RTD 24</option>
                                <option value="rtd_25">RTD 25</option>
                                <option value="rtd_26">RTD 26</option>
                                <option value="rtd_27">RTD 27</option>
                                <option value="rtd_28">RTD 28</option>
                                <option value="rtd_29">RTD 29</option>
                                <option value="rtd_30">RTD 30</option>
                                <option value="rtd_31">RTD 31</option>
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
                    <th v-if="fields.select_rtd == ''"></th>
                    <th v-if="fields.select_rtd == 'rtd_1'">RTD 1</th>
                    <th v-if="fields.select_rtd == 'rtd_2'">RTD 2</th>
                    <th v-if="fields.select_rtd == 'rtd_3'">RTD 3</th>
                    <th v-if="fields.select_rtd == 'rtd_4'">RTD 4</th>
                    <th v-if="fields.select_rtd == 'rtd_5'">RTD 5</th>
                    <th v-if="fields.select_rtd == 'rtd_6'">RTD 6</th>
                    <th v-if="fields.select_rtd == 'rtd_7'">RTD 7</th>
                    <th v-if="fields.select_rtd == 'rtd_8'">RTD 8</th>
                    <th v-if="fields.select_rtd == 'rtd_9'">RTD 9</th>
                    <th v-if="fields.select_rtd == 'rtd_10'">RTD 10</th>
                    <th v-if="fields.select_rtd == 'rtd_11'">RTD 11</th>
                    <th v-if="fields.select_rtd == 'rtd_12'">RTD 12</th>
                    <th v-if="fields.select_rtd == 'rtd_13'">RTD 13</th>
                    <th v-if="fields.select_rtd == 'rtd_14'">RTD 14</th>
                    <th v-if="fields.select_rtd == 'rtd_15'">RTD 15</th>
                    <th v-if="fields.select_rtd == 'rtd_16'">RTD 16</th>
                    <th v-if="fields.select_rtd == 'rtd_17'">RTD 17</th>
                    <th v-if="fields.select_rtd == 'rtd_18'">RTD 18</th>
                    <th v-if="fields.select_rtd == 'rtd_19'">RTD 19</th>
                    <th v-if="fields.select_rtd == 'rtd_20'">RTD 20</th>
                    <th v-if="fields.select_rtd == 'rtd_21'">RTD 21</th>
                    <th v-if="fields.select_rtd == 'rtd_22'">RTD 22</th>
                    <th v-if="fields.select_rtd == 'rtd_23'">RTD 23</th>
                    <th v-if="fields.select_rtd == 'rtd_24'">RTD 24</th>
                    <th v-if="fields.select_rtd == 'rtd_25'">RTD 25</th>
                    <th v-if="fields.select_rtd == 'rtd_26'">RTD 26</th>
                    <th v-if="fields.select_rtd == 'rtd_27'">RTD 27</th>
                    <th v-if="fields.select_rtd == 'rtd_28'">RTD 28</th>
                    <th v-if="fields.select_rtd == 'rtd_29'">RTD 29</th>
                    <th v-if="fields.select_rtd == 'rtd_30'">RTD 30</th>
                    <th v-if="fields.select_rtd == 'rtd_31'">RTD 31</th>

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
                select_rtd:'rtd_1',
                setInterval:'1',
                startdate:'',

                enddate:''
            },
            rtd: [],
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
             axios.post('api/graphreporting', this.fields , {headers: {'Authorization': 'Bearer '+this.currentUser.token}})
                .then((response) => {
                    this.rtd = response.data.rtd
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
                                            label: 'label',
                                            data: [this.rtd],

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
        // getData() {
        //     // const token =this.currentUser.token;
        //     axios.get('api/graphreporting', {headers: {'Authorization': 'Bearer '+this.currentUser.token}})
        //         .then((response) => {
        //             this.rtd = response.data.rtd
        //             let rtd_1 =new Array();
        //             let timing =new Array();
        //             for (var i = 0; i < this.rtd.length; i++) {
        //                 rtd_1.push(this.rtd[i]['rtd_1']);
        //                 timing.push(this.rtd[i]['timing']);
        //             }
        //             var ctx = document.getElementById('myChart').getContext('2d');
        //             var myChart = new Chart(ctx, {
        //                 type: 'line',
        //                 data: {
        //                     labels: timing,
        //                     datasets: [{
        //                         label: 'label',
        //                         data: rtd_1,
        //
        //                         backgroundColor: [
        //                             'rgba(255, 99, 132, 0.2)',
        //                             'rgba(54, 162, 235, 0.2)',
        //                             'rgba(255, 206, 86, 0.2)',
        //                             'rgba(75, 192, 192, 0.2)',
        //                             'rgba(153, 102, 255, 0.2)',
        //                             'rgba(255, 159, 64, 0.2)'
        //                         ],
        //                         borderColor: [
        //                             'rgba(255, 99, 132, 1)',
        //                             'rgba(54, 162, 235, 1)',
        //                             'rgba(255, 206, 86, 1)',
        //                             'rgba(75, 192, 192, 1)',
        //                             'rgba(153, 102, 255, 1)',
        //                             'rgba(255, 159, 64, 1)'
        //                         ],
        //                         borderWidth: 1
        //                         ,fill: false,
        //                     }]
        //                 },
        //                 options: {
        //                     scales: {
        //                         yAxes: [{
        //                             ticks: {
        //                                 beginAtZero: true,
        //                                 min: 1,
        //                             }
        //                         }],
        //                         xAxes: [{
        //                             stacked: true,
        //                             ticks: {
        //                                 autoSkip: true,
        //                             }
        //
        //                         }],
        //                     }
        //                 }
        //             });
        //
        //         })
        //         .catch((err) => {
        //             console.log(err);
        //         })
        // },

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
