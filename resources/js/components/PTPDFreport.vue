<template>
    <div className="col-md-12" style="padding: 0px;">


        <h1 style="text-align: center; padding-top: 30px;">PDF Report Of PTs</h1>
        <form name="chartForm" @submit.prevent="submit">
            <table class="col-md-9 table" style="margin:0 auto; margin-bottom: 30px; text-align: center; color: white">
                <tr>
                    <td>
                        <div class="form-group" >
                            <label >Select PT</label>
                            <select v-model="fields.select_pt"  class="form-control" id="pt">
                                <option value="pt_1">PT 1</option>
                                <option value="pt_2">PT 2</option>
                                <option value="pt_3">PT 3</option>
                                <option value="pt_4">PT 4</option>
                                <option value="pt_5">PT 5</option>
<!--                                <option value="pt_6">PT 6</option>-->
<!--                                <option value="pt_7">PT 7</option>-->
<!--                                <option value="pt_8">PT 8</option>-->
<!--                                <option value="pt_9">PT 9</option>-->
<!--                                <option value="pt_10">PT 10</option>-->
<!--                                <option value="pt_11">PT 11</option>-->
<!--                                <option value="pt_12">PT 12</option>-->
<!--                                <option value="pt_13">PT 13</option>-->
<!--                                <option value="pt_14">PT 14</option>-->
<!--                                <option value="pt_15">PT 15</option>-->
<!--                                <option value="pt_16">PT 16</option>-->
<!--                                <option value="pt_17">PT 17</option>-->
<!--                                <option value="pt_18">PT 18</option>-->
<!--                                <option value="pt_19">PT 19</option>-->
<!--                                <option value="pt_20">PT 20</option>-->
<!--                                <option value="pt_21">PT 21</option>-->
<!--                                <option value="pt_22">PT 22</option>-->
<!--                                <option value="pt_23">PT 23</option>-->
<!--                                <option value="pt_24">PT 24</option>-->
<!--                                <option value="pt_25">PT 25</option>-->
<!--                                <option value="pt_26">PT 26</option>-->
<!--                                <option value="pt_27">PT 27</option>-->
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

            <table id="graphReport" style="width: 80%; margin: 0 auto; text-align: center;" ref="exportable_table">

                <tbody v-if="fields.select_pt == 'pt_1'">
                <tr>

                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-1</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-1</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_1}}</td>
                    <td>{{fields.pt1_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_2'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-2</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-2</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_2}}</td>
                    <td>{{fields.pt2_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_3'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-3</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-3</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_3}}</td>
                    <td>{{fields.pt3_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_4'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-4</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-4</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_4}}</td>
                    <td>{{fields.pt4_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_5'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-5</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-5</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_5}}</td>
                    <td>{{fields.pt5_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_6'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-6</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-6</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_6}}</td>
                    <td>{{fields.pt6_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_7'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-7</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-7</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_7}}</td>
                    <td>{{fields.pt7_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_8'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-8</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-8</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_8}}</td>
                    <td>{{fields.pt8_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_9'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-9</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-9</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_9}}</td>
                    <td>{{fields.pt9_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_10'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-10</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-10</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_10}}</td>
                    <td>{{fields.pt10_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_11'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-11</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-11</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_11}}</td>
                    <td>{{fields.pt11_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_12'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-12</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-12</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_12}}</td>
                    <td>{{fields.pt12_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_13'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-13</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-13</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_13}}</td>
                    <td>{{fields.pt13_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_14'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-14</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-14</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_14}}</td>
                    <td>{{fields.pt14_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_15'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-15</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-15</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_15}}</td>
                    <td>{{fields.pt15_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_16'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-16</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-16</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_16}}</td>
                    <td>{{fields.pt16_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_17'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-17</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-17</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_17}}</td>
                    <td>{{fields.pt17_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_18'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-18</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-18</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_18}}</td>
                    <td>{{fields.pt18_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_19'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-19</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-19</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_19}}</td>
                    <td>{{fields.pt19_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_20'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-20</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-20</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_20}}</td>
                    <td>{{fields.pt20_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_21'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-21</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-21</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_21}}</td>
                    <td>{{fields.pt21_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_22'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-22</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-22</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_22}}</td>
                    <td>{{fields.pt22_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_23'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-23</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-23</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_23}}</td>
                    <td>{{fields.pt23_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_24'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-24</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-24</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_24}}</td>
                    <td>{{fields.pt24_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_25'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-25</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-25</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_25}}</td>
                    <td>{{fields.pt25_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_26'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-26</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-26</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_26}}</td>
                    <td>{{fields.pt26_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_27'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-27</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-27</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_27}}</td>
                    <td>{{fields.pt27_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_28'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-28</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-28</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_28}}</td>
                    <td>{{fields.pt28_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_29'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-29</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-29</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_29}}</td>
                    <td>{{fields.pt29_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_30'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-30</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-30</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_30}}</td>
                    <td>{{fields.pt30_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_pt == 'pt_31'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">PT-31</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>PT-31</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in pt" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.pt_31}}</td>
                    <td>{{fields.pt31_status}}</td>
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
            time:'',
            fields:{
                select_pt:'pt_1',
                setInterval:'1',
                startdate:'',
                enddate:'',
            },
            pt: [],
            timing:[],
            pt_status:'',
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
            axios.post('api/ptpdfreport', this.fields , {headers: {'Authorization': 'Bearer '+this.currentUser.token}})
                .then((response) => {
                    this.pt = response.data.db_data;


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
retainer-data tr th{
    padding: 15px;
    text-align: center;
}

</style>
