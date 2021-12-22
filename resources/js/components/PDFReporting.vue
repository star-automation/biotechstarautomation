<template>
    <div className="col-md-12" style="padding: 0px;">

        <h1 style="text-align: center; padding-top: 30px;">PDF Report Of RTDs</h1>
        <form name="chartForm" @submit.prevent="submit">
            <table class="col-md-9 table" style="margin:0 auto; margin-bottom: 30px; text-align: center; color: white">
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

            <table class="table" id="graphReport" style="width: 80%; margin: 0 auto; text-align: center; " ref="exportable_table">

                <tbody v-if="fields.select_rtd == 'rtd_1'">
                <tr>

                    <th colspan="3" style="font-size: 20px; border: none;">Detailed Report of  <span style="color:#ba4848">RTD-1</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-1</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_1}}</td>
                    <td>{{fields.rtd1_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_2'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-2</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-2</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_2}}</td>
                    <td>{{fields.rtd2_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_3'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-3</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-3</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_3}}</td>
                    <td>{{fields.rtd3_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_4'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-4</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-4</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_4}}</td>
                    <td>{{fields.rtd4_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_5'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-5</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-5</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_5}}</td>
                    <td>{{fields.rtd5_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_6'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-6</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-6</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_6}}</td>
                    <td>{{fields.rtd6_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_7'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-7</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-7</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_7}}</td>
                    <td>{{fields.rtd7_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_8'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-8</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-8</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_8}}</td>
                    <td>{{fields.rtd8_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_9'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-9</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-9</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_9}}</td>
                    <td>{{fields.rtd9_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_10'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-10</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-10</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_10}}</td>
                    <td>{{fields.rtd10_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_11'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-11</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-11</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_11}}</td>
                    <td>{{fields.rtd11_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_12'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-12</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-12</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_12}}</td>
                    <td>{{fields.rtd12_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_13'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-13</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-13</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_13}}</td>
                    <td>{{fields.rtd13_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_14'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-14</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-14</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_14}}</td>
                    <td>{{fields.rtd14_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_15'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-15</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-15</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_15}}</td>
                    <td>{{fields.rtd15_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_16'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-16</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-16</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_16}}</td>
                    <td>{{fields.rtd16_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_17'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-17</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-17</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_17}}</td>
                    <td>{{fields.rtd17_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_18'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-18</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-18</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_18}}</td>
                    <td>{{fields.rtd18_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_19'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-19</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-19</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_19}}</td>
                    <td>{{fields.rtd19_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_20'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-20</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-20</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_20}}</td>
                    <td>{{fields.rtd20_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_21'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-21</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-21</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_21}}</td>
                    <td>{{fields.rtd21_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_22'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-22</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-22</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_22}}</td>
                    <td>{{fields.rtd22_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_23'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-23</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-23</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_23}}</td>
                    <td>{{fields.rtd23_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_24'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-24</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-24</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_24}}</td>
                    <td>{{fields.rtd24_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_25'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-25</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-25</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_25}}</td>
                    <td>{{fields.rtd25_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_26'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-26</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-26</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_26}}</td>
                    <td>{{fields.rtd26_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_27'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-27</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-27</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_27}}</td>
                    <td>{{fields.rtd27_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_28'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-28</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-28</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_28}}</td>
                    <td>{{fields.rtd28_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_29'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-29</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-29</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_29}}</td>
                    <td>{{fields.rtd29_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_30'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-30</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-30</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_30}}</td>
                    <td>{{fields.rtd30_status}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_rtd == 'rtd_31'">
                <tr>
                    <th colspan="3" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">RTD-31</span><br>Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Timing</b></td>
                    <td><b>RTD-31</b></td>
                    <td><b>Status</b></td>
                </tr>
                <tr v-for="fields in rtd" v-bind:key="fields.id">
                    <td>{{fields.timing}}</td>
                    <td>{{fields.rtd_31}}</td>
                    <td>{{fields.rtd31_status}}</td>
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
                select_rtd:'rtd_1',
                setInterval:'1',
                startdate:'',
                enddate:'',
            },
            rtd: [],
            timing:[],
            rtd_status:'',
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


                    header: "<h1 style='text-align: center'>Bio Tech Energy (PVT) LTD </h1>",

                    canvas: true,              // copy canvas content
            });
        },
        submit() {
            axios.post('api/pdfreporting', this.fields , {headers: {'Authorization': 'Bearer '+this.currentUser.token}})
                .then((response) => {
                    this.rtd = response.data.db_data;
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
    color: white ;
    border: 1px solid black !important;
}

.retainer-data tr th{
    padding: 15px;
    color: white !important;
    text-align: center;
}
th{
    color: white !important;
}

</style>
