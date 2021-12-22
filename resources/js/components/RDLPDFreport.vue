<template>
    <div className="col-md-12" style="padding: 0px;">

        <h1 style="text-align: center; padding-top: 30px;">PDF Report Of RDLs</h1>
        <form name="chartForm" @submit.prevent="submit">
            <table class="col-md-9 table" style="margin:0 auto; margin-bottom: 30px; text-align: center; color: white">
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
                                <!--                                <option value="rdl_26">RDL 26</option>-->
                                <!--                                <option value="rdl_27">RDL 27</option>-->
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

                <tbody v-if="fields.select_rdl == 'rdl_1'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-1</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-1</b></td>
                    <td><b>VR-1</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields,i) in rdl" v-bind:key="i">

                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_1}}</td>
                    <td>{{  parseFloat(((fields.rdl_1/1)*0.156)+3).toFixed(2) }}</td>
                    <td>{{fields.rdl1_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_2'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-2</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-2</b></td>
                    <td><b>VR-2</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_2}}</td>
                    <td>{{ parseFloat(((fields.rdl_2 / 1) * 0.156) + 3).toFixed(2) }}</td>
                    <td>{{fields.rdl2_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_3'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-3</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-3</b></td>
                    <td><b>VR-3</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_3}}</td>
                    <td>{{ parseFloat(((fields.rdl_3 / 1) * 0.156) + 3).toFixed(2) }}</td>
                    <td>{{fields.rdl3_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_4'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-4</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-4</b></td>
                    <td><b>VR-4</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_4}}</td>
                    <td >{{ parseFloat(((fields.rdl_4 / 1) * 0.156) + 3).toFixed(2) }}</td>
                    <td>{{fields.rdl4_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_5'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-5</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-5</b></td>
                    <td><b>VR-5</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_5}}</td>
                    <td >{{ parseFloat(((fields.rdl_5 / 1) * 0.156) + 3).toFixed(2) }}</td>
                    <td>{{fields.rdl5_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_6'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-6</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-6</b></td>
                    <td><b>VR-6</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_6}}</td>
                    <td >{{ parseFloat(((fields.rdl_6 / 1) * 0.064) + 0).toFixed(2) }}</td>
                    <td>{{fields.rdl6_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_7'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-7</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-7</b></td>
                    <td><b>VR-7</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_7}}</td>
                    <td >{{ parseFloat(((fields.rdl_7 / 1) * 0.064) + 0).toFixed(2) }}</td>
                    <td>{{fields.rdl7_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_8'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-8</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-8</b></td>
                    <td><b>VR-8</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_8}}</td>
                    <td >{{ parseFloat(((fields.rdl_8 / 1) * 0.156) + 3).toFixed(2) }}</td>
                    <td>{{fields.rdl8_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_9'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-9</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-9</b></td>
                    <td><b>VR-9</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_9}}</td>
                    <td >{{ parseFloat(((fields.rdl_9 / 1) * 0.156) + 3).toFixed(2) }}</td>
                    <td>{{fields.rdl9_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_10'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-10</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-10</b></td>
                    <td><b>VR-10</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_10}}</td>
                    <td >{{ parseFloat(((fields.rdl_10 / 1) * 0.156) + 3).toFixed(2) }}</td>
                    <td>{{fields.rdl10_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_11'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-11</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-11</b></td>
                    <td><b>VR-11</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_11}}</td>
                    <td >{{ parseFloat(((fields.rdl_11 / 1) * 0.156) + 3).toFixed(2) }}</td>
                    <td>{{fields.rdl11_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_12'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-12</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-12</b></td>
                    <td><b>VR-12</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_12}}</td>
                    <td >{{ parseFloat(((fields.rdl_12 / 1) * 0.06) + 0).toFixed(2) }}</td>
                    <td>{{fields.rdl12_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_13'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-13</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-13</b></td>
                    <td><b>VR-13</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_13}}</td>
                    <td >{{ parseFloat(((fields.rdl_13 / 239.76) * 40) + 2.5).toFixed(2) }}</td>
                    <td>{{fields.rdl13_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_14'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-14</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-14</b></td>
                    <td><b>VR-14</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_14}}</td>
                    <td >{{ parseFloat(((fields.rdl_14 / 239.76) * 40) + 2.5).toFixed(2) }}</td>
                    <td>{{fields.rdl14_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_15'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-15</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-15</b></td>
                    <td><b>VR-15</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_15}}</td>
                    <td >{{ parseFloat(((fields.rdl_15 / 239.76) * 40) + 2.5).toFixed(2) }}</td>
                    <td>{{fields.rdl15_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_16'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-16</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-16</b></td>
                    <td><b>VR-16</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_16}}</td>
                    <td >{{ parseFloat(((fields.rdl_16 / 1) * 0.63) + 0).toFixed(2) }}</td>
                    <td>{{fields.rdl16_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_17'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-17</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-17</b></td>
                    <td><b>VR-17</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_17}}</td>
                    <td >{{ parseFloat(((fields.rdl_17 / 1) * 0.63) + 0).toFixed(2) }}</td>
                    <td>{{fields.rdl17_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_18'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-18</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-18</b></td>
                    <td><b>VR-18</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_18}}</td>
                    <td >{{ parseFloat(((fields.rdl_18 / 1) * 0.63) + 0).toFixed(2) }}</td>
                    <td>{{fields.rdl18_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_19'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-19</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-19</b></td>
                    <td><b>VR-19</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_19}}</td>
                    <td >{{ parseFloat(((fields.rdl_19 / 1) * 0.33) + 0).toFixed(2) }}</td>
                    <td>{{fields.rdl19_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_20'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-20</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-20</b></td>
                    <td><b>VR-20</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_20}}</td>
                    <td >{{ parseFloat(((fields.rdl_20 / 1) * 0.12) + 0).toFixed(2) }}</td>
                    <td>{{fields.rdl20_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_21'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-21</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-21</b></td>
                    <td><b>VR-21</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_21}}</td>
                    <td >{{ parseFloat(((fields.rdl_21 / 1) * 0.29) + 0).toFixed(2) }}</td>
                    <td>{{fields.rdl21_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_22'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-22</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-22</b></td>
                    <td><b>VR-22</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_22}}</td>
                    <td >{{ parseFloat(((fields.rdl_22 / 1) * 0.65) + 0).toFixed(2) }}</td>
                    <td>{{fields.rdl22_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_23'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-23</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-23</b></td>
                    <td><b>VR-23</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_23}}</td>
                    <td >{{ parseFloat(((fields.rdl_23 / 1) * 0.153) + 0).toFixed(2) }}</td>
                    <td>{{fields.rdl23_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_24'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-24</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-24</b></td>
                    <td><b>VR-24</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_24}}</td>
                    <td >{{ parseFloat(((fields.rdl_24 / 1) * 0.153) + 0).toFixed(2) }}</td>
                    <td>{{fields.rdl24_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_25'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-25</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-25</b></td>
                    <td><b>VR-25</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="(fields, i) in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_25}}</td>
                    <td >-</td>
                    <td>{{fields.rdl25_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_26'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-26</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-26</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_26}}</td>
                    <td>{{fields.rdl26_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_27'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-27</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-27</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_27}}</td>
                    <td>{{fields.rdl27_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_28'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-28</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-28</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_28}}</td>
                    <td>{{fields.rdl28_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_29'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-29</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-29</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_29}}</td>
                    <td>{{fields.rdl29_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_30'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-30</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-30</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_30}}</td>
                    <td>{{fields.rdl30_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rdl == 'rdl_31'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RDL-31</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RDL-31</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rdl" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rdl_31}}</td>
                    <td>{{fields.rdl31_status}}</td>
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
                select_rdl:'rdl_1',
                setInterval:'1',
                startdate:'',
                enddate:'',
            },
            rdl: [],
            timing:[],
            rdl_status:'',
            vr:[]
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
                // importCSS: true,
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
                    // this.rdl = response.data.db_data;
                    this.rdl = response.data.db_data
                    // this.vr = response.data.vr
                    // console.log(this.vr[0].vr_1)
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
