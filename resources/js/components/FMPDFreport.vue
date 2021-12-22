<template>
    <div className="col-md-12" style="padding: 0px;">

        <h1 style="text-align: center; padding-top: 30px;">PDF Report Of FMs</h1>
        <form name="chartForm" @submit.prevent="submit">
            <table class="col-md-9 table" style="margin:0 auto; margin-bottom: 30px; text-align: center; color:white;">
                <tr>
                    <td>
                        <div class="form-group" >
                            <label >Select FM</label>
                            <select v-model="fields.select_fm"  class="form-control" id="FMs">
                                <option value="fm_1">FM 1</option>
                                <option value="fm_2">FM 2</option>
                                <option value="fm_3">FM 3</option>
                                <option value="fm_4">FM 4</option>
                                <option value="fm_5">FM 5</option>
                                <option value="fm_6">FM 6</option>
                                <option value="fm_7">FM 7</option>
                                <option value="fm_8">FM 8</option>
                                <option value="fm_9">FM 9</option>
                                <option value="fm_10">FM 10</option>
                                <option value="fm_11">FM 11</option>
                                <option value="fm_12">FM 12</option>
                                <option value="fm_13">FM 13</option>
                                <option value="fm_14">FM 14</option>
                                <option value="fm_15">FM 15</option>
                                <option value="fm_16">FM 16</option>
                                <option value="fm_17">FM 17</option>
                                <option value="fm_18">FM 18</option>
                                <option value="fm_19">FM 19</option>
                                <option value="fm_20">FM 20</option>
                                <option value="fm_21">FM 21</option>
                                <option value="fm_22">FM 22</option>
                                <option value="fm_23">FM 23</option>
                                <option value="fm_24">FM 24</option>
                                <option value="fm_25">FM 25</option>
                                <option value="fm_26">FM 26</option>
                                <option value="fm_27">FM 27</option>
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

            <table class="" id="graphReport" style="width: 80%; margin: 0 auto; text-align: center;" ref="exportable_table">

                <tbody v-if="fields.select_fm == 'fm_1'">
                <tr>

                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-1</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-1</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_1}}</td>
                    <td>{{fields.fm1_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_2'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-2</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-2</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_2}}</td>
                    <td>{{fields.fm2_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_3'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-3</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-3</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_3}}</td>
                    <td>{{fields.fm3_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_4'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-4</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-4</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_4}}</td>
                    <td>{{fields.fm4_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_5'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-5</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-5</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_5}}</td>
                    <td>{{fields.fm5_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_6'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-6</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-6</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_6}}</td>
                    <td>{{fields.fm6_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_7'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-7</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-7</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_7}}</td>
                    <td>{{fields.fm7_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_8'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-8</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-8</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_8}}</td>
                    <td>{{fields.fm8_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_9'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-9</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-9</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_9}}</td>
                    <td>{{fields.fm9_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_10'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-10</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-10</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_10}}</td>
                    <td>{{fields.fm10_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_11'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-11</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-11</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_11}}</td>
                    <td>{{fields.fm11_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_12'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-12</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-12</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_12}}</td>
                    <td>{{fields.fm12_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_13'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-13</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-13</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_13}}</td>
                    <td>{{fields.fm13_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_14'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-14</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-14</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_14}}</td>
                    <td>{{fields.fm14_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_15'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-15</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-15</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_15}}</td>
                    <td>{{fields.fm15_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_16'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-16</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-16</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_16}}</td>
                    <td>{{fields.fm16_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_17'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-17</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-17</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_17}}</td>
                    <td>{{fields.fm17_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_18'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-18</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-18</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_18}}</td>
                    <td>{{fields.fm18_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_19'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-19</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-19</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_19}}</td>
                    <td>{{fields.fm19_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_20'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-20</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-20</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_20}}</td>
                    <td>{{fields.fm20_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_21'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-21</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-21</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_21}}</td>
                    <td>{{fields.fm21_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_22'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-22</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-22</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_22}}</td>
                    <td>{{fields.fm22_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_23'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-23</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-23</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_23}}</td>
                    <td>{{fields.fm23_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_24'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-24</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-24</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_24}}</td>
                    <td>{{fields.fm24_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_25'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-25</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-25</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_25}}</td>
                    <td>{{fields.fm25_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_26'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-26</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-26</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_26}}</td>
                    <td>{{fields.fm26_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_fm == 'fm_27'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-27</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>FM-27</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in fm" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.fm_27}}</td>
                    <td>{{fields.fm27_status}}</td>
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
                select_fm:'fm_1',
                setInterval:'1',
                startdate:'',
                enddate:'',
            },
            fm: [],
            timing:[],
            fm_status:'',
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

                header: "<h1 style='text-align: center'>Bio Tech Energy (PVT) LTD </h1>",
                base: "",
                canvas: true,              // copy canvas content
            });
        },
        submit() {
            axios.post('api/fmpdfreport', this.fields , {headers: {'Authorization': 'Bearer '+this.currentUser.token}})
                .then((response) => {
                    this.fm = response.data.db_data;
                    console.log(this.fm)
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

.retainer-data tr th{
    padding: 15px;
    text-align: center;
}

</style>
