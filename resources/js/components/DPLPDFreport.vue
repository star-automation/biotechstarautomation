
<template>
    <div className="col-md-12" style="padding: 0px;">

        <h1 style="text-align: center; padding-top: 30px;">PDF Report Of DPLs</h1>
        <form name="chartForm" @submit.prevent="submit">
            <table class="col-md-9 table" style="margin:0 auto; margin-bottom: 30px; text-align: center; color: white">
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
                            <input type="datetime-local" class="form-control" v-model="fields.startdate" id="js_fromdate"  >
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
        <button id="btn_print" v-on:click="print" class="btn btn-success" style="position:absolute; left: 87%; top: 128px;">Export PDF</button>
        <button  @click="ExportExcel('xls')" class="btn btn-success" style="position:absolute; left: 87%; top: 170px;">Export Excel</button>
        <div style=" width:113px; height:91px;position: absolute;top: 179px;background: #003749;"></div>
        <div class="container-2">
            <div class="logo" style=" width:113px; height:90px; background-image: url('images/logo.png');background-repeat:no-repeat;margin-top: -47px;"></div>

            <table class="" id="graphReport" style="width: 80%; margin: 0 auto; text-align: center; " ref="exportable_table">

                <tbody v-if="fields.select_dpl == 'dpl_1'">
                <tr>

                    <th class="custom-th" colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">DPL-1</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>DPL-1</b></td>
                    <td><b>DPL Vol</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in dpl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.dpl_1}}</td>
                    <td >{{ parseFloat(((fields.dpl_1 / 1) * 0.023) + 0.1617).toFixed(2) }}</td>
                    <td>{{fields.dpl1_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_dpl == 'dpl_2'">
                <tr>
                    <th class="custom-th" colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">DPL-2</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>DPL-2</b></td>
                    <td><b>DPL Vol</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in dpl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.dpl_2}}</td>
                    <td >{{ parseFloat(((fields.dpl_2 / 1) * 0.0206) + 0.2738).toFixed(2) }}</td>
                    <td>{{fields.dpl2_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_dpl == 'dpl_3'">
                <tr>
                    <th class="custom-th" colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">DPL-3</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>DPL-3</b></td>
                    <td><b>DPL Vol</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in dpl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.dpl_3}}</td>
                    <td >{{ parseFloat(((fields.dpl_3 / 1) * 0.0143) + 0.12).toFixed(2) }}</td>
                    <td>{{fields.dpl3_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_dpl == 'dpl_4'">
                <tr>
                    <th class="custom-th" colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">DPL-4</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>DPL-4</b></td>
                    <td><b>DPL Vol</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in dpl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.dpl_4}}</td>
                    <td >{{ parseFloat(((fields.dpl_4 / 1) * 0.0102) + 0.0957).toFixed(2) }}</td>
                    <td>{{fields.dpl4_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_dpl == 'dpl_5'">
                <tr>
                    <th class="custom-th" colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">DPL-5</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>DPL-5</b></td>
                    <td><b>DPL Vol</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in dpl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.dpl_5}}</td>
                    <td >{{ parseFloat(((fields.dpl_5 / 1) * 0.0102) + 0.0957).toFixed(2) }}</td>
                    <td>{{fields.dpl5_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_dpl == 'dpl_6'">
                <tr>
                    <th class="custom-th" colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">DPL-6</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>DPL-6</b></td>
                    <td><b>DPL Vol</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in dpl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.dpl_6}}</td>
                    <td >{{ parseFloat(((fields.dpl_6 / 1) * 0.0287) + 0.4543).toFixed(2) }}</td>
                    <td>{{fields.dpl6_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_dpl == 'dpl_7'">
                <tr>
                    <th class="custom-th" colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">DPL-7</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>DPL-7</b></td>
                    <td><b>DPL Vol</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in dpl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.dpl_7}}</td>
                    <td >{{ parseFloat(((fields.dpl_7 / 1) * 0.0128) + 0.134).toFixed(2) }}</td>
                    <td>{{fields.dpl7_status}}</td>
                </tr>
                </tbody>

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

export default {
    name: "PDFReport",
    data() {

        return {
            time:'',
            fields:{
                select_dpl:'dpl_1',
                setInterval:'1',
                startdate:'',
                enddate:'',
            },
            dpl: [],
            timing:[],
            dpl_status:'',
        }

    },

    methods: {
        ExportExcel(type, fn, dl) {
            var elt = this.$refs.exportable_table;
            var wb = XLSX.utils.table_to_book(elt, {sheet:"Sheet JS"});
            return dl ?
                XLSX.write(wb, {bookType:type, bookSST:true, type: 'base64'}) :
                XLSX.writeFile(wb, fn || (('BioTech' + '.'|| 'SheetJSTableExport.') + (type || 'xlsx')));
        },
        print(){
            $(".container-2").printThis({
                importCSS: true,
                importStyle: true,
                loadCSS: "path/to/my.css",
                header: "<h1 style='text-align: center'>Bio Tech Energy (PVT) LTD </h1>",
                base: "",
                canvas: true,              // copy canvas content
            });
        },
        submit() {
            axios.post('api/rdlpdfreport', this.fields , {headers: {'Authorization': 'Bearer '+this.currentUser.token}})
                .then((response) => {
                    this.dpl = response.data.db_data;
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
#graphReport tr td {
    padding: 15px;
    text-align: center;
    border: 1px solid black !important;
}
#graphReport tr{

    border: none !important;
}
.retainer-data tr th{
    padding: 15px;
    text-align: center;

}

</style>
