<template>
    <div className="col-md-12" style="padding: 0px;">

        <h1 style="text-align: center; padding-top: 30px;">Pump On/Off Report</h1>
        <form name="chartForm" @submit.prevent="submit">
            <table class="col-md-9 table" style="margin:0 auto; margin-bottom: 30px; text-align: center; color: white">
                <tr>
                    <td>
                        <div class="form-group" >
                            <label >Select Pump</label>
                            <select v-model="fields.pumpname"  class="form-control" id="pumps">
                                <option value="p102a">P102 A</option>
                                <option value="p102b">P102 B</option>
                                <option value="p103a">P103 A</option>
                                <option value="p103b">P103 B</option>
                                <option value="p202b">P202 B</option>
                                <option value="p203a">P203 A</option>
                                <option value="p203b">P203 B</option>
                                <option value="p204a">P204 A</option>
                                <option value="p204b">P204 B</option>
                                <option value="p401a">P401 A</option>
                                <option value="p401b">P401 B</option>
                                <option value="p402a">P402 A</option>
                                <option value="p402b">P402 B</option>
                                <option value="p402c">P402 C</option>
                                <option value="p403a">P403 A</option>
                                <option value="p403b">P403 B</option>
                                <option value="p404a">P404 A</option>
                                <option value="p404b">P404 B</option>
                                <option value="p405a">P405 A</option>
                                <option value="p405b">P405 B</option>
                                <option value="p406a">P406 A</option>
                                <option value="p406b">P406 B</option>
                                <option value="p407a">P407 A</option>
                                <option value="p407b">P407 B</option>
                                <option value="p501a">P501 A</option>
                                <option value="p501b">P501 B</option>
                                <option value="p502a">P502 A</option>
                                <option value="p502b">P502 B</option>
                                <option value="p503a">P503 A</option>
                                <option value="p503b">P503 B</option>
                                <option value="p504a">P504 A</option>
                                <option value="p504b">P504 B</option>
                                <option value="p505a">P505 A</option>
                                <option value="p505b">P505 B</option>
                                <option value="p601a">P601 A</option>
                                <option value="p601b">P601 B</option>
                                <option value="p602a">P602 A</option>
                                <option value="p602b">P602 B</option>
                                <option value="p603a">P603 A</option>
                                <option value="p603b">P603 B</option>
                                <option value="p702a">P702 A</option>
                                <option value="p702b">P702 B</option>
                                <option value="p705a">P705 A</option>
                                <option value="p705b">P705 B</option>
                                <option value="p810a">P810 A</option>
                                <option value="p810b">P810 B</option>
                                <option value="p810c">P810 C</option>
                                <option value="sp">SP</option>
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
<!--        <button id="btn_print" class="btn btn-success" style="position:absolute; left: 87%; top: 128px;">Reset</button>-->
        <button id="btn_print" v-on:click="print" class="btn btn-success" style="position:absolute; left: 87%; top: 128px;">Export PDF</button>
        <button  @click="ExportExcel('xls')" class="btn btn-success" style="position:absolute; left: 87%; top: 170px;">Export Excel</button>
        <div style=" width:113px; height:91px;position: absolute;top: 179px;background: #003749;"></div>
        <div class="container-2">
            <table class="" id="graphReport" style="width: 80%; margin: 0 auto; text-align: center;" ref="exportable_table">
                <tbody v-if="fields.pumpname == 'p102a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-102 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>

                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>

                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'p102b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-102 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'p103a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-103 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'p103b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-103 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'p202b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-202 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'p203a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-203 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'p203b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-203 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'p204a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-204 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'p204b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-204 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p401a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-401 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'p401b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-401 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'p402a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-402 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'p402b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-402 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'p402c'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-402 C</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'p403a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-403 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'p403b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-403 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'p404a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-404 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p404b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-404 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p405a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-405 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p405b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-405 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p406a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-406 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p406b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-406 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p407a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-407 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p501a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-501 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p501b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-501 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p502a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-502 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p502b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-502 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p503a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-503 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p503b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-503 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p504a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-504 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p504b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-504 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p505a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-505 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p505b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-505 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p601a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-601 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p601b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-601 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p602a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-602 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p602b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-602 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p603a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-603 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p602b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-602 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p702a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-702 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p702b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-702 B</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p705a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-705 A</span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

                <tbody v-if="fields.pumpname == 'p705b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-705 </span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'p810a'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-810 A </span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'p810b'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-810 B </span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'p810c'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">P-810 C </span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.pumpname == 'sp'">
                <tr>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">SP </span><br>
                        Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Pump Name</b></td>
                    <td><b>On Timing</b></td>
                    <td><b>Off Timing</b></td>
                    <td><b>Interval(Hour-Minutes-Seconds)</b></td>
                    <td><b>Operator</b></td>
                </tr>
                <tr v-for="(fields, index) in pumps" v-bind:key="fields.id">
                    <td>{{fields.pump_name}}</td>
                    <td>{{fields.on_timing}}</td>
                    <td>{{fields.off_timing}}</td>
                    <td>{{arrayInterval[index]}}</td>
                    <td>{{fields.operator}}</td>
                </tr>
                </tbody>

            </table >
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
            fields:{
                pumpname:'p102a',
                startdate:'',
                enddate:'',
            },
            pumps:[],
            arrayInterval:[]
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
            axios.post('api/pumponoffreport', this.fields , {headers: {'Authorization': 'Bearer '+this.currentUser.token}})
                .then((response) => {
                    this.pumps = response.data.pump_data;
                    console.log(this.pumps)

                    for(let i=0; i<this.pumps.length; i++){
                        var start = moment(this.pumps[i].on_timing);
                        var end = moment(this.pumps[i].off_timing);

                        var ms = moment(end,"DD/MM/YYYY HH:mm:ss").diff(moment(start,"DD/MM/YYYY HH:mm:ss"));
                        var d = moment.duration(ms);
                        let s ;
                         s = Math.floor(d.asHours()) + moment.utc(ms).format(":mm:ss");
                        this.arrayInterval.push(s);
                    }

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
.retainer-data tr th{
    padding: 15px;
    text-align: center;
}

</style>
