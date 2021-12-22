
<template>
    <div className="col-md-12" style="padding: 0px;">

        <h1 style="text-align: center;padding-top: 30px;">Graph Report Of DPLs</h1>
        <form name="chartForm" @submit.prevent="submit">
            <table style="margin:0 auto; margin-bottom: 30px;">
                <tr>
                    <td>
                        <div class="form-group" >
                            <label >Select DPL</label>
                            <select v-model="fields.select_dpl"  class="form-control" id="dpls">
                                <option value="dpl_1">DPL 1</option>
                                <option value="dpl_2">DPL 2</option>
                                <option value="dpl_3">DPL 3</option>
                                <option value="dpl_4">DPL 4</option>
                                <option value="dpl_5">DPL 5</option>
                                <option value="dpl_6">DPL 6</option>
                                <option value="dpl_7">DPL 7</option>
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
                    <th v-if="fields.select_dpl == ''"></th>
                    <th v-if="fields.select_dpl == 'dpl_1'">DPL 1</th>
                    <th v-if="fields.select_dpl == 'dpl_2'">DPL 2</th>
                    <th v-if="fields.select_dpl == 'dpl_3'">DPL 3</th>
                    <th v-if="fields.select_dpl == 'dpl_4'">DPL 4</th>
                    <th v-if="fields.select_dpl == 'dpl_5'">DPL 5</th>
                    <th v-if="fields.select_dpl == 'dpl_6'">DPL 6</th>
                    <th v-if="fields.select_dpl == 'dpl_7'">DPL 7</th>


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
            <canvas id="myChart" width="450" height="150"></canvas>
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
                select_dpl:'dpl_1',
                setInterval:'1',
                startdate:'',
                enddate:''
            },
            dpl: [],
            timing:[],
        }
    },

    methods: {
        print(){
            $(".container-2").printThis({
                canvas: true,              // copy canvas content
                header: "<h1 style='text-align: center'>Bio Tech Energy (PVT) LTD </h1>",
            });
        },
        submit() {
            axios.post('api/dplgraphreporting', this.fields , {headers: {'Authorization': 'Bearer '+this.currentUser.token}})
                .then((response) => {
                    this.dpl = response.data.dpl
console.log(this.dpl)
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
                                data: this.dpl,
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
    mounted() {
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
