<template>
    <div className="col-md-12" style="padding: 0px;">

        <h1 style="text-align: center; padding-top: 30px;margin-bottom:15px !important;">Show Selection</h1>
        <fieldset class="col-md-4 m-auto text-center" style="background: darkslategrey; margin-bottom:30px !important;">
            <div class="some-class">
                    <input type="radio" class="radio" v-model="filter_range" value="n" id="y" style="width: 47px;height: 23px;vertical-align: sub;"/>
                    <label for="y" style="font-size:25px;">Non-Filter</label>
                    <input type="radio" class="radio" v-model="filter_range" value="y" id="z" style="width: 47px;height: 23px;vertical-align: sub;"/>
                    <label for="z" style="font-size:25px;">Filter</label>
            </div>
        </fieldset>
<div class="table-container col-md-10 m-auto">
        <form name="chartForm" @submit.prevent="submit">
            <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                <tr style="border: none">

                    <th colspan="3"> <h6>Pre Esterification</h6></th>
                </tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>level</th>
                    <th>Temp</th>
                    <th>Pr</th>
                </tr>
                <tr>
                    <td>Settling Tank A</td>
                    <td><input value="rdl_13" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rtd_9" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>.</td>
                <tr>
                    <td>Settling Tank B</td>
                    <td><input value="rdl_14" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rtd_10" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>Settling Tank C</td>
                    <td><input value="rdl_15" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rtd_11" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>E201</td>
                    <td><input value="rdl_1" type="hidden"></td>
                    <td><input value="rtd_4" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>E101</td>
                    <td><input value="rdl_1" type="hidden"></td>
                    <td><input value="rtd_1" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>D101A</td>
                    <td><input value="rdl_1" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rtd_2" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>D101B</td>
                    <td><input value="rdl_2" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rtd_3" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>PPRA</td>
                    <td><input value="rdl_23" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rtd_32" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>PPRB</td>
                    <td><input value="rdl_24" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rtd_33" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>GST</td>
                    <td><input value="rdl_18" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rtd_34" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>GLV</td>
                    <td><input value="rdl_12" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rtd_5" v-model="val_1" type="hidden"></td>
                     <td><input value="pt_1" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                </tr>
                <tr>
                    <td>GLV Evaporater</td>
                    <td><input value="rdl_1" type="hidden"></td>
                    <td><input value="rtd_8" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>GLV T</td>
                    <td><input value="rdl_1" type="hidden"></td>
                    <td><input value="rtd_5" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>GLV M</td>
                    <td><input value="rdl_1" type="hidden"></td>
                    <td><input value="rtd_6" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>GLV B</td>
                    <td><input value="rdl_1" type="hidden"></td>
                    <td><input value="rtd_7" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>D405A</td>
                    <td><input value="rdl_3" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rtd_1" type="hidden"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>D405B</td>
                    <td><input value="rdl_4" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rdl_1" type="hidden"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>D405C</td>
                    <td><input value="rdl_5" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rdl_1" type="hidden"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>H2SO4 Tank</td>
                    <td><input value="rdl_25" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rdl_1" type="hidden"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>SP1</td>
                    <td><input value="rdl_20" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>SP2</td>
                    <td><input value="rdl_21" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                    <td>.</td>
                </tr>
                 <tr><td>PIT</td>
                    <td><input value="pit_level" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>Flow</th>
                    <th>Total</th>
                    <th>Pr</th>
                </tr>
                <tr>
                    <td>FM 18 (Mathanol into GST 1 and 2)</td>
                    <td><input value="fm_18" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_18" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>FM 19 (Methanol into PPRA and B)</td>
                    <td><input value="fm_19" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_19" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>FM 20 (Mathanol into GLV)</td>
                    <td><input value="fm_20" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_20" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>FM 23 (Raw Material Offloading)</td>
                    <td><input value="fm_23" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_23" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>FM 24 (Raw Metarial to Settling Tank)</td>
                    <td><input value="fm_24" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>
                        <input value="ft_24"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                    </td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>
                        FM25 (Settling Tank to D101
                    </td>
                    <td>
                        <input value="fm_25"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                    </td>
                    <td>
                        <input value="ft_25"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                    </td>
                    <td>.</td>
                </tr>
                
            </table>
            <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                <tr style="border: none">

                    <th colspan="3"> <h6>Methanol</h6></th>
                </tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>level</th>
                    <th>Temp</th>
                    <th>Pr</th>
                </tr>
                <tr>
                    <td>E401</td>
                    <td>
                        <input value="dpl_2"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td> <input value="rtd_17"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>Green Vessel</td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                    <td> <input value="rtd_19"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>Old Green Vessel</td>
                    <td> <input value="rdl_1"
                                v-model="val_1" type="hidden"></td>
                    <td> <input value="rtd_20"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                                <td>.</td>
                </tr>
                <tr>
                    <td>Blue Vessel</td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                    <td><input value="rtd_18"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>E601</td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                    <td><input value="rtd_21"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>T601</td>
                    <td><input value="dpl_3"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                               <td><input value="pt_4"
                               v-model="val_1" type="checkbox"></td>
                </tr>
                <tr>
                    <td>T601 T</td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                    <td><input value="rtd_22"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>T601 M</td>
                    <td><input value="rdl_1"
                               type="hidden"></td>
                    <td><input value="rtd_23"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>T601 B</td>
                    <td><input value=""
                               type="hidden"></td>
                    <td><input value="rtd_24"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>Methanol Tank 1</td>
                    <td><input value="rdl_16"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>Methanol Tank 2</td>
                    <td><input value="rdl_19"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                               <td>.</td>
                </tr>
                <tr><td>GLV Condenser</td><td></td><td></td><td><input value="pt_2" v-model="val_1" type="checkbox"></td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>Flow</th>
                    <th>Total</th>
                    <th>Pr</th>
                </tr>
                <tr>
                    <td>FM 14 (D403 into T601)</td>
                    <td><input value="fm_14"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_14"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>FM 15 (T601 to D602)</td>
                    <td><input value="fm_15"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_15"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>FM 16 (T601 to Reflux)</td>
                    <td><input value="fm_16"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_16"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>FM 17 (T601 Drain)</td>
                    <td><input value="fm_17"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_17"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>FM 7 (D602to Methanol Storage Tank)</td>
                    <td><input value="fm_7"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_7"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
            </table>
            <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                <tr style="border: none">

                    <th colspan="3"> <h6>Trans Esterification</h6></th>
                </tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>level</th>
                    <th>Temp</th>
                    <th>Pr</th>
                </tr>
                <tr>
                    <td>D405 A</td>
                    <td>
                        <input value="rdl_3"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>  <input value="rdl_1"
                                 v-model="val_1" type="hidden"></td>
                                 <td>.</td>
                </tr>
                <tr>
                    <td>D405 B</td>
                    <td><input value="rdl_4"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>D405 C</td>
                    <td> <input value="rdl_5"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td> <input value="rdl_1"
                                v-model="val_1" type="hidden"></td>
                                <td>.</td>
                </tr>
                <tr>
                    <td>Trans Reactor</td>
                    <td><input value=""
                               type="hidden"></td>
                    <td> <input value="rtd_35"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="pt_3"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                </tr>
                <tr>
                    <td>C401 A</td>
                    <td><input value="rdl_6"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>C401 B</td>
                    <td><input value="rdl_7"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>E401</td>
                    <td><input value="dpl_2"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rtd_17"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>Hot Water Tank</td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                    <td><input value="rtd_12"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                                <td>.</td>
                </tr>
                <tr>
                    <td>D402 A</td>
                    <td><input value="rdl_8"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                    <td><input value="rtd_13"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>D402 B</td>
                    <td> <input value="rdl_9"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td> <input value="rtd_14"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                                <td>.</td>
                </tr>
                <tr>
                    <td>D402 C</td>
                    <td><input value="rdl_10"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rtd_15"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr><td>D402 D</td>
                    <td><input value="rdl_11"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>
                        <input value="rtd_16"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                    </td>
                    <td>.</td>
                    </tr>
                <tr><td>SP 1</td><td><input value="rdl_20"
                                            v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td><td> <input value="rdl_1"
                                                                                                                                         v-model="val_1" type="hidden"></td><td>.</td></tr>
                <tr><td>SP 2</td><td><input value="rdl_21"
                                            v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td><td><input value="rdl_1"
                                                                                                                                        v-model="val_1" type="hidden"></td><td>.</td></tr>
                <tr><td>SP 3</td><td><input value="rdl_22"
                                            v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td><td><input value="rdl_1"
                                                 v-model="val_1" type="hidden"></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>Flow</th>
                    <th>Total</th>
                    <th>Pr</th>
                </tr>
                <tr>
                    <td>FM 21 (Methanol into Trans)</td>
                    <td><input value="fm_21"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_21"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>FM 1(Trans Oil)</td>
                    <td><input value="fm_1"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_1"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>FM 2( Alkali Trans)</td>
                    <td><input value="fm_2"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_2"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>FM 3 (Trans Evaporator to NI)</td>
                    <td><input value="fm_3"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_3"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>FM 4 (Water N1)</td>
                    <td><input value="fm_4"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_4"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>FM 5 (N2 to D402)</td>
                    <td><input value="fm_5"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td> <input value="ft_5"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                                <td>.</td>
                </tr>
                <tr>
                    <td>FM 6 (N3 to Slag pool)</td>
                    <td><input value="fm_6"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_6"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
            </table>
            <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                <tr style="border: none">

                    <th colspan="3"> <h6>Distillation</h6></th>
                </tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>level</th>
                    <th>Temp</th>
                    <th>Pr</th>
                </tr>
                <tr>
                    <td>D402 A</td>
                    <td>
                        <input value="rdl_8"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td> <input value="rtd_13"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                                <td>.</td>
                </tr>
                <tr>
                    <td>D402 B</td>
                    <td>
                        <input value="rdl_9"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td> <input value="rtd_14"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                                <td>.</td>
                </tr>
                <tr>
                    <td>D402 C</td>
                    <td> <input value="rdl_10"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td> <input value="rtd_15"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                                <td>.</td>
                </tr>
                <tr>
                    <td>D402 D</td>
                    <td><input value="rdl_11"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td> <input value="rtd_16"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                                <td>.</td>
                </tr>
                <tr>
                    <td>E501</td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                    <td><input value="rtd_25"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>D501</td>
                    <td><input value="dpl_1"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rtd_26"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>T501</td>
                    <td><input value="dpl_6"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value=""
                               v-model="val_1" type="hidden"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>D503</td>
                    <td><input value="dpl_4"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value=""
                               v-model="val_1" type="hidden"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>T501 T</td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                    <td><input value="rtd_27"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>T501 M</td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                    <td><input value="rtd_28"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>T501 B</td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                    <td><input value="rtd_29"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr><td>T502 B</td><td><input value="dpl_7"
                                              v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td><td><input value=""
                                                                                                                                          v-model="val_1" type="hidden"></td>
                                                                                                                                          <td>.</td></tr>
                <tr><td>D504</td><td><input value="dpl_5"
                                            v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td><td><input value="rdl_1"
                                                                                                                                        v-model="val_1" type="hidden"></td>
                                                                                                                                        <td>.</td></tr>
                <tr><td>T504 M</td><td><input value="rdl_1"
                                              v-model="val_1" type="hidden"></td><td><input value="rtd_30"
                                                                                            v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                                                                                            <td>.</td></tr>
                <tr><td>T502 B</td><td><input value="rdl_1"
                                              v-model="val_1" type="hidden"></td><td><input value="rtd_31"
                                                                                            v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                                                                                            <td>.</td></tr>
                <tr><td>Bio Transfer Line</td><td><input value="rdl_1"
                                                         v-model="val_1" type="hidden"></td><td> <input value="rdl_1"
                                                                                                        v-model="val_1" type="hidden"></td><td>.</td></tr>
                <tr><td> Bio Storage Tank</td><td> <input value="dpl_8"
                                                          v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td><td> <input value="rtd_36"
                                                                                                                                                       v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td><td>.</td></tr>
                <tr><td>Tar Tank</td><td> <input value="rdl_1"
                                                 v-model="val_1" type="hidden"></td><td> <input value="rdl_1"
                                                          v-model="val_1" type="hidden"></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>

                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>Flow</th>
                    <th>Ft</th>
                    <th>Pr</th>
                </tr>
                <tr>
                    <td>FM 8 (D402-D501)</td>
                    <td><input value="fm_8"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_8"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>FM 9 (D501-T501)</td>
                    <td><input value="fm_9"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_9"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>FM 10 (T501-T502)</td>
                    <td><input value="fm_10"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_10"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>FM 12 (Recycle to D405 Line)</td>
                    <td><input value="fm_12"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_12"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>FM 11 (Tar Transfer)</td>
                    <td><input value="fm_11"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_11"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>FM 13 (Biodiesel to Storage)</td>
                    <td><input value="fm_13"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_13"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>FM 22 (Biodiesel Storage to Truck)</td>
                    <td><input value="fm_22"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_22"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
            </table>
            <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                <tr style="border: none">

                    <th colspan="3"> <h6>Utilities</h6></th>
                </tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>level</th>
                    <th>Temp</th>
                    <th>Pr</th>
                </tr>
                <tr>
                    <td>Distillation Header</td>
                    <td></td>
                    <td> </td>
                    <td> <input value="pt_5"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                    <td> </td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Main Steam</th>
                    <th>All</th>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>Main Steam</td>
                    <td> <input value="st_fm2_flow"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>Steam To E401</td>
                    <td> <input value="st_fm1_flow"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>

                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>Flow</th>
                    <th>Total</th>
                    <th>Pr</th>
                </tr>
                <tr>
                    <td>FM 26 (CT Outlet)</td>
                    <td><input value="fm_26"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_26"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>FM 27 (CT Inlet)</td>
                    <td><input value="fm_27"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="ft_27"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                               
                </tr>

            </table>
            <div class="col-md-8 m-auto" style="margin-right:117px !important">
                <div class="form-row" style="color:white;">
                    <div class="form-group col-md-3" >
                        <label>Set Intervals</label>
                        <select v-model="setInterval" class="form-control" id="interval" :disabled="disable">
                            <option value="1">1 Minute</option>
                            <option value="2">2 Minute</option>
                            <option value="5">5 Minute</option>
                            <option value="10">10 Minute</option>
                            <option value="30">30 Minute</option>
                            <option value="60">1 Hour</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3" >
                        <label>Select Timing</label>
                        <select v-model="timing" class="form-control" :disabled="disable">
                            <option value="1">Last 24 Hours</option>
                            <option value="2">Today</option>
                            <option value="3">01 Week</option>
                            <option value="4">01 Month</option>
                            <option value="5">Manual Select Time</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3" style="margin-top: 31px;">
                        <input type="submit" value="Show Selection" class="btn btn-success float-left" :disabled="disable">
                        <button @click="reloadPage" class="btn btn-primary float-left ml-1">Reset Page</button>
                    </div>

                    <span v-if="timing == '5'">
                            <div class="form-group col-md-3" >
                                <label>Select Timing</label>
                                <input type="datetime-local" class="form-control" v-model="startdate" style="width: auto;" id="js_fromdate">
                            </div>

                            <div class="form-group col-md-3" >
                                <label>Select Timing</label>
                                <input type="datetime-local" class="form-control" v-model="enddate" style="width: auto;" id="js_fromdate">
                            </div>
                    </span>
                </div>
            </div>

        </form>
</div>
        <div class="form-row" style="margin-right: 0px">
            <div class="form-group col-md-4 m-auto privous-selection">
                <label>Previous Selected Record</label>
                <select v-model="select_db_record" class="form-control" v-on:click="abidfunction">
                    <option v-for="select in select_record" :value="select.sr_id">{{ select.name }}</option>
                </select>
            </div>
        </div>
        <!--        <button @click="ExportExcel('xls')" >Export Excel</button>-->
        <input type="button" class="btn btn-success print-btn" @click="tableToExcel" value="Export to Excel" style="position:absolute; left: 84%; top: 37px;">
        <div class="container-2">
            <table class="table custom-table" id="testTable" style="font-size:15px;width: auto; margin: 0 auto; margin-bottom: 40px; text-align: center; "
                   ref="exportable_table">

                <tbody>
                <tr>
                    <td style="width: 119px; height: 100px;border:none;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <td v-if="val_1.length == 1" style="width:370px;vertical-align: bottom;border:none;"><h2>
                        Interval <span style="color:#ba4848" v-if="setInterval == 1">1 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 2">2 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 5">5 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 10">10 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 30">30 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 60">1 Hour</span>
                        And Time <span style="color:#ba4848" v-if="timing == 1">Last 24 Hours</span>
                        <span style="color:#ba4848" v-if="timing == 2">Today</span>
                        <span style="color:#ba4848" v-if="timing == 3">01 Week</span>
                        <span style="color:#ba4848" v-if="timing == 4">01 Month</span>
                        <span v-if="timing == 5">
                            <span style="color:#ba4848">{{ startdate | formatDate }}</span>
                            To <span style="color:#ba4848">{{ enddate | formatDate }}</span>
                        </span>
                    </h2>
                    </td>
                    <td v-else :colspan="val_1.length" style="vertical-align: bottom;border:none;"><h2>
                        Interval <span style="color:#ba4848" v-if="setInterval == 1">1 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 2">2 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 5">5 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 10">10 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 30">30 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 60">1 Hour</span>
                        And Time <span style="color:#ba4848" v-if="timing == 1">Last 24 Hours</span>
                        <span style="color:#ba4848" v-if="timing == 2">Today</span>
                        <span style="color:#ba4848" v-if="timing == 3">01 Week</span>
                        <span style="color:#ba4848" v-if="timing == 4">01 Month</span>
                        <span v-if="timing == 5">
                            <span style="color:#ba4848">{{ startdate | formatDate }}</span>
                            To <span style="color:#ba4848">{{ enddate | formatDate }}</span>
                        </span>
                    </h2>
                    </td>
                </tr>
                <tr>
                    <th style="border:1px solid black;" v-if="val_1.length>0">Date And Time</th>

                    <th style="border:1px solid black;" v-if="val_1[0] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'st_fm2_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'st_fm2_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'st_fm2_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'st_fm1_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'st_fm1_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'st_fm1_flow'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_16'" >Methanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_16'" >Methanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_19'" >Methanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_19'" >Methanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_25'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_25'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_7'" >D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_18'" >METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_19'" >METHANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_20'" >METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_21'" >METHANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_7'" >FT D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_18'" >FT METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_20'" >FT METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_21'" >FT METHANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'pt_5'" >PT 5</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vg_1'" >VG 1</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vg_3'" >VG 3</th>
                    <!--///////////////////////////////////////-->
                    <th style="border:1px solid black;" v-if="val_1[1] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'st_fm2_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'st_fm2_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'st_fm2_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'st_fm1_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'st_fm1_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'st_fm1_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_16'" >Methanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_16'" >Methanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_19'" >Methanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_19'" >Methanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_25'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_25'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_7'" >D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_18'" >METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_19'" >METHANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_20'" >METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_21'" >METHANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_7'" >FT D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_18'" >FT METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_20'" >FT METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_21'" >FT METHANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'pt_5'" >PT 5</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vg_1'" >VG 1</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'st_fm2_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'st_fm2_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'st_fm2_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'st_fm1_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'st_fm1_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'st_fm1_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_16'" >Methanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_16'" >Methanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_19'" >Methanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_19'" >Methanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_25'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_25'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_7'" >D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_18'" >METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_19'" >METHANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_20'" >METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_21'" >METHANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_7'" >FT D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_18'" >FT METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_20'" >FT METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_21'" >FT METHANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'pt_5'" >PT 5</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vg_1'" >VG 1</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'st_fm2_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'st_fm2_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'st_fm2_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'st_fm1_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'st_fm1_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'st_fm1_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_16'" >Methanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_16'" >Methanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_19'" >Methanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_19'" >Methanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_25'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_25'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_7'" >D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_18'" >METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_19'" >METHANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_20'" >METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_21'" >METHANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_7'" >FT D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_18'" >FT METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_20'" >FT METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_21'" >FT METHANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'pt_5'" >PT 5</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vg_1'" >VG 1</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'st_fm2_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'st_fm2_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'st_fm2_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'st_fm1_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'st_fm1_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'st_fm1_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_16'" >Methanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_16'" >Methanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_19'" >Methanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_19'" >Methanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_25'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_25'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_7'" >D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_18'" >METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_19'" >METHANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_20'" >METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_21'" >METHANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_7'" >FT D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_18'" >FT METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_20'" >FT METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_21'" >FT METHANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'pt_5'" >PT 5</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vg_1'" >VG 1</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'st_fm2_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'st_fm2_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'st_fm2_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'st_fm1_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'st_fm1_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'st_fm1_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_16'" >Methanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_16'" >Methanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_19'" >Methanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_19'" >Methanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_25'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_25'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_7'" >D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_18'" >METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_19'" >METHANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_20'" >METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_21'" >METHANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_7'" >FT D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_18'" >FT METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_20'" >FT METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_21'" >FT METHANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'pt_5'" >PT 5</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vg_1'" >VG 1</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'st_fm2_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'st_fm2_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'st_fm2_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'st_fm1_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'st_fm1_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'st_fm1_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_16'" >Methanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_16'" >Methanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_19'" >Methanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_19'" >Methanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_25'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_25'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_7'" >D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_18'" >METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_19'" >METHANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_20'" >METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_21'" >METHANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_7'" >FT D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_18'" >FT METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_20'" >FT METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_21'" >FT METHANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'pt_5'" >PT 5</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vg_1'" >VG 1</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'st_fm2_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'st_fm2_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'st_fm2_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'st_fm1_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'st_fm1_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'st_fm1_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_16'" >Methanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_16'" >Methanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_19'" >Methanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_19'" >Methanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_25'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_25'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_7'" >D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_18'" >METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_19'" >METHANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_20'" >METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_21'" >METHANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_7'" >FT D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_18'" >FT METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_20'" >FT METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_21'" >FT METHANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'pt_5'" >PT 5</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vg_1'" >VG 1</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'st_fm2_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'st_fm2_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'st_fm2_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'st_fm1_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'st_fm1_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'st_fm1_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_16'" >Methanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_16'" >Methanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_19'" >Methanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_19'" >Methanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_25'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_25'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_7'" >D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_18'" >METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_19'" >METHANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_20'" >METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_21'" >METHANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_7'" >FT D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_18'" >FT METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_20'" >FT METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_21'" >FT METHANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'pt_5'" >PT 5</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vg_1'" >VG 1</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'st_fm2_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'st_fm2_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'st_fm2_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'st_fm1_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'st_fm1_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'st_fm1_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_16'" >Methanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_16'" >Methanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_19'" >Methanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_19'" >Methanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_25'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_25'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_7'" >D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_18'" >METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_19'" >METHANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_20'" >METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_21'" >METHANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_7'" >FT D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_18'" >FT METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_20'" >FT METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_21'" >FT METHANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'pt_5'" >PT 5</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vg_1'" >VG 1</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'st_fm2_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'st_fm2_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'st_fm2_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'st_fm1_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'st_fm1_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'st_fm1_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_16'" >Methanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_16'" >Methanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_19'" >Methanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_19'" >Methanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_25'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_25'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_7'" >D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_18'" >METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_19'" >METHANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_20'" >METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_21'" >METHANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_7'" >FT D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_18'" >FT METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_20'" >FT METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_21'" >FT METHANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'pt_5'" >PT 5</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vg_1'" >VG 1</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'st_fm2_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'st_fm2_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'st_fm2_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'st_fm1_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'st_fm1_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'st_fm1_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_16'" >Methanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_16'" >Methanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_19'" >Methanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_19'" >Methanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_25'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_25'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_7'" >D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_18'" >METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_19'" >METHANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_20'" >METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_21'" >METHANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_7'" >FT D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_18'" >FT METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_20'" >FT METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_21'" >FT METHANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'pt_5'" >PT 5</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vg_1'" >VG 1</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'st_fm2_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'st_fm2_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'st_fm2_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'st_fm1_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'st_fm1_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'st_fm1_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_16'" >Methanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_16'" >Methanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_19'" >Methanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_19'" >Methanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_25'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_25'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_7'" >D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_18'" >METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_19'" >METHANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_20'" >METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_21'" >METHANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_7'" >FT D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_18'" >FT METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_20'" >FT METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_21'" >FT METHANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'pt_5'" >PT 5</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vg_1'" >VG 1</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'st_fm2_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'st_fm2_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'st_fm2_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'st_fm1_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'st_fm1_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'st_fm1_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_16'" >Methanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_16'" >Methanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_19'" >Methanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_19'" >Methanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_25'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_25'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_7'" >D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_18'" >METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_19'" >METHANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_20'" >METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_21'" >METHANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_7'" >FT D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_18'" >FT METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_20'" >FT METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_21'" >FT METHANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'pt_5'" >PT 5</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vg_1'" >VG 1</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'st_fm2_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'st_fm2_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'st_fm2_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'st_fm1_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'st_fm1_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'st_fm1_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_16'" >Methanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_16'" >Methanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_19'" >Methanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_19'" >Methanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_25'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_25'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_7'" >D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_18'" >METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_19'" >METHANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_20'" >METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_21'" >METHANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_7'" >FT D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_18'" >FT METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_20'" >FT METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_21'" >FT METHANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'pt_5'" >PT 5</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vg_1'" >VG 1</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'st_fm2_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'st_fm2_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'st_fm2_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'st_fm1_flow'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'st_fm1_flow'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'st_fm1_flow'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_16'" >Methanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_16'" >Methanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_19'" >Methanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_19'" >Methanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_25'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_25'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_7'" >D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_18'" >METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_19'" >METHANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_20'" >METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_21'" >METHANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_7'" >FT D602 TO METHANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_18'" >FT METHANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_20'" >FT METHANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_21'" >FT METHANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'pt_5'" >PT 5</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vg_1'" >VG 1</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vg_3'" >VG 3</th>


                </tr>
                <tr v-for="(field, index ) in db_val_1">

                    <td style="border:1px solid black;" >{{field.timing | formatDate1 }}</td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'st_fm1_flow'" >
                        {{ field.st_fm1_flow }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'st_fm1_flow'" >
                        {{ field.stfm1_flow_tot }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'st_fm1_flow'" >
                        {{ field.stfm1_temp }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'st_fm1_flow'" >
                        {{ field.stfm1_pressure }}
                    </td>


                    <td style="border:1px solid black;" v-if="val_1[0] == 'st_fm2_flow'" >
                        {{ field.st_fm2_flow }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'st_fm2_flow'" >
                        {{ field.stfm2_flow_tot }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'st_fm2_flow'" >
                        {{ field.stfm2_temp }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'st_fm2_flow'" >
                        {{ field.stfm2_pressure }}
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_1'" >
                        {{ field.rdl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_1'" >
                        <span v-if="field.rdl_1 ==0.00">0.00</span>
                        <span v-else>{{  parseFloat(((field.rdl_1/1)* 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_2'" >
                        {{ field.rdl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_2'" >
                        <span v-if="field.rdl_2 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_2 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_3'" >
                        {{ field.rdl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_3'" >
                        <span v-if="field.rdl_3 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_3 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_4'" >
                        {{ field.rdl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_4'" >
                        <span v-if="field.rdl_4 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_4 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_5'" >
                        {{ field.rdl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_5'" >
                        <span v-if="field.rdl_5 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_5 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_6'" >
                        {{ field.rdl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_6'" >
                        <span v-if="field.rdl_6 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_6 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_7'" >
                        {{ field.rdl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_7'" >
                        <span v-if="field.rdl_7 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_7 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_8'" >
                        {{ field.rdl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_8'" >
                        <span v-if="field.rdl_8 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_8 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_9'" >
                        {{ field.rdl_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_9'" >
                        <span v-if="field.rdl_9 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_9 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_10'" >
                        {{ field.rdl_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_10'" >
                        <span v-if="field.rdl_10 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_10 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_11'" >
                        {{ field.rdl_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_11'" >
                        <span v-if="field.rdl_11 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_11 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_12'" >
                        {{ field.rdl_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_12'" >
                        <span v-if="field.rdl_12 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_12 / 1) * 0.061) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_13'" >
                        {{ field.rdl_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_13'" >
                        <span v-if="field.rdl_13 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_13 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_14'" >
                        {{ field.rdl_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_14'" >
                        <span v-if="field.rdl_14 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_14 / 1) * 0.179) + 2.6).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_15'" >
                        {{ field.rdl_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_15'" >
                        <span v-if="field.rdl_15 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_15 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_16'" >
                        {{ field.rdl_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_16'" >
                        <span v-if="field.rdl_16 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_16 / 1) * 0.621) + 0).toFixed(2) }}</span>


                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_17'" >
                        {{ field.rdl_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_17'" >
                        <span v-if="field.rdl_17 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_17 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_18'" >
                        {{ field.rdl_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_18'" >
                        <span v-if="field.rdl_18 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_18 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_19'" >
                        {{ field.rdl_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_19'" >
                        <span v-if="field.rdl_19 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_19 / 1) * 0.319) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_20'" >
                        {{ field.rdl_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_20'" >
                        <span v-if="field.rdl_20 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_20 / 1) * 0.126) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_21'" >
                        {{ field.rdl_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_21'" >
                        <span v-if="field.rdl_21 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_21 / 1) * 0.286) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_22'" >
                        {{ field.rdl_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_22'" >
                        <span v-if="field.rdl_22 ==0.00">0.00</span>
                        <span v-else-if="field.rdl_22 <= 44">{{ parseFloat(((field.rdl_22 / 1) * 0.51) + 9.2).toFixed(2) }}</span>
                        <span v-else>{{ parseFloat(((field.rdl_22 / 1) * 0.74) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_23'" >
                        {{ field.rdl_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_23'" >
                        <span v-if="field.rdl_23 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_23 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_24'" >
                        {{ field.rdl_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_24'" >
                        <span v-if="field.rdl_24 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_24 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_25'" >
                        {{ field.rdl_25 }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_25'" >
                        {{ field.rdl25_volume }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl_25'" >
                        {{ field.rdl25_mass }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_1'" >
                        {{ field.rtd_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_2'" >
                        {{ field.rtd_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_3'" >
                        {{ field.rtd_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_4'" >
                        {{ field.rtd_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_5'" >
                        {{ field.rtd_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_6'" >
                        {{ field.rtd_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_7'" >
                        {{ field.rtd_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_8'" >
                        {{ field.rtd_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_9'" >
                        {{ field.rtd_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_10'" >
                        {{ field.rtd_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_11'" >
                        {{ field.rtd_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_12'" >
                        {{ field.rtd_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_13'" >
                        {{ field.rtd_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_14'" >
                        {{ field.rtd_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_15'" >
                        {{ field.rtd_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_16'" >
                        {{ field.rtd_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_17'" >
                        {{ field.rtd_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_18'" >
                        {{ field.rtd_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_19'" >
                        {{ field.rtd_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_20'" >
                        {{ field.rtd_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_21'" >
                        {{ field.rtd_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_22'" >
                        {{ field.rtd_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_23'" >
                        {{ field.rtd_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_24'" >
                        {{ field.rtd_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_25'" >
                        {{ field.rtd_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_26'" >
                        {{ field.rtd_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_27'" >
                        {{ field.rtd_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_28'" >
                        {{ field.rtd_28 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_29'" >
                        {{ field.rtd_29 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_30'" >
                        {{ field.rtd_30 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_31'" >
                        {{ field.rtd_31 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_32'" >
                        {{ field.rtd_32 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_33'" >
                        {{ field.rtd_33 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_34'" >
                        {{ field.rtd_34 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_35'" >
                        {{ field.rtd_35 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_36'" >
                        {{ field.rtd_36 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rtd_37'" >
                        {{ field.rtd_37 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl_1'" >
                        {{ field.dpl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl_1'" >
                        {{  parseFloat(((field.dpl_1 /1)*0.0230)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl_2'" >
                        {{ field.dpl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl_2'" >
                        {{  parseFloat(((field.dpl_2 /1)*0.0206)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl_3'" >
                        {{ field.dpl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl_3'" >
                        {{  parseFloat(((field.dpl_3 /1)*0.0143)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl_4'" >
                        {{ field.dpl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl_4'" >
                        {{  parseFloat(((field.dpl_4 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl_5'" >
                        {{ field.dpl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl_5'" >
                        {{  parseFloat(((field.dpl_5 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl_6'" >
                        {{ field.dpl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl_6'" >
                        {{  parseFloat(((field.dpl_6 /1)*0.0287)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl_7'" >
                        {{ field.dpl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl_7'" >
                        {{  parseFloat(((field.dpl_7 /1)*0.0128)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl_8'" >
                        {{ field.dpl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl_8'" >
                        {{  parseFloat(((field.dpl_8 /1)*1.158)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_1'" >
                        {{ field.fm_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_2'" >
                        {{ field.fm_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_3'" >
                        {{ field.fm_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_4'" >
                        {{ field.fm_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_5'" >
                        {{ field.fm_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_6'" >
                        {{ field.fm_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_7'" >
                        {{ field.fm_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_8'" >
                        {{ field.fm_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_9'" >
                        {{ field.fm_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_10'" >
                        {{ field.fm_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_11'" >
                        {{ field.fm_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_12'" >
                        {{ field.fm_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_13'" >
                        {{ field.fm_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_14'" >
                        {{ field.fm_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_15'" >
                        {{ field.fm_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_16'" >
                        {{ field.fm_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_17'" >
                        {{ field.fm_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_18'" >
                        {{ field.fm_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_19'" >
                        {{ field.fm_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_20'" >
                        {{ field.fm_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_21'" >
                        {{ field.fm_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_22'" >
                        {{ field.fm_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_23'" >
                        {{ field.fm_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_24'" >
                        {{ field.fm_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_25'" >
                        {{ field.fm_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_26'" >
                        {{ field.fm_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'fm_27'" >
                        {{ field.fm_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_1'" >
                        {{ field.ft_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_2'" >
                        {{ field.ft_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_3'" >
                        {{ field.ft_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_4'" >
                        {{ field.ft_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_5'" >
                        {{ field.ft_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_6'" >
                        {{ field.ft_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_7'" >
                        {{ field.ft_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_8'" >
                        {{ field.ft_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_9'" >
                        {{ field.ft_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_10'" >
                        {{ field.ft_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_11'" >
                        {{ field.ft_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_12'" >
                        {{ field.ft_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_13'" >
                        {{ field.ft_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_14'" >
                        {{ field.ft_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_15'" >
                        {{ field.ft_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_16'" >
                        {{ field.ft_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_17'" >
                        {{ field.ft_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_18'" >
                        {{ field.ft_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_19'" >
                        {{ field.ft_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_20'" >
                        {{ field.ft_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_21'" >
                        {{ field.ft_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_22'" >
                        {{ field.ft_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_23'" >
                        {{ field.ft_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_24'" >
                        {{ field.ft_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_25'" >
                        {{ field.ft_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_26'" >
                        {{ field.ft_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'ft_27'" >
                        {{ field.ft_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'pt_1'" >
                        {{ field.pt_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'pt_2'" >
                        {{ field.pt_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'pt_3'" >
                        {{ field.pt_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'pt_4'" >
                        {{ field.pt_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'pt_5'" >
                        {{ field.pt_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'vg_1'" >
                        {{ field.vg_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'vg_2'" >
                        {{ field.vg_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'vg_3'" >
                        {{ field.vg_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'st_fm1_flow'" >

                        {{ field.st_fm1_flow }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'st_fm1_flow'" >

                        {{ field.stfm1_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'st_fm1_flow'" >

                        {{ field.stfm1_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'st_fm1_flow'" >

                        {{ field.stfm1_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[1] == 'st_fm2_flow'" >

                        {{ field.st_fm2_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'st_fm2_flow'" >

                        {{ field.stfm2_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'st_fm2_flow'" >

                        {{ field.stfm2_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'st_fm2_flow'" >

                        {{ field.stfm2_pressure }}

                    </td>
                    <!--                    ////////////////////////-->

                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_1'" >
                        {{ field.rdl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_1'" >
                        <span v-if="field.rdl_1 ==0.00">0.00</span>
                        <span v-else>{{  parseFloat(((field.rdl_1/1)* 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_2'" >
                        {{ field.rdl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_2'" >
                        <span v-if="field.rdl_2 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_2 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_3'" >
                        {{ field.rdl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_3'" >
                        <span v-if="field.rdl_3 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_3 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_4'" >
                        {{ field.rdl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_4'" >
                        <span v-if="field.rdl_4 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_4 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_5'" >
                        {{ field.rdl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_5'" >
                        <span v-if="field.rdl_5 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_5 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_6'" >
                        {{ field.rdl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_6'" >
                        <span v-if="field.rdl_6 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_6 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_7'" >
                        {{ field.rdl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_7'" >
                        <span v-if="field.rdl_7 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_7 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_8'" >
                        {{ field.rdl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_8'" >
                        <span v-if="field.rdl_8 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_8 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_9'" >
                        {{ field.rdl_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_9'" >
                        <span v-if="field.rdl_9 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_9 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_10'" >
                        {{ field.rdl_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_10'" >
                        <span v-if="field.rdl_10 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_10 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_11'" >
                        {{ field.rdl_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_11'" >
                        <span v-if="field.rdl_11 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_11 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_12'" >
                        {{ field.rdl_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_12'" >
                        <span v-if="field.rdl_12 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_12 / 1) * 0.061) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_13'" >
                        {{ field.rdl_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_13'" >
                        <span v-if="field.rdl_13 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_13 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_14'" >
                        {{ field.rdl_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_14'" >
                        <span v-if="field.rdl_14 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_14 / 1) * 0.179) + 2.6).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_15'" >
                        {{ field.rdl_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_15'" >
                        <span v-if="field.rdl_15 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_15 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_16'" >
                        {{ field.rdl_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_16'" >
                        <span v-if="field.rdl_16 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_16 / 1) * 0.621) + 0).toFixed(2) }}</span>


                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_17'" >
                        {{ field.rdl_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_17'" >
                        <span v-if="field.rdl_17 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_17 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_18'" >
                        {{ field.rdl_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_18'" >
                        <span v-if="field.rdl_18 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_18 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_19'" >
                        {{ field.rdl_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_19'" >
                        <span v-if="field.rdl_19 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_19 / 1) * 0.319) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_20'" >
                        {{ field.rdl_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_20'" >
                        <span v-if="field.rdl_20 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_20 / 1) * 0.126) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_21'" >
                        {{ field.rdl_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_21'" >
                        <span v-if="field.rdl_21 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_21 / 1) * 0.286) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_22'" >
                        {{ field.rdl_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_22'" >
                        <span v-if="field.rdl_22 ==0.00">0.00</span>
                        <span v-else-if="field.rdl_22 <= 44">{{ parseFloat(((field.rdl_22 / 1) * 0.51) + 9.2).toFixed(2) }}</span>
                        <span v-else>{{ parseFloat(((field.rdl_22 / 1) * 0.74) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_23'" >
                        {{ field.rdl_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_23'" >
                        <span v-if="field.rdl_23 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_23 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_24'" >
                        {{ field.rdl_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_24'" >
                        <span v-if="field.rdl_24 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_24 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_25'" >
                        {{ field.rdl_25 }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_25'" >
                        {{ field.rdl25_volume }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl_25'" >
                        {{ field.rdl25_mass }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_1'" >
                        {{ field.rtd_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_2'" >
                        {{ field.rtd_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_3'" >
                        {{ field.rtd_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_4'" >
                        {{ field.rtd_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_5'" >
                        {{ field.rtd_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_6'" >
                        {{ field.rtd_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_7'" >
                        {{ field.rtd_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_8'" >
                        {{ field.rtd_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_9'" >
                        {{ field.rtd_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_10'" >
                        {{ field.rtd_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_11'" >
                        {{ field.rtd_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_12'" >
                        {{ field.rtd_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_13'" >
                        {{ field.rtd_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_14'" >
                        {{ field.rtd_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_15'" >
                        {{ field.rtd_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_16'" >
                        {{ field.rtd_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_17'" >
                        {{ field.rtd_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_18'" >
                        {{ field.rtd_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_19'" >
                        {{ field.rtd_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_20'" >
                        {{ field.rtd_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_21'" >
                        {{ field.rtd_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_22'" >
                        {{ field.rtd_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_23'" >
                        {{ field.rtd_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_24'" >
                        {{ field.rtd_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_25'" >
                        {{ field.rtd_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_26'" >
                        {{ field.rtd_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_27'" >
                        {{ field.rtd_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_28'" >
                        {{ field.rtd_28 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_29'" >
                        {{ field.rtd_29 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_30'" >
                        {{ field.rtd_30 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_31'" >
                        {{ field.rtd_31 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_32'" >
                        {{ field.rtd_32 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_33'" >
                        {{ field.rtd_33 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_34'" >
                        {{ field.rtd_34 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_35'" >
                        {{ field.rtd_35 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_36'" >
                        {{ field.rtd_36 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rtd_37'" >
                        {{ field.rtd_37 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl_1'" >
                        {{ field.dpl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl_1'" >
                        {{  parseFloat(((field.dpl_1 /1)*0.0230)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl_2'" >
                        {{ field.dpl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl_2'" >
                        {{  parseFloat(((field.dpl_2 /1)*0.0206)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl_3'" >
                        {{ field.dpl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl_3'" >
                        {{  parseFloat(((field.dpl_3 /1)*0.0143)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl_4'" >
                        {{ field.dpl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl_4'" >
                        {{  parseFloat(((field.dpl_4 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl_5'" >
                        {{ field.dpl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl_5'" >
                        {{  parseFloat(((field.dpl_5 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl_6'" >
                        {{ field.dpl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl_6'" >
                        {{  parseFloat(((field.dpl_6 /1)*0.0287)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl_7'" >
                        {{ field.dpl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl_7'" >
                        {{  parseFloat(((field.dpl_7 /1)*0.0128)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl_8'" >
                        {{ field.dpl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl_8'" >
                        {{  parseFloat(((field.dpl_8 /1)*1.158)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_1'" >
                        {{ field.fm_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_2'" >
                        {{ field.fm_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_3'" >
                        {{ field.fm_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_4'" >
                        {{ field.fm_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_5'" >
                        {{ field.fm_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_6'" >
                        {{ field.fm_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_7'" >
                        {{ field.fm_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_8'" >
                        {{ field.fm_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_9'" >
                        {{ field.fm_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_10'" >
                        {{ field.fm_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_11'" >
                        {{ field.fm_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_12'" >
                        {{ field.fm_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_13'" >
                        {{ field.fm_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_14'" >
                        {{ field.fm_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_15'" >
                        {{ field.fm_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_16'" >
                        {{ field.fm_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_17'" >
                        {{ field.fm_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_18'" >
                        {{ field.fm_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_19'" >
                        {{ field.fm_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_20'" >
                        {{ field.fm_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_21'" >
                        {{ field.fm_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_22'" >
                        {{ field.fm_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_23'" >
                        {{ field.fm_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_24'" >
                        {{ field.fm_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_25'" >
                        {{ field.fm_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_26'" >
                        {{ field.fm_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'fm_27'" >
                        {{ field.fm_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_1'" >
                        {{ field.ft_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_2'" >
                        {{ field.ft_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_3'" >
                        {{ field.ft_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_4'" >
                        {{ field.ft_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_5'" >
                        {{ field.ft_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_6'" >
                        {{ field.ft_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_7'" >
                        {{ field.ft_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_8'" >
                        {{ field.ft_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_9'" >
                        {{ field.ft_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_10'" >
                        {{ field.ft_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_11'" >
                        {{ field.ft_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_12'" >
                        {{ field.ft_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_13'" >
                        {{ field.ft_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_14'" >
                        {{ field.ft_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_15'" >
                        {{ field.ft_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_16'" >
                        {{ field.ft_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_17'" >
                        {{ field.ft_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_18'" >
                        {{ field.ft_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_19'" >
                        {{ field.ft_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_20'" >
                        {{ field.ft_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_21'" >
                        {{ field.ft_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_22'" >
                        {{ field.ft_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_23'" >
                        {{ field.ft_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_24'" >
                        {{ field.ft_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_25'" >
                        {{ field.ft_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_26'" >
                        {{ field.ft_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'ft_27'" >
                        {{ field.ft_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'pt_1'" >
                        {{ field.pt_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'pt_2'" >
                        {{ field.pt_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'pt_3'" >
                        {{ field.pt_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'pt_4'" >
                        {{ field.pt_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'pt_5'" >
                        {{ field.pt_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'vg_1'" >
                        {{ field.vg_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'vg_2'" >
                        {{ field.vg_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'vg_3'" >
                        {{ field.vg_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'st_fm1_flow'" >

                        {{ field.st_fm1_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'st_fm1_flow'" >

                        {{ field.stfm1_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'st_fm1_flow'" >

                        {{ field.stfm1_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'st_fm1_flow'" >

                        {{ field.stfm1_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[2] == 'st_fm2_flow'" >

                        {{ field.st_fm2_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'st_fm2_flow'" >

                        {{ field.stfm2_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'st_fm2_flow'" >

                        {{ field.stfm2_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'st_fm2_flow'" >

                        {{ field.stfm2_pressure }}

                    </td>
                    <!--                    ////////////////////////-->

                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_1'" >
                        {{ field.rdl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_1'" >
                        <span v-if="field.rdl_1 ==0.00">0.00</span>
                        <span v-else>{{  parseFloat(((field.rdl_1/1)* 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_2'" >
                        {{ field.rdl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_2'" >
                        <span v-if="field.rdl_2 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_2 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_3'" >
                        {{ field.rdl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_3'" >
                        <span v-if="field.rdl_3 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_3 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_4'" >
                        {{ field.rdl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_4'" >
                        <span v-if="field.rdl_4 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_4 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_5'" >
                        {{ field.rdl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_5'" >
                        <span v-if="field.rdl_5 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_5 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_6'" >
                        {{ field.rdl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_6'" >
                        <span v-if="field.rdl_6 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_6 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_7'" >
                        {{ field.rdl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_7'" >
                        <span v-if="field.rdl_7 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_7 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_8'" >
                        {{ field.rdl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_8'" >
                        <span v-if="field.rdl_8 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_8 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_9'" >
                        {{ field.rdl_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_9'" >
                        <span v-if="field.rdl_9 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_9 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_10'" >
                        {{ field.rdl_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_10'" >
                        <span v-if="field.rdl_10 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_10 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_11'" >
                        {{ field.rdl_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_11'" >
                        <span v-if="field.rdl_11 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_11 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_12'" >
                        {{ field.rdl_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_12'" >
                        <span v-if="field.rdl_12 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_12 / 1) * 0.061) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_13'" >
                        {{ field.rdl_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_13'" >
                        <span v-if="field.rdl_13 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_13 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_14'" >
                        {{ field.rdl_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_14'" >
                        <span v-if="field.rdl_14 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_14 / 1) * 0.179) + 2.6).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_15'" >
                        {{ field.rdl_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_15'" >
                        <span v-if="field.rdl_15 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_15 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_16'" >
                        {{ field.rdl_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_16'" >
                        <span v-if="field.rdl_16 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_16 / 1) * 0.621) + 0).toFixed(2) }}</span>


                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_17'" >
                        {{ field.rdl_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_17'" >
                        <span v-if="field.rdl_17 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_17 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_18'" >
                        {{ field.rdl_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_18'" >
                        <span v-if="field.rdl_18 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_18 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_19'" >
                        {{ field.rdl_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_19'" >
                        <span v-if="field.rdl_19 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_19 / 1) * 0.319) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_20'" >
                        {{ field.rdl_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_20'" >
                        <span v-if="field.rdl_20 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_20 / 1) * 0.126) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_21'" >
                        {{ field.rdl_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_21'" >
                        <span v-if="field.rdl_21 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_21 / 1) * 0.286) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_22'" >
                        {{ field.rdl_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_22'" >
                        <span v-if="field.rdl_22 ==0.00">0.00</span>
                        <span v-else-if="field.rdl_22 <= 44">{{ parseFloat(((field.rdl_22 / 1) * 0.51) + 9.2).toFixed(2) }}</span>
                        <span v-else>{{ parseFloat(((field.rdl_22 / 1) * 0.74) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_23'" >
                        {{ field.rdl_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_23'" >
                        <span v-if="field.rdl_23 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_23 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_24'" >
                        {{ field.rdl_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_24'" >
                        <span v-if="field.rdl_24 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_24 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_25'" >
                        {{ field.rdl_25 }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_25'" >
                        {{ field.rdl25_volume }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl_25'" >
                        {{ field.rdl25_mass }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_1'" >
                        {{ field.rtd_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_2'" >
                        {{ field.rtd_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_3'" >
                        {{ field.rtd_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_4'" >
                        {{ field.rtd_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_5'" >
                        {{ field.rtd_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_6'" >
                        {{ field.rtd_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_7'" >
                        {{ field.rtd_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_8'" >
                        {{ field.rtd_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_9'" >
                        {{ field.rtd_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_10'" >
                        {{ field.rtd_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_11'" >
                        {{ field.rtd_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_12'" >
                        {{ field.rtd_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_13'" >
                        {{ field.rtd_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_14'" >
                        {{ field.rtd_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_15'" >
                        {{ field.rtd_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_16'" >
                        {{ field.rtd_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_17'" >
                        {{ field.rtd_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_18'" >
                        {{ field.rtd_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_19'" >
                        {{ field.rtd_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_20'" >
                        {{ field.rtd_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_21'" >
                        {{ field.rtd_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_22'" >
                        {{ field.rtd_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_23'" >
                        {{ field.rtd_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_24'" >
                        {{ field.rtd_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_25'" >
                        {{ field.rtd_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_26'" >
                        {{ field.rtd_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_27'" >
                        {{ field.rtd_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_28'" >
                        {{ field.rtd_28 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_29'" >
                        {{ field.rtd_29 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_30'" >
                        {{ field.rtd_30 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_31'" >
                        {{ field.rtd_31 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_32'" >
                        {{ field.rtd_32 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_33'" >
                        {{ field.rtd_33 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_34'" >
                        {{ field.rtd_34 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_35'" >
                        {{ field.rtd_35 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_36'" >
                        {{ field.rtd_36 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rtd_37'" >
                        {{ field.rtd_37 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'dpl_1'" >
                        {{ field.dpl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'dpl_1'" >
                        {{  parseFloat(((field.dpl_1 /1)*0.0230)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'dpl_2'" >
                        {{ field.dpl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'dpl_2'" >
                        {{  parseFloat(((field.dpl_2 /1)*0.0206)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'dpl_3'" >
                        {{ field.dpl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'dpl_3'" >
                        {{  parseFloat(((field.dpl_3 /1)*0.0143)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'dpl_4'" >
                        {{ field.dpl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'dpl_4'" >
                        {{  parseFloat(((field.dpl_4 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'dpl_5'" >
                        {{ field.dpl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'dpl_5'" >
                        {{  parseFloat(((field.dpl_5 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'dpl_6'" >
                        {{ field.dpl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'dpl_6'" >
                        {{  parseFloat(((field.dpl_6 /1)*0.0287)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'dpl_7'" >
                        {{ field.dpl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'dpl_7'" >
                        {{  parseFloat(((field.dpl_7 /1)*0.0128)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'dpl_8'" >
                        {{ field.dpl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'dpl_8'" >
                        {{  parseFloat(((field.dpl_8 /1)*1.158)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_1'" >
                        {{ field.fm_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_2'" >
                        {{ field.fm_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_3'" >
                        {{ field.fm_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_4'" >
                        {{ field.fm_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_5'" >
                        {{ field.fm_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_6'" >
                        {{ field.fm_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_7'" >
                        {{ field.fm_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_8'" >
                        {{ field.fm_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_9'" >
                        {{ field.fm_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_10'" >
                        {{ field.fm_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_11'" >
                        {{ field.fm_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_12'" >
                        {{ field.fm_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_13'" >
                        {{ field.fm_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_14'" >
                        {{ field.fm_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_15'" >
                        {{ field.fm_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_16'" >
                        {{ field.fm_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_17'" >
                        {{ field.fm_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_18'" >
                        {{ field.fm_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_19'" >
                        {{ field.fm_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_20'" >
                        {{ field.fm_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_21'" >
                        {{ field.fm_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_22'" >
                        {{ field.fm_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_23'" >
                        {{ field.fm_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_24'" >
                        {{ field.fm_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_25'" >
                        {{ field.fm_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_26'" >
                        {{ field.fm_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'fm_27'" >
                        {{ field.fm_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_1'" >
                        {{ field.ft_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_2'" >
                        {{ field.ft_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_3'" >
                        {{ field.ft_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_4'" >
                        {{ field.ft_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_5'" >
                        {{ field.ft_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_6'" >
                        {{ field.ft_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_7'" >
                        {{ field.ft_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_8'" >
                        {{ field.ft_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_9'" >
                        {{ field.ft_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_10'" >
                        {{ field.ft_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_11'" >
                        {{ field.ft_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_12'" >
                        {{ field.ft_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_13'" >
                        {{ field.ft_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_14'" >
                        {{ field.ft_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_15'" >
                        {{ field.ft_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_16'" >
                        {{ field.ft_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_17'" >
                        {{ field.ft_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_18'" >
                        {{ field.ft_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_19'" >
                        {{ field.ft_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_20'" >
                        {{ field.ft_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_21'" >
                        {{ field.ft_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_22'" >
                        {{ field.ft_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_23'" >
                        {{ field.ft_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_24'" >
                        {{ field.ft_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_25'" >
                        {{ field.ft_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_26'" >
                        {{ field.ft_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'ft_27'" >
                        {{ field.ft_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'pt_1'" >
                        {{ field.pt_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'pt_2'" >
                        {{ field.pt_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'pt_3'" >
                        {{ field.pt_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'pt_4'" >
                        {{ field.pt_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'pt_5'" >
                        {{ field.pt_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'vg_1'" >
                        {{ field.vg_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'vg_2'" >
                        {{ field.vg_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'vg_3'" >
                        {{ field.vg_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'st_fm1_flow'" >

                        {{ field.st_fm1_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'st_fm1_flow'" >

                        {{ field.stfm1_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'st_fm1_flow'" >

                        {{ field.stfm1_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'st_fm1_flow'" >

                        {{ field.stfm1_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[3] == 'st_fm2_flow'" >

                        {{ field.st_fm2_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'st_fm2_flow'" >

                        {{ field.stfm2_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'st_fm2_flow'" >

                        {{ field.stfm2_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'st_fm2_flow'" >

                        {{ field.stfm2_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_1'" >
                        {{ field.rdl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_1'" >
                        <span v-if="field.rdl_1 ==0.00">0.00</span>
                        <span v-else>{{  parseFloat(((field.rdl_1/1)* 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_2'" >
                        {{ field.rdl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_2'" >
                        <span v-if="field.rdl_2 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_2 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_3'" >
                        {{ field.rdl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_3'" >
                        <span v-if="field.rdl_3 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_3 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_4'" >
                        {{ field.rdl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_4'" >
                        <span v-if="field.rdl_4 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_4 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_5'" >
                        {{ field.rdl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_5'" >
                        <span v-if="field.rdl_5 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_5 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_6'" >
                        {{ field.rdl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_6'" >
                        <span v-if="field.rdl_6 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_6 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_7'" >
                        {{ field.rdl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_7'" >
                        <span v-if="field.rdl_7 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_7 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_8'" >
                        {{ field.rdl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_8'" >
                        <span v-if="field.rdl_8 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_8 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_9'" >
                        {{ field.rdl_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_9'" >
                        <span v-if="field.rdl_9 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_9 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_10'" >
                        {{ field.rdl_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_10'" >
                        <span v-if="field.rdl_10 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_10 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_11'" >
                        {{ field.rdl_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_11'" >
                        <span v-if="field.rdl_11 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_11 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_12'" >
                        {{ field.rdl_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_12'" >
                        <span v-if="field.rdl_12 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_12 / 1) * 0.061) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_13'" >
                        {{ field.rdl_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_13'" >
                        <span v-if="field.rdl_13 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_13 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_14'" >
                        {{ field.rdl_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_14'" >
                        <span v-if="field.rdl_14 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_14 / 1) * 0.179) + 2.6).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_15'" >
                        {{ field.rdl_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_15'" >
                        <span v-if="field.rdl_15 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_15 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_16'" >
                        {{ field.rdl_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_16'" >
                        <span v-if="field.rdl_16 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_16 / 1) * 0.621) + 0).toFixed(2) }}</span>


                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_17'" >
                        {{ field.rdl_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_17'" >
                        <span v-if="field.rdl_17 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_17 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_18'" >
                        {{ field.rdl_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_18'" >
                        <span v-if="field.rdl_18 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_18 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_19'" >
                        {{ field.rdl_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_19'" >
                        <span v-if="field.rdl_19 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_19 / 1) * 0.319) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_20'" >
                        {{ field.rdl_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_20'" >
                        <span v-if="field.rdl_20 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_20 / 1) * 0.126) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_21'" >
                        {{ field.rdl_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_21'" >
                        <span v-if="field.rdl_21 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_21 / 1) * 0.286) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_22'" >
                        {{ field.rdl_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_22'" >
                        <span v-if="field.rdl_22 ==0.00">0.00</span>
                        <span v-else-if="field.rdl_22 <= 44">{{ parseFloat(((field.rdl_22 / 1) * 0.51) + 9.2).toFixed(2) }}</span>
                        <span v-else>{{ parseFloat(((field.rdl_22 / 1) * 0.74) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_23'" >
                        {{ field.rdl_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_23'" >
                        <span v-if="field.rdl_23 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_23 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_24'" >
                        {{ field.rdl_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_24'" >
                        <span v-if="field.rdl_24 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_24 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_25'" >
                        {{ field.rdl_25 }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_25'" >
                        {{ field.rdl25_volume }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl_25'" >
                        {{ field.rdl25_mass }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_1'" >
                        {{ field.rtd_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_2'" >
                        {{ field.rtd_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_3'" >
                        {{ field.rtd_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_4'" >
                        {{ field.rtd_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_5'" >
                        {{ field.rtd_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_6'" >
                        {{ field.rtd_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_7'" >
                        {{ field.rtd_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_8'" >
                        {{ field.rtd_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_9'" >
                        {{ field.rtd_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_10'" >
                        {{ field.rtd_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_11'" >
                        {{ field.rtd_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_12'" >
                        {{ field.rtd_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_13'" >
                        {{ field.rtd_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_14'" >
                        {{ field.rtd_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_15'" >
                        {{ field.rtd_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_16'" >
                        {{ field.rtd_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_17'" >
                        {{ field.rtd_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_18'" >
                        {{ field.rtd_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_19'" >
                        {{ field.rtd_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_20'" >
                        {{ field.rtd_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_21'" >
                        {{ field.rtd_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_22'" >
                        {{ field.rtd_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_23'" >
                        {{ field.rtd_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_24'" >
                        {{ field.rtd_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_25'" >
                        {{ field.rtd_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_26'" >
                        {{ field.rtd_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_27'" >
                        {{ field.rtd_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_28'" >
                        {{ field.rtd_28 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_29'" >
                        {{ field.rtd_29 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_30'" >
                        {{ field.rtd_30 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_31'" >
                        {{ field.rtd_31 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_32'" >
                        {{ field.rtd_32 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_33'" >
                        {{ field.rtd_33 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_34'" >
                        {{ field.rtd_34 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_35'" >
                        {{ field.rtd_35 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_36'" >
                        {{ field.rtd_36 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rtd_37'" >
                        {{ field.rtd_37 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'dpl_1'" >
                        {{ field.dpl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'dpl_1'" >
                        {{  parseFloat(((field.dpl_1 /1)*0.0230)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'dpl_2'" >
                        {{ field.dpl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'dpl_2'" >
                        {{  parseFloat(((field.dpl_2 /1)*0.0206)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'dpl_3'" >
                        {{ field.dpl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'dpl_3'" >
                        {{  parseFloat(((field.dpl_3 /1)*0.0143)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'dpl_4'" >
                        {{ field.dpl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'dpl_4'" >
                        {{  parseFloat(((field.dpl_4 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'dpl_5'" >
                        {{ field.dpl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'dpl_5'" >
                        {{  parseFloat(((field.dpl_5 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'dpl_6'" >
                        {{ field.dpl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'dpl_6'" >
                        {{  parseFloat(((field.dpl_6 /1)*0.0287)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'dpl_7'" >
                        {{ field.dpl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'dpl_7'" >
                        {{  parseFloat(((field.dpl_7 /1)*0.0128)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'dpl_8'" >
                        {{ field.dpl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'dpl_8'" >
                        {{  parseFloat(((field.dpl_8 /1)*1.158)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_1'" >
                        {{ field.fm_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_2'" >
                        {{ field.fm_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_3'" >
                        {{ field.fm_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_4'" >
                        {{ field.fm_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_5'" >
                        {{ field.fm_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_6'" >
                        {{ field.fm_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_7'" >
                        {{ field.fm_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_8'" >
                        {{ field.fm_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_9'" >
                        {{ field.fm_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_10'" >
                        {{ field.fm_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_11'" >
                        {{ field.fm_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_12'" >
                        {{ field.fm_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_13'" >
                        {{ field.fm_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_14'" >
                        {{ field.fm_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_15'" >
                        {{ field.fm_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_16'" >
                        {{ field.fm_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_17'" >
                        {{ field.fm_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_18'" >
                        {{ field.fm_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_19'" >
                        {{ field.fm_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_20'" >
                        {{ field.fm_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_21'" >
                        {{ field.fm_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_22'" >
                        {{ field.fm_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_23'" >
                        {{ field.fm_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_24'" >
                        {{ field.fm_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_25'" >
                        {{ field.fm_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_26'" >
                        {{ field.fm_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'fm_27'" >
                        {{ field.fm_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_1'" >
                        {{ field.ft_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_2'" >
                        {{ field.ft_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_3'" >
                        {{ field.ft_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_4'" >
                        {{ field.ft_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_5'" >
                        {{ field.ft_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_6'" >
                        {{ field.ft_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_7'" >
                        {{ field.ft_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_8'" >
                        {{ field.ft_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_9'" >
                        {{ field.ft_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_10'" >
                        {{ field.ft_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_11'" >
                        {{ field.ft_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_12'" >
                        {{ field.ft_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_13'" >
                        {{ field.ft_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_14'" >
                        {{ field.ft_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_15'" >
                        {{ field.ft_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_16'" >
                        {{ field.ft_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_17'" >
                        {{ field.ft_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_18'" >
                        {{ field.ft_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_19'" >
                        {{ field.ft_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_20'" >
                        {{ field.ft_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_21'" >
                        {{ field.ft_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_22'" >
                        {{ field.ft_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_23'" >
                        {{ field.ft_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_24'" >
                        {{ field.ft_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_25'" >
                        {{ field.ft_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_26'" >
                        {{ field.ft_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'ft_27'" >
                        {{ field.ft_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'pt_1'" >
                        {{ field.pt_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'pt_2'" >
                        {{ field.pt_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'pt_3'" >
                        {{ field.pt_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'pt_4'" >
                        {{ field.pt_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'pt_5'" >
                        {{ field.pt_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'vg_1'" >
                        {{ field.vg_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'vg_2'" >
                        {{ field.vg_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'vg_3'" >
                        {{ field.vg_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'st_fm1_flow'" >

                        {{ field.st_fm1_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'st_fm1_flow'" >

                        {{ field.stfm1_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'st_fm1_flow'" >

                        {{ field.stfm1_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'st_fm1_flow'" >

                        {{ field.stfm1_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[4] == 'st_fm2_flow'" >

                        {{ field.st_fm2_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'st_fm2_flow'" >

                        {{ field.stfm2_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'st_fm2_flow'" >

                        {{ field.stfm2_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'st_fm2_flow'" >

                        {{ field.stfm2_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_1'" >
                        {{ field.rdl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_1'" >
                        <span v-if="field.rdl_1 ==0.00">0.00</span>
                        <span v-else>{{  parseFloat(((field.rdl_1/1)* 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_2'" >
                        {{ field.rdl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_2'" >
                        <span v-if="field.rdl_2 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_2 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_3'" >
                        {{ field.rdl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_3'" >
                        <span v-if="field.rdl_3 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_3 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_4'" >
                        {{ field.rdl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_4'" >
                        <span v-if="field.rdl_4 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_4 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_5'" >
                        {{ field.rdl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_5'" >
                        <span v-if="field.rdl_5 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_5 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_6'" >
                        {{ field.rdl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_6'" >
                        <span v-if="field.rdl_6 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_6 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_7'" >
                        {{ field.rdl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_7'" >
                        <span v-if="field.rdl_7 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_7 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_8'" >
                        {{ field.rdl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_8'" >
                        <span v-if="field.rdl_8 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_8 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_9'" >
                        {{ field.rdl_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_9'" >
                        <span v-if="field.rdl_9 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_9 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_10'" >
                        {{ field.rdl_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_10'" >
                        <span v-if="field.rdl_10 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_10 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_11'" >
                        {{ field.rdl_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_11'" >
                        <span v-if="field.rdl_11 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_11 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_12'" >
                        {{ field.rdl_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_12'" >
                        <span v-if="field.rdl_12 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_12 / 1) * 0.061) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_13'" >
                        {{ field.rdl_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_13'" >
                        <span v-if="field.rdl_13 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_13 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_14'" >
                        {{ field.rdl_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_14'" >
                        <span v-if="field.rdl_14 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_14 / 1) * 0.179) + 2.6).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_15'" >
                        {{ field.rdl_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_15'" >
                        <span v-if="field.rdl_15 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_15 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_16'" >
                        {{ field.rdl_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_16'" >
                        <span v-if="field.rdl_16 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_16 / 1) * 0.621) + 0).toFixed(2) }}</span>


                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_17'" >
                        {{ field.rdl_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_17'" >
                        <span v-if="field.rdl_17 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_17 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_18'" >
                        {{ field.rdl_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_18'" >
                        <span v-if="field.rdl_18 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_18 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_19'" >
                        {{ field.rdl_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_19'" >
                        <span v-if="field.rdl_19 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_19 / 1) * 0.319) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_20'" >
                        {{ field.rdl_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_20'" >
                        <span v-if="field.rdl_20 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_20 / 1) * 0.126) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_21'" >
                        {{ field.rdl_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_21'" >
                        <span v-if="field.rdl_21 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_21 / 1) * 0.286) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_22'" >
                        {{ field.rdl_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_22'" >
                        <span v-if="field.rdl_22 ==0.00">0.00</span>
                        <span v-else-if="field.rdl_22 <= 44">{{ parseFloat(((field.rdl_22 / 1) * 0.51) + 9.2).toFixed(2) }}</span>
                        <span v-else>{{ parseFloat(((field.rdl_22 / 1) * 0.74) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_23'" >
                        {{ field.rdl_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_23'" >
                        <span v-if="field.rdl_23 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_23 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_24'" >
                        {{ field.rdl_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_24'" >
                        <span v-if="field.rdl_24 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_24 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_25'" >
                        {{ field.rdl_25 }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_25'" >
                        {{ field.rdl25_volume }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl_25'" >
                        {{ field.rdl25_mass }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_1'" >
                        {{ field.rtd_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_2'" >
                        {{ field.rtd_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_3'" >
                        {{ field.rtd_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_4'" >
                        {{ field.rtd_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_5'" >
                        {{ field.rtd_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_6'" >
                        {{ field.rtd_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_7'" >
                        {{ field.rtd_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_8'" >
                        {{ field.rtd_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_9'" >
                        {{ field.rtd_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_10'" >
                        {{ field.rtd_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_11'" >
                        {{ field.rtd_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_12'" >
                        {{ field.rtd_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_13'" >
                        {{ field.rtd_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_14'" >
                        {{ field.rtd_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_15'" >
                        {{ field.rtd_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_16'" >
                        {{ field.rtd_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_17'" >
                        {{ field.rtd_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_18'" >
                        {{ field.rtd_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_19'" >
                        {{ field.rtd_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_20'" >
                        {{ field.rtd_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_21'" >
                        {{ field.rtd_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_22'" >
                        {{ field.rtd_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_23'" >
                        {{ field.rtd_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_24'" >
                        {{ field.rtd_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_25'" >
                        {{ field.rtd_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_26'" >
                        {{ field.rtd_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_27'" >
                        {{ field.rtd_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_28'" >
                        {{ field.rtd_28 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_29'" >
                        {{ field.rtd_29 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_30'" >
                        {{ field.rtd_30 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_31'" >
                        {{ field.rtd_31 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_32'" >
                        {{ field.rtd_32 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_33'" >
                        {{ field.rtd_33 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_34'" >
                        {{ field.rtd_34 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_35'" >
                        {{ field.rtd_35 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_36'" >
                        {{ field.rtd_36 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rtd_37'" >
                        {{ field.rtd_37 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'dpl_1'" >
                        {{ field.dpl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'dpl_1'" >
                        {{  parseFloat(((field.dpl_1 /1)*0.0230)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'dpl_2'" >
                        {{ field.dpl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'dpl_2'" >
                        {{  parseFloat(((field.dpl_2 /1)*0.0206)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'dpl_3'" >
                        {{ field.dpl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'dpl_3'" >
                        {{  parseFloat(((field.dpl_3 /1)*0.0143)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'dpl_4'" >
                        {{ field.dpl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'dpl_4'" >
                        {{  parseFloat(((field.dpl_4 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'dpl_5'" >
                        {{ field.dpl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'dpl_5'" >
                        {{  parseFloat(((field.dpl_5 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'dpl_6'" >
                        {{ field.dpl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'dpl_6'" >
                        {{  parseFloat(((field.dpl_6 /1)*0.0287)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'dpl_7'" >
                        {{ field.dpl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'dpl_7'" >
                        {{  parseFloat(((field.dpl_7 /1)*0.0128)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'dpl_8'" >
                        {{ field.dpl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'dpl_8'" >
                        {{  parseFloat(((field.dpl_8 /1)*1.158)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_1'" >
                        {{ field.fm_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_2'" >
                        {{ field.fm_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_3'" >
                        {{ field.fm_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_4'" >
                        {{ field.fm_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_5'" >
                        {{ field.fm_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_6'" >
                        {{ field.fm_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_7'" >
                        {{ field.fm_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_8'" >
                        {{ field.fm_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_9'" >
                        {{ field.fm_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_10'" >
                        {{ field.fm_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_11'" >
                        {{ field.fm_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_12'" >
                        {{ field.fm_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_13'" >
                        {{ field.fm_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_14'" >
                        {{ field.fm_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_15'" >
                        {{ field.fm_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_16'" >
                        {{ field.fm_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_17'" >
                        {{ field.fm_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_18'" >
                        {{ field.fm_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_19'" >
                        {{ field.fm_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_20'" >
                        {{ field.fm_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_21'" >
                        {{ field.fm_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_22'" >
                        {{ field.fm_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_23'" >
                        {{ field.fm_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_24'" >
                        {{ field.fm_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_25'" >
                        {{ field.fm_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_26'" >
                        {{ field.fm_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'fm_27'" >
                        {{ field.fm_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_1'" >
                        {{ field.ft_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_2'" >
                        {{ field.ft_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_3'" >
                        {{ field.ft_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_4'" >
                        {{ field.ft_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_5'" >
                        {{ field.ft_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_6'" >
                        {{ field.ft_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_7'" >
                        {{ field.ft_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_8'" >
                        {{ field.ft_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_9'" >
                        {{ field.ft_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_10'" >
                        {{ field.ft_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_11'" >
                        {{ field.ft_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_12'" >
                        {{ field.ft_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_13'" >
                        {{ field.ft_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_14'" >
                        {{ field.ft_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_15'" >
                        {{ field.ft_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_16'" >
                        {{ field.ft_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_17'" >
                        {{ field.ft_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_18'" >
                        {{ field.ft_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_19'" >
                        {{ field.ft_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_20'" >
                        {{ field.ft_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_21'" >
                        {{ field.ft_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_22'" >
                        {{ field.ft_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_23'" >
                        {{ field.ft_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_24'" >
                        {{ field.ft_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_25'" >
                        {{ field.ft_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_26'" >
                        {{ field.ft_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'ft_27'" >
                        {{ field.ft_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'pt_1'" >
                        {{ field.pt_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'pt_2'" >
                        {{ field.pt_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'pt_3'" >
                        {{ field.pt_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'pt_4'" >
                        {{ field.pt_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'pt_5'" >
                        {{ field.pt_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'vg_1'" >
                        {{ field.vg_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'vg_2'" >
                        {{ field.vg_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'vg_3'" >
                        {{ field.vg_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'st_fm1_flow'" >

                        {{ field.st_fm1_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'st_fm1_flow'" >

                        {{ field.stfm1_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'st_fm1_flow'" >

                        {{ field.stfm1_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'st_fm1_flow'" >

                        {{ field.stfm1_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[5] == 'st_fm2_flow'" >

                        {{ field.st_fm2_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'st_fm2_flow'" >

                        {{ field.stfm2_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'st_fm2_flow'" >

                        {{ field.stfm2_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'st_fm2_flow'" >

                        {{ field.stfm2_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_1'" >
                        {{ field.rdl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_1'" >
                        <span v-if="field.rdl_1 ==0.00">0.00</span>
                        <span v-else>{{  parseFloat(((field.rdl_1/1)* 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_2'" >
                        {{ field.rdl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_2'" >
                        <span v-if="field.rdl_2 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_2 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_3'" >
                        {{ field.rdl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_3'" >
                        <span v-if="field.rdl_3 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_3 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_4'" >
                        {{ field.rdl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_4'" >
                        <span v-if="field.rdl_4 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_4 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_5'" >
                        {{ field.rdl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_5'" >
                        <span v-if="field.rdl_5 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_5 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_6'" >
                        {{ field.rdl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_6'" >
                        <span v-if="field.rdl_6 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_6 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_7'" >
                        {{ field.rdl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_7'" >
                        <span v-if="field.rdl_7 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_7 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_8'" >
                        {{ field.rdl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_8'" >
                        <span v-if="field.rdl_8 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_8 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_9'" >
                        {{ field.rdl_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_9'" >
                        <span v-if="field.rdl_9 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_9 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_10'" >
                        {{ field.rdl_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_10'" >
                        <span v-if="field.rdl_10 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_10 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_11'" >
                        {{ field.rdl_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_11'" >
                        <span v-if="field.rdl_11 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_11 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_12'" >
                        {{ field.rdl_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_12'" >
                        <span v-if="field.rdl_12 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_12 / 1) * 0.061) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_13'" >
                        {{ field.rdl_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_13'" >
                        <span v-if="field.rdl_13 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_13 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_14'" >
                        {{ field.rdl_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_14'" >
                        <span v-if="field.rdl_14 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_14 / 1) * 0.179) + 2.6).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_15'" >
                        {{ field.rdl_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_15'" >
                        <span v-if="field.rdl_15 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_15 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_16'" >
                        {{ field.rdl_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_16'" >
                        <span v-if="field.rdl_16 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_16 / 1) * 0.621) + 0).toFixed(2) }}</span>


                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_17'" >
                        {{ field.rdl_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_17'" >
                        <span v-if="field.rdl_17 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_17 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_18'" >
                        {{ field.rdl_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_18'" >
                        <span v-if="field.rdl_18 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_18 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_19'" >
                        {{ field.rdl_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_19'" >
                        <span v-if="field.rdl_19 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_19 / 1) * 0.319) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_20'" >
                        {{ field.rdl_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_20'" >
                        <span v-if="field.rdl_20 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_20 / 1) * 0.126) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_21'" >
                        {{ field.rdl_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_21'" >
                        <span v-if="field.rdl_21 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_21 / 1) * 0.286) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_22'" >
                        {{ field.rdl_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_22'" >
                        <span v-if="field.rdl_22 ==0.00">0.00</span>
                        <span v-else-if="field.rdl_22 <= 44">{{ parseFloat(((field.rdl_22 / 1) * 0.51) + 9.2).toFixed(2) }}</span>
                        <span v-else>{{ parseFloat(((field.rdl_22 / 1) * 0.74) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_23'" >
                        {{ field.rdl_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_23'" >
                        <span v-if="field.rdl_23 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_23 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_24'" >
                        {{ field.rdl_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_24'" >
                        <span v-if="field.rdl_24 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_24 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_25'" >
                        {{ field.rdl_25 }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_25'" >
                        {{ field.rdl25_volume }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl_25'" >
                        {{ field.rdl25_mass }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_1'" >
                        {{ field.rtd_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_2'" >
                        {{ field.rtd_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_3'" >
                        {{ field.rtd_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_4'" >
                        {{ field.rtd_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_5'" >
                        {{ field.rtd_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_6'" >
                        {{ field.rtd_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_7'" >
                        {{ field.rtd_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_8'" >
                        {{ field.rtd_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_9'" >
                        {{ field.rtd_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_10'" >
                        {{ field.rtd_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_11'" >
                        {{ field.rtd_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_12'" >
                        {{ field.rtd_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_13'" >
                        {{ field.rtd_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_14'" >
                        {{ field.rtd_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_15'" >
                        {{ field.rtd_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_16'" >
                        {{ field.rtd_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_17'" >
                        {{ field.rtd_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_18'" >
                        {{ field.rtd_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_19'" >
                        {{ field.rtd_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_20'" >
                        {{ field.rtd_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_21'" >
                        {{ field.rtd_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_22'" >
                        {{ field.rtd_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_23'" >
                        {{ field.rtd_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_24'" >
                        {{ field.rtd_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_25'" >
                        {{ field.rtd_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_26'" >
                        {{ field.rtd_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_27'" >
                        {{ field.rtd_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_28'" >
                        {{ field.rtd_28 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_29'" >
                        {{ field.rtd_29 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_30'" >
                        {{ field.rtd_30 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_31'" >
                        {{ field.rtd_31 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_32'" >
                        {{ field.rtd_32 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_33'" >
                        {{ field.rtd_33 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_34'" >
                        {{ field.rtd_34 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_35'" >
                        {{ field.rtd_35 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_36'" >
                        {{ field.rtd_36 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rtd_37'" >
                        {{ field.rtd_37 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'dpl_1'" >
                        {{ field.dpl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'dpl_1'" >
                        {{  parseFloat(((field.dpl_1 /1)*0.0230)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'dpl_2'" >
                        {{ field.dpl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'dpl_2'" >
                        {{  parseFloat(((field.dpl_2 /1)*0.0206)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'dpl_3'" >
                        {{ field.dpl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'dpl_3'" >
                        {{  parseFloat(((field.dpl_3 /1)*0.0143)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'dpl_4'" >
                        {{ field.dpl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'dpl_4'" >
                        {{  parseFloat(((field.dpl_4 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'dpl_5'" >
                        {{ field.dpl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'dpl_5'" >
                        {{  parseFloat(((field.dpl_5 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'dpl_6'" >
                        {{ field.dpl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'dpl_6'" >
                        {{  parseFloat(((field.dpl_6 /1)*0.0287)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'dpl_7'" >
                        {{ field.dpl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'dpl_7'" >
                        {{  parseFloat(((field.dpl_7 /1)*0.0128)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'dpl_8'" >
                        {{ field.dpl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'dpl_8'" >
                        {{  parseFloat(((field.dpl_8 /1)*1.158)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_1'" >
                        {{ field.fm_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_2'" >
                        {{ field.fm_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_3'" >
                        {{ field.fm_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_4'" >
                        {{ field.fm_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_5'" >
                        {{ field.fm_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_6'" >
                        {{ field.fm_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_7'" >
                        {{ field.fm_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_8'" >
                        {{ field.fm_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_9'" >
                        {{ field.fm_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_10'" >
                        {{ field.fm_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_11'" >
                        {{ field.fm_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_12'" >
                        {{ field.fm_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_13'" >
                        {{ field.fm_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_14'" >
                        {{ field.fm_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_15'" >
                        {{ field.fm_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_16'" >
                        {{ field.fm_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_17'" >
                        {{ field.fm_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_18'" >
                        {{ field.fm_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_19'" >
                        {{ field.fm_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_20'" >
                        {{ field.fm_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_21'" >
                        {{ field.fm_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_22'" >
                        {{ field.fm_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_23'" >
                        {{ field.fm_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_24'" >
                        {{ field.fm_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_25'" >
                        {{ field.fm_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_26'" >
                        {{ field.fm_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'fm_27'" >
                        {{ field.fm_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_1'" >
                        {{ field.ft_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_2'" >
                        {{ field.ft_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_3'" >
                        {{ field.ft_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_4'" >
                        {{ field.ft_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_5'" >
                        {{ field.ft_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_6'" >
                        {{ field.ft_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_7'" >
                        {{ field.ft_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_8'" >
                        {{ field.ft_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_9'" >
                        {{ field.ft_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_10'" >
                        {{ field.ft_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_11'" >
                        {{ field.ft_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_12'" >
                        {{ field.ft_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_13'" >
                        {{ field.ft_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_14'" >
                        {{ field.ft_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_15'" >
                        {{ field.ft_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_16'" >
                        {{ field.ft_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_17'" >
                        {{ field.ft_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_18'" >
                        {{ field.ft_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_19'" >
                        {{ field.ft_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_20'" >
                        {{ field.ft_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_21'" >
                        {{ field.ft_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_22'" >
                        {{ field.ft_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_23'" >
                        {{ field.ft_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_24'" >
                        {{ field.ft_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_25'" >
                        {{ field.ft_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_26'" >
                        {{ field.ft_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'ft_27'" >
                        {{ field.ft_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'pt_1'" >
                        {{ field.pt_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'pt_2'" >
                        {{ field.pt_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'pt_3'" >
                        {{ field.pt_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'pt_4'" >
                        {{ field.pt_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'pt_5'" >
                        {{ field.pt_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'vg_1'" >
                        {{ field.vg_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'vg_2'" >
                        {{ field.vg_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'vg_3'" >
                        {{ field.vg_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'st_fm1_flow'" >

                        {{ field.st_fm1_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'st_fm1_flow'" >

                        {{ field.stfm1_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'st_fm1_flow'" >

                        {{ field.stfm1_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'st_fm1_flow'" >

                        {{ field.stfm1_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[6] == 'st_fm2_flow'" >

                        {{ field.st_fm2_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'st_fm2_flow'" >

                        {{ field.stfm2_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'st_fm2_flow'" >

                        {{ field.stfm2_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'st_fm2_flow'" >

                        {{ field.stfm2_pressure }}

                    </td>
                    <!--                    ////////////////////////-->

                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_1'" >
                        {{ field.rdl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_1'" >
                        <span v-if="field.rdl_1 ==0.00">0.00</span>
                        <span v-else>{{  parseFloat(((field.rdl_1/1)* 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_2'" >
                        {{ field.rdl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_2'" >
                        <span v-if="field.rdl_2 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_2 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_3'" >
                        {{ field.rdl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_3'" >
                        <span v-if="field.rdl_3 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_3 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_4'" >
                        {{ field.rdl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_4'" >
                        <span v-if="field.rdl_4 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_4 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_5'" >
                        {{ field.rdl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_5'" >
                        <span v-if="field.rdl_5 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_5 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_6'" >
                        {{ field.rdl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_6'" >
                        <span v-if="field.rdl_6 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_6 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_7'" >
                        {{ field.rdl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_7'" >
                        <span v-if="field.rdl_7 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_7 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_8'" >
                        {{ field.rdl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_8'" >
                        <span v-if="field.rdl_8 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_8 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_9'" >
                        {{ field.rdl_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_9'" >
                        <span v-if="field.rdl_9 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_9 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_10'" >
                        {{ field.rdl_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_10'" >
                        <span v-if="field.rdl_10 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_10 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_11'" >
                        {{ field.rdl_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_11'" >
                        <span v-if="field.rdl_11 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_11 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_12'" >
                        {{ field.rdl_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_12'" >
                        <span v-if="field.rdl_12 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_12 / 1) * 0.061) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_13'" >
                        {{ field.rdl_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_13'" >
                        <span v-if="field.rdl_13 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_13 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_14'" >
                        {{ field.rdl_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_14'" >
                        <span v-if="field.rdl_14 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_14 / 1) * 0.179) + 2.6).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_15'" >
                        {{ field.rdl_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_15'" >
                        <span v-if="field.rdl_15 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_15 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_16'" >
                        {{ field.rdl_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_16'" >
                        <span v-if="field.rdl_16 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_16 / 1) * 0.621) + 0).toFixed(2) }}</span>


                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_17'" >
                        {{ field.rdl_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_17'" >
                        <span v-if="field.rdl_17 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_17 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_18'" >
                        {{ field.rdl_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_18'" >
                        <span v-if="field.rdl_18 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_18 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_19'" >
                        {{ field.rdl_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_19'" >
                        <span v-if="field.rdl_19 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_19 / 1) * 0.319) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_20'" >
                        {{ field.rdl_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_20'" >
                        <span v-if="field.rdl_20 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_20 / 1) * 0.126) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_21'" >
                        {{ field.rdl_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_21'" >
                        <span v-if="field.rdl_21 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_21 / 1) * 0.286) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_22'" >
                        {{ field.rdl_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_22'" >
                        <span v-if="field.rdl_22 ==0.00">0.00</span>
                        <span v-else-if="field.rdl_22 <= 44">{{ parseFloat(((field.rdl_22 / 1) * 0.51) + 9.2).toFixed(2) }}</span>
                        <span v-else>{{ parseFloat(((field.rdl_22 / 1) * 0.74) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_23'" >
                        {{ field.rdl_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_23'" >
                        <span v-if="field.rdl_23 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_23 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_24'" >
                        {{ field.rdl_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_24'" >
                        <span v-if="field.rdl_24 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_24 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_25'" >
                        {{ field.rdl_25 }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_25'" >
                        {{ field.rdl25_volume }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl_25'" >
                        {{ field.rdl25_mass }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_1'" >
                        {{ field.rtd_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_2'" >
                        {{ field.rtd_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_3'" >
                        {{ field.rtd_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_4'" >
                        {{ field.rtd_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_5'" >
                        {{ field.rtd_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_6'" >
                        {{ field.rtd_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_7'" >
                        {{ field.rtd_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_8'" >
                        {{ field.rtd_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_9'" >
                        {{ field.rtd_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_10'" >
                        {{ field.rtd_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_11'" >
                        {{ field.rtd_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_12'" >
                        {{ field.rtd_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_13'" >
                        {{ field.rtd_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_14'" >
                        {{ field.rtd_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_15'" >
                        {{ field.rtd_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_16'" >
                        {{ field.rtd_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_17'" >
                        {{ field.rtd_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_18'" >
                        {{ field.rtd_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_19'" >
                        {{ field.rtd_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_20'" >
                        {{ field.rtd_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_21'" >
                        {{ field.rtd_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_22'" >
                        {{ field.rtd_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_23'" >
                        {{ field.rtd_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_24'" >
                        {{ field.rtd_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_25'" >
                        {{ field.rtd_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_26'" >
                        {{ field.rtd_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_27'" >
                        {{ field.rtd_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_28'" >
                        {{ field.rtd_28 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_29'" >
                        {{ field.rtd_29 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_30'" >
                        {{ field.rtd_30 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_31'" >
                        {{ field.rtd_31 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_32'" >
                        {{ field.rtd_32 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_33'" >
                        {{ field.rtd_33 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_34'" >
                        {{ field.rtd_34 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_35'" >
                        {{ field.rtd_35 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_36'" >
                        {{ field.rtd_36 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rtd_37'" >
                        {{ field.rtd_37 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'dpl_1'" >
                        {{ field.dpl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'dpl_1'" >
                        {{  parseFloat(((field.dpl_1 /1)*0.0230)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'dpl_2'" >
                        {{ field.dpl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'dpl_2'" >
                        {{  parseFloat(((field.dpl_2 /1)*0.0206)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'dpl_3'" >
                        {{ field.dpl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'dpl_3'" >
                        {{  parseFloat(((field.dpl_3 /1)*0.0143)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'dpl_4'" >
                        {{ field.dpl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'dpl_4'" >
                        {{  parseFloat(((field.dpl_4 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'dpl_5'" >
                        {{ field.dpl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'dpl_5'" >
                        {{  parseFloat(((field.dpl_5 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'dpl_6'" >
                        {{ field.dpl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'dpl_6'" >
                        {{  parseFloat(((field.dpl_6 /1)*0.0287)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'dpl_7'" >
                        {{ field.dpl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'dpl_7'" >
                        {{  parseFloat(((field.dpl_7 /1)*0.0128)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'dpl_8'" >
                        {{ field.dpl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'dpl_8'" >
                        {{  parseFloat(((field.dpl_8 /1)*1.158)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_1'" >
                        {{ field.fm_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_2'" >
                        {{ field.fm_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_3'" >
                        {{ field.fm_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_4'" >
                        {{ field.fm_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_5'" >
                        {{ field.fm_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_6'" >
                        {{ field.fm_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_7'" >
                        {{ field.fm_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_8'" >
                        {{ field.fm_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_9'" >
                        {{ field.fm_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_10'" >
                        {{ field.fm_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_11'" >
                        {{ field.fm_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_12'" >
                        {{ field.fm_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_13'" >
                        {{ field.fm_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_14'" >
                        {{ field.fm_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_15'" >
                        {{ field.fm_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_16'" >
                        {{ field.fm_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_17'" >
                        {{ field.fm_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_18'" >
                        {{ field.fm_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_19'" >
                        {{ field.fm_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_20'" >
                        {{ field.fm_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_21'" >
                        {{ field.fm_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_22'" >
                        {{ field.fm_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_23'" >
                        {{ field.fm_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_24'" >
                        {{ field.fm_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_25'" >
                        {{ field.fm_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_26'" >
                        {{ field.fm_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'fm_27'" >
                        {{ field.fm_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_1'" >
                        {{ field.ft_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_2'" >
                        {{ field.ft_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_3'" >
                        {{ field.ft_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_4'" >
                        {{ field.ft_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_5'" >
                        {{ field.ft_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_6'" >
                        {{ field.ft_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_7'" >
                        {{ field.ft_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_8'" >
                        {{ field.ft_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_9'" >
                        {{ field.ft_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_10'" >
                        {{ field.ft_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_11'" >
                        {{ field.ft_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_12'" >
                        {{ field.ft_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_13'" >
                        {{ field.ft_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_14'" >
                        {{ field.ft_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_15'" >
                        {{ field.ft_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_16'" >
                        {{ field.ft_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_17'" >
                        {{ field.ft_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_18'" >
                        {{ field.ft_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_19'" >
                        {{ field.ft_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_20'" >
                        {{ field.ft_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_21'" >
                        {{ field.ft_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_22'" >
                        {{ field.ft_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_23'" >
                        {{ field.ft_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_24'" >
                        {{ field.ft_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_25'" >
                        {{ field.ft_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_26'" >
                        {{ field.ft_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'ft_27'" >
                        {{ field.ft_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'pt_1'" >
                        {{ field.pt_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'pt_2'" >
                        {{ field.pt_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'pt_3'" >
                        {{ field.pt_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'pt_4'" >
                        {{ field.pt_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'pt_5'" >
                        {{ field.pt_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'vg_1'" >
                        {{ field.vg_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'vg_2'" >
                        {{ field.vg_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'vg_3'" >
                        {{ field.vg_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'st_fm1_flow'" >

                        {{ field.st_fm1_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'st_fm1_flow'" >

                        {{ field.stfm1_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'st_fm1_flow'" >

                        {{ field.stfm1_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'st_fm1_flow'" >

                        {{ field.stfm1_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[7] == 'st_fm2_flow'" >

                        {{ field.st_fm2_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'st_fm2_flow'" >

                        {{ field.stfm2_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'st_fm2_flow'" >

                        {{ field.stfm2_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'st_fm2_flow'" >

                        {{ field.stfm2_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_1'" >
                        {{ field.rdl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_1'" >
                        <span v-if="field.rdl_1 ==0.00">0.00</span>
                        <span v-else>{{  parseFloat(((field.rdl_1/1)* 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_2'" >
                        {{ field.rdl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_2'" >
                        <span v-if="field.rdl_2 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_2 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_3'" >
                        {{ field.rdl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_3'" >
                        <span v-if="field.rdl_3 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_3 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_4'" >
                        {{ field.rdl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_4'" >
                        <span v-if="field.rdl_4 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_4 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_5'" >
                        {{ field.rdl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_5'" >
                        <span v-if="field.rdl_5 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_5 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_6'" >
                        {{ field.rdl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_6'" >
                        <span v-if="field.rdl_6 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_6 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_7'" >
                        {{ field.rdl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_7'" >
                        <span v-if="field.rdl_7 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_7 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_8'" >
                        {{ field.rdl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_8'" >
                        <span v-if="field.rdl_8 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_8 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_9'" >
                        {{ field.rdl_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_9'" >
                        <span v-if="field.rdl_9 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_9 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_10'" >
                        {{ field.rdl_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_10'" >
                        <span v-if="field.rdl_10 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_10 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_11'" >
                        {{ field.rdl_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_11'" >
                        <span v-if="field.rdl_11 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_11 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_12'" >
                        {{ field.rdl_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_12'" >
                        <span v-if="field.rdl_12 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_12 / 1) * 0.061) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_13'" >
                        {{ field.rdl_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_13'" >
                        <span v-if="field.rdl_13 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_13 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_14'" >
                        {{ field.rdl_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_14'" >
                        <span v-if="field.rdl_14 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_14 / 1) * 0.179) + 2.6).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_15'" >
                        {{ field.rdl_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_15'" >
                        <span v-if="field.rdl_15 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_15 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_16'" >
                        {{ field.rdl_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_16'" >
                        <span v-if="field.rdl_16 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_16 / 1) * 0.621) + 0).toFixed(2) }}</span>


                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_17'" >
                        {{ field.rdl_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_17'" >
                        <span v-if="field.rdl_17 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_17 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_18'" >
                        {{ field.rdl_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_18'" >
                        <span v-if="field.rdl_18 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_18 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_19'" >
                        {{ field.rdl_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_19'" >
                        <span v-if="field.rdl_19 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_19 / 1) * 0.319) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_20'" >
                        {{ field.rdl_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_20'" >
                        <span v-if="field.rdl_20 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_20 / 1) * 0.126) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_21'" >
                        {{ field.rdl_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_21'" >
                        <span v-if="field.rdl_21 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_21 / 1) * 0.286) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_22'" >
                        {{ field.rdl_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_22'" >
                        <span v-if="field.rdl_22 ==0.00">0.00</span>
                        <span v-else-if="field.rdl_22 <= 44">{{ parseFloat(((field.rdl_22 / 1) * 0.51) + 9.2).toFixed(2) }}</span>
                        <span v-else>{{ parseFloat(((field.rdl_22 / 1) * 0.74) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_23'" >
                        {{ field.rdl_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_23'" >
                        <span v-if="field.rdl_23 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_23 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_24'" >
                        {{ field.rdl_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_24'" >
                        <span v-if="field.rdl_24 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_24 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_25'" >
                        {{ field.rdl_25 }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_25'" >
                        {{ field.rdl25_volume }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl_25'" >
                        {{ field.rdl25_mass }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_1'" >
                        {{ field.rtd_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_2'" >
                        {{ field.rtd_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_3'" >
                        {{ field.rtd_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_4'" >
                        {{ field.rtd_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_5'" >
                        {{ field.rtd_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_6'" >
                        {{ field.rtd_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_7'" >
                        {{ field.rtd_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_8'" >
                        {{ field.rtd_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_9'" >
                        {{ field.rtd_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_10'" >
                        {{ field.rtd_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_11'" >
                        {{ field.rtd_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_12'" >
                        {{ field.rtd_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_13'" >
                        {{ field.rtd_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_14'" >
                        {{ field.rtd_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_15'" >
                        {{ field.rtd_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_16'" >
                        {{ field.rtd_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_17'" >
                        {{ field.rtd_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_18'" >
                        {{ field.rtd_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_19'" >
                        {{ field.rtd_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_20'" >
                        {{ field.rtd_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_21'" >
                        {{ field.rtd_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_22'" >
                        {{ field.rtd_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_23'" >
                        {{ field.rtd_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_24'" >
                        {{ field.rtd_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_25'" >
                        {{ field.rtd_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_26'" >
                        {{ field.rtd_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_27'" >
                        {{ field.rtd_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_28'" >
                        {{ field.rtd_28 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_29'" >
                        {{ field.rtd_29 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_30'" >
                        {{ field.rtd_30 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_31'" >
                        {{ field.rtd_31 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_32'" >
                        {{ field.rtd_32 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_33'" >
                        {{ field.rtd_33 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_34'" >
                        {{ field.rtd_34 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_35'" >
                        {{ field.rtd_35 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_36'" >
                        {{ field.rtd_36 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rtd_37'" >
                        {{ field.rtd_37 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'dpl_1'" >
                        {{ field.dpl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'dpl_1'" >
                        {{  parseFloat(((field.dpl_1 /1)*0.0230)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'dpl_2'" >
                        {{ field.dpl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'dpl_2'" >
                        {{  parseFloat(((field.dpl_2 /1)*0.0206)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'dpl_3'" >
                        {{ field.dpl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'dpl_3'" >
                        {{  parseFloat(((field.dpl_3 /1)*0.0143)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'dpl_4'" >
                        {{ field.dpl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'dpl_4'" >
                        {{  parseFloat(((field.dpl_4 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'dpl_5'" >
                        {{ field.dpl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'dpl_5'" >
                        {{  parseFloat(((field.dpl_5 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'dpl_6'" >
                        {{ field.dpl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'dpl_6'" >
                        {{  parseFloat(((field.dpl_6 /1)*0.0287)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'dpl_7'" >
                        {{ field.dpl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'dpl_7'" >
                        {{  parseFloat(((field.dpl_7 /1)*0.0128)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'dpl_8'" >
                        {{ field.dpl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'dpl_8'" >
                        {{  parseFloat(((field.dpl_8 /1)*1.158)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_1'" >
                        {{ field.fm_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_2'" >
                        {{ field.fm_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_3'" >
                        {{ field.fm_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_4'" >
                        {{ field.fm_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_5'" >
                        {{ field.fm_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_6'" >
                        {{ field.fm_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_7'" >
                        {{ field.fm_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_8'" >
                        {{ field.fm_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_9'" >
                        {{ field.fm_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_10'" >
                        {{ field.fm_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_11'" >
                        {{ field.fm_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_12'" >
                        {{ field.fm_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_13'" >
                        {{ field.fm_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_14'" >
                        {{ field.fm_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_15'" >
                        {{ field.fm_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_16'" >
                        {{ field.fm_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_17'" >
                        {{ field.fm_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_18'" >
                        {{ field.fm_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_19'" >
                        {{ field.fm_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_20'" >
                        {{ field.fm_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_21'" >
                        {{ field.fm_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_22'" >
                        {{ field.fm_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_23'" >
                        {{ field.fm_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_24'" >
                        {{ field.fm_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_25'" >
                        {{ field.fm_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_26'" >
                        {{ field.fm_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'fm_27'" >
                        {{ field.fm_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_1'" >
                        {{ field.ft_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_2'" >
                        {{ field.ft_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_3'" >
                        {{ field.ft_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_4'" >
                        {{ field.ft_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_5'" >
                        {{ field.ft_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_6'" >
                        {{ field.ft_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_7'" >
                        {{ field.ft_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_8'" >
                        {{ field.ft_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_9'" >
                        {{ field.ft_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_10'" >
                        {{ field.ft_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_11'" >
                        {{ field.ft_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_12'" >
                        {{ field.ft_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_13'" >
                        {{ field.ft_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_14'" >
                        {{ field.ft_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_15'" >
                        {{ field.ft_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_16'" >
                        {{ field.ft_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_17'" >
                        {{ field.ft_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_18'" >
                        {{ field.ft_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_19'" >
                        {{ field.ft_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_20'" >
                        {{ field.ft_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_21'" >
                        {{ field.ft_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_22'" >
                        {{ field.ft_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_23'" >
                        {{ field.ft_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_24'" >
                        {{ field.ft_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_25'" >
                        {{ field.ft_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_26'" >
                        {{ field.ft_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'ft_27'" >
                        {{ field.ft_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'pt_1'" >
                        {{ field.pt_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'pt_2'" >
                        {{ field.pt_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'pt_3'" >
                        {{ field.pt_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'pt_4'" >
                        {{ field.pt_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'pt_5'" >
                        {{ field.pt_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'vg_1'" >
                        {{ field.vg_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'vg_2'" >
                        {{ field.vg_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'vg_3'" >
                        {{ field.vg_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'st_fm1_flow'" >

                        {{ field.st_fm1_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'st_fm1_flow'" >

                        {{ field.stfm1_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'st_fm1_flow'" >

                        {{ field.stfm1_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'st_fm1_flow'" >

                        {{ field.stfm1_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[8] == 'st_fm2_flow'" >

                        {{ field.st_fm2_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'st_fm2_flow'" >

                        {{ field.stfm2_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'st_fm2_flow'" >

                        {{ field.stfm2_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'st_fm2_flow'" >

                        {{ field.stfm2_pressure }}

                    </td>
                    <!--                    ////////////////////////-->

                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_1'" >
                        {{ field.rdl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_1'" >
                        <span v-if="field.rdl_1 ==0.00">0.00</span>
                        <span v-else>{{  parseFloat(((field.rdl_1/1)* 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_2'" >
                        {{ field.rdl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_2'" >
                        <span v-if="field.rdl_2 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_2 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_3'" >
                        {{ field.rdl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_3'" >
                        <span v-if="field.rdl_3 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_3 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_4'" >
                        {{ field.rdl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_4'" >
                        <span v-if="field.rdl_4 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_4 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_5'" >
                        {{ field.rdl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_5'" >
                        <span v-if="field.rdl_5 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_5 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_6'" >
                        {{ field.rdl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_6'" >
                        <span v-if="field.rdl_6 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_6 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_7'" >
                        {{ field.rdl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_7'" >
                        <span v-if="field.rdl_7 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_7 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_8'" >
                        {{ field.rdl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_8'" >
                        <span v-if="field.rdl_8 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_8 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_9'" >
                        {{ field.rdl_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_9'" >
                        <span v-if="field.rdl_9 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_9 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_10'" >
                        {{ field.rdl_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_10'" >
                        <span v-if="field.rdl_10 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_10 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_11'" >
                        {{ field.rdl_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_11'" >
                        <span v-if="field.rdl_11 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_11 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_12'" >
                        {{ field.rdl_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_12'" >
                        <span v-if="field.rdl_12 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_12 / 1) * 0.061) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_13'" >
                        {{ field.rdl_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_13'" >
                        <span v-if="field.rdl_13 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_13 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_14'" >
                        {{ field.rdl_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_14'" >
                        <span v-if="field.rdl_14 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_14 / 1) * 0.179) + 2.6).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_15'" >
                        {{ field.rdl_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_15'" >
                        <span v-if="field.rdl_15 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_15 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_16'" >
                        {{ field.rdl_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_16'" >
                        <span v-if="field.rdl_16 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_16 / 1) * 0.621) + 0).toFixed(2) }}</span>


                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_17'" >
                        {{ field.rdl_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_17'" >
                        <span v-if="field.rdl_17 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_17 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_18'" >
                        {{ field.rdl_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_18'" >
                        <span v-if="field.rdl_18 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_18 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_19'" >
                        {{ field.rdl_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_19'" >
                        <span v-if="field.rdl_19 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_19 / 1) * 0.319) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_20'" >
                        {{ field.rdl_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_20'" >
                        <span v-if="field.rdl_20 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_20 / 1) * 0.126) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_21'" >
                        {{ field.rdl_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_21'" >
                        <span v-if="field.rdl_21 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_21 / 1) * 0.286) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_22'" >
                        {{ field.rdl_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_22'" >
                        <span v-if="field.rdl_22 ==0.00">0.00</span>
                        <span v-else-if="field.rdl_22 <= 44">{{ parseFloat(((field.rdl_22 / 1) * 0.51) + 9.2).toFixed(2) }}</span>
                        <span v-else>{{ parseFloat(((field.rdl_22 / 1) * 0.74) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_23'" >
                        {{ field.rdl_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_23'" >
                        <span v-if="field.rdl_23 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_23 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_24'" >
                        {{ field.rdl_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_24'" >
                        <span v-if="field.rdl_24 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_24 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_25'" >
                        {{ field.rdl_25 }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_25'" >
                        {{ field.rdl25_volume }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl_25'" >
                        {{ field.rdl25_mass }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_1'" >
                        {{ field.rtd_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_2'" >
                        {{ field.rtd_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_3'" >
                        {{ field.rtd_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_4'" >
                        {{ field.rtd_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_5'" >
                        {{ field.rtd_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_6'" >
                        {{ field.rtd_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_7'" >
                        {{ field.rtd_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_8'" >
                        {{ field.rtd_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_9'" >
                        {{ field.rtd_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_10'" >
                        {{ field.rtd_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_11'" >
                        {{ field.rtd_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_12'" >
                        {{ field.rtd_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_13'" >
                        {{ field.rtd_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_14'" >
                        {{ field.rtd_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_15'" >
                        {{ field.rtd_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_16'" >
                        {{ field.rtd_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_17'" >
                        {{ field.rtd_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_18'" >
                        {{ field.rtd_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_19'" >
                        {{ field.rtd_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_20'" >
                        {{ field.rtd_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_21'" >
                        {{ field.rtd_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_22'" >
                        {{ field.rtd_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_23'" >
                        {{ field.rtd_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_24'" >
                        {{ field.rtd_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_25'" >
                        {{ field.rtd_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_26'" >
                        {{ field.rtd_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_27'" >
                        {{ field.rtd_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_28'" >
                        {{ field.rtd_28 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_29'" >
                        {{ field.rtd_29 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_30'" >
                        {{ field.rtd_30 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_31'" >
                        {{ field.rtd_31 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_32'" >
                        {{ field.rtd_32 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_33'" >
                        {{ field.rtd_33 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_34'" >
                        {{ field.rtd_34 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_35'" >
                        {{ field.rtd_35 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_36'" >
                        {{ field.rtd_36 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rtd_37'" >
                        {{ field.rtd_37 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'dpl_1'" >
                        {{ field.dpl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'dpl_1'" >
                        {{  parseFloat(((field.dpl_1 /1)*0.0230)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'dpl_2'" >
                        {{ field.dpl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'dpl_2'" >
                        {{  parseFloat(((field.dpl_2 /1)*0.0206)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'dpl_3'" >
                        {{ field.dpl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'dpl_3'" >
                        {{  parseFloat(((field.dpl_3 /1)*0.0143)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'dpl_4'" >
                        {{ field.dpl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'dpl_4'" >
                        {{  parseFloat(((field.dpl_4 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'dpl_5'" >
                        {{ field.dpl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'dpl_5'" >
                        {{  parseFloat(((field.dpl_5 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'dpl_6'" >
                        {{ field.dpl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'dpl_6'" >
                        {{  parseFloat(((field.dpl_6 /1)*0.0287)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'dpl_7'" >
                        {{ field.dpl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'dpl_7'" >
                        {{  parseFloat(((field.dpl_7 /1)*0.0128)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'dpl_8'" >
                        {{ field.dpl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'dpl_8'" >
                        {{  parseFloat(((field.dpl_8 /1)*1.158)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_1'" >
                        {{ field.fm_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_2'" >
                        {{ field.fm_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_3'" >
                        {{ field.fm_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_4'" >
                        {{ field.fm_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_5'" >
                        {{ field.fm_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_6'" >
                        {{ field.fm_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_7'" >
                        {{ field.fm_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_8'" >
                        {{ field.fm_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_9'" >
                        {{ field.fm_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_10'" >
                        {{ field.fm_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_11'" >
                        {{ field.fm_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_12'" >
                        {{ field.fm_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_13'" >
                        {{ field.fm_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_14'" >
                        {{ field.fm_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_15'" >
                        {{ field.fm_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_16'" >
                        {{ field.fm_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_17'" >
                        {{ field.fm_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_18'" >
                        {{ field.fm_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_19'" >
                        {{ field.fm_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_20'" >
                        {{ field.fm_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_21'" >
                        {{ field.fm_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_22'" >
                        {{ field.fm_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_23'" >
                        {{ field.fm_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_24'" >
                        {{ field.fm_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_25'" >
                        {{ field.fm_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_26'" >
                        {{ field.fm_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'fm_27'" >
                        {{ field.fm_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_1'" >
                        {{ field.ft_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_2'" >
                        {{ field.ft_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_3'" >
                        {{ field.ft_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_4'" >
                        {{ field.ft_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_5'" >
                        {{ field.ft_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_6'" >
                        {{ field.ft_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_7'" >
                        {{ field.ft_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_8'" >
                        {{ field.ft_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_9'" >
                        {{ field.ft_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_10'" >
                        {{ field.ft_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_11'" >
                        {{ field.ft_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_12'" >
                        {{ field.ft_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_13'" >
                        {{ field.ft_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_14'" >
                        {{ field.ft_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_15'" >
                        {{ field.ft_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_16'" >
                        {{ field.ft_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_17'" >
                        {{ field.ft_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_18'" >
                        {{ field.ft_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_19'" >
                        {{ field.ft_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_20'" >
                        {{ field.ft_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_21'" >
                        {{ field.ft_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_22'" >
                        {{ field.ft_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_23'" >
                        {{ field.ft_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_24'" >
                        {{ field.ft_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_25'" >
                        {{ field.ft_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_26'" >
                        {{ field.ft_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'ft_27'" >
                        {{ field.ft_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'pt_1'" >
                        {{ field.pt_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'pt_2'" >
                        {{ field.pt_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'pt_3'" >
                        {{ field.pt_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'pt_4'" >
                        {{ field.pt_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'pt_5'" >
                        {{ field.pt_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'vg_1'" >
                        {{ field.vg_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'vg_2'" >
                        {{ field.vg_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'vg_3'" >
                        {{ field.vg_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'st_fm1_flow'" >

                        {{ field.st_fm1_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'st_fm1_flow'" >

                        {{ field.stfm1_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'st_fm1_flow'" >

                        {{ field.stfm1_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'st_fm1_flow'" >

                        {{ field.stfm1_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[9] == 'st_fm2_flow'" >

                        {{ field.st_fm2_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'st_fm2_flow'" >

                        {{ field.stfm2_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'st_fm2_flow'" >

                        {{ field.stfm2_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'st_fm2_flow'" >

                        {{ field.stfm2_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_1'" >
                        {{ field.rdl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_1'" >
                        <span v-if="field.rdl_1 ==0.00">0.00</span>
                        <span v-else>{{  parseFloat(((field.rdl_1/1)* 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_2'" >
                        {{ field.rdl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_2'" >
                        <span v-if="field.rdl_2 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_2 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_3'" >
                        {{ field.rdl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_3'" >
                        <span v-if="field.rdl_3 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_3 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_4'" >
                        {{ field.rdl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_4'" >
                        <span v-if="field.rdl_4 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_4 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_5'" >
                        {{ field.rdl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_5'" >
                        <span v-if="field.rdl_5 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_5 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_6'" >
                        {{ field.rdl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_6'" >
                        <span v-if="field.rdl_6 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_6 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_7'" >
                        {{ field.rdl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_7'" >
                        <span v-if="field.rdl_7 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_7 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_8'" >
                        {{ field.rdl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_8'" >
                        <span v-if="field.rdl_8 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_8 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_9'" >
                        {{ field.rdl_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_9'" >
                        <span v-if="field.rdl_9 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_9 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_10'" >
                        {{ field.rdl_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_10'" >
                        <span v-if="field.rdl_10 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_10 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_11'" >
                        {{ field.rdl_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_11'" >
                        <span v-if="field.rdl_11 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_11 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_12'" >
                        {{ field.rdl_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_12'" >
                        <span v-if="field.rdl_12 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_12 / 1) * 0.061) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_13'" >
                        {{ field.rdl_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_13'" >
                        <span v-if="field.rdl_13 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_13 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_14'" >
                        {{ field.rdl_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_14'" >
                        <span v-if="field.rdl_14 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_14 / 1) * 0.179) + 2.6).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_15'" >
                        {{ field.rdl_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_15'" >
                        <span v-if="field.rdl_15 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_15 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_16'" >
                        {{ field.rdl_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_16'" >
                        <span v-if="field.rdl_16 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_16 / 1) * 0.621) + 0).toFixed(2) }}</span>


                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_17'" >
                        {{ field.rdl_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_17'" >
                        <span v-if="field.rdl_17 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_17 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_18'" >
                        {{ field.rdl_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_18'" >
                        <span v-if="field.rdl_18 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_18 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_19'" >
                        {{ field.rdl_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_19'" >
                        <span v-if="field.rdl_19 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_19 / 1) * 0.319) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_20'" >
                        {{ field.rdl_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_20'" >
                        <span v-if="field.rdl_20 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_20 / 1) * 0.126) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_21'" >
                        {{ field.rdl_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_21'" >
                        <span v-if="field.rdl_21 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_21 / 1) * 0.286) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_22'" >
                        {{ field.rdl_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_22'" >
                        <span v-if="field.rdl_22 ==0.00">0.00</span>
                        <span v-else-if="field.rdl_22 <= 44">{{ parseFloat(((field.rdl_22 / 1) * 0.51) + 9.2).toFixed(2) }}</span>
                        <span v-else>{{ parseFloat(((field.rdl_22 / 1) * 0.74) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_23'" >
                        {{ field.rdl_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_23'" >
                        <span v-if="field.rdl_23 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_23 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_24'" >
                        {{ field.rdl_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_24'" >
                        <span v-if="field.rdl_24 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_24 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_25'" >
                        {{ field.rdl_25 }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_25'" >
                        {{ field.rdl25_volume }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl_25'" >
                        {{ field.rdl25_mass }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_1'" >
                        {{ field.rtd_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_2'" >
                        {{ field.rtd_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_3'" >
                        {{ field.rtd_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_4'" >
                        {{ field.rtd_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_5'" >
                        {{ field.rtd_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_6'" >
                        {{ field.rtd_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_7'" >
                        {{ field.rtd_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_8'" >
                        {{ field.rtd_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_9'" >
                        {{ field.rtd_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_10'" >
                        {{ field.rtd_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_11'" >
                        {{ field.rtd_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_12'" >
                        {{ field.rtd_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_13'" >
                        {{ field.rtd_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_14'" >
                        {{ field.rtd_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_15'" >
                        {{ field.rtd_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_16'" >
                        {{ field.rtd_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_17'" >
                        {{ field.rtd_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_18'" >
                        {{ field.rtd_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_19'" >
                        {{ field.rtd_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_20'" >
                        {{ field.rtd_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_21'" >
                        {{ field.rtd_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_22'" >
                        {{ field.rtd_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_23'" >
                        {{ field.rtd_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_24'" >
                        {{ field.rtd_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_25'" >
                        {{ field.rtd_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_26'" >
                        {{ field.rtd_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_27'" >
                        {{ field.rtd_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_28'" >
                        {{ field.rtd_28 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_29'" >
                        {{ field.rtd_29 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_30'" >
                        {{ field.rtd_30 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_31'" >
                        {{ field.rtd_31 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_32'" >
                        {{ field.rtd_32 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_33'" >
                        {{ field.rtd_33 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_34'" >
                        {{ field.rtd_34 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_35'" >
                        {{ field.rtd_35 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_36'" >
                        {{ field.rtd_36 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rtd_37'" >
                        {{ field.rtd_37 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'dpl_1'" >
                        {{ field.dpl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'dpl_1'" >
                        {{  parseFloat(((field.dpl_1 /1)*0.0230)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'dpl_2'" >
                        {{ field.dpl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'dpl_2'" >
                        {{  parseFloat(((field.dpl_2 /1)*0.0206)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'dpl_3'" >
                        {{ field.dpl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'dpl_3'" >
                        {{  parseFloat(((field.dpl_3 /1)*0.0143)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'dpl_4'" >
                        {{ field.dpl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'dpl_4'" >
                        {{  parseFloat(((field.dpl_4 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'dpl_5'" >
                        {{ field.dpl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'dpl_5'" >
                        {{  parseFloat(((field.dpl_5 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'dpl_6'" >
                        {{ field.dpl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'dpl_6'" >
                        {{  parseFloat(((field.dpl_6 /1)*0.0287)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'dpl_7'" >
                        {{ field.dpl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'dpl_7'" >
                        {{  parseFloat(((field.dpl_7 /1)*0.0128)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'dpl_8'" >
                        {{ field.dpl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'dpl_8'" >
                        {{  parseFloat(((field.dpl_8 /1)*1.158)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_1'" >
                        {{ field.fm_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_2'" >
                        {{ field.fm_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_3'" >
                        {{ field.fm_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_4'" >
                        {{ field.fm_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_5'" >
                        {{ field.fm_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_6'" >
                        {{ field.fm_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_7'" >
                        {{ field.fm_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_8'" >
                        {{ field.fm_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_9'" >
                        {{ field.fm_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_10'" >
                        {{ field.fm_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_11'" >
                        {{ field.fm_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_12'" >
                        {{ field.fm_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_13'" >
                        {{ field.fm_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_14'" >
                        {{ field.fm_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_15'" >
                        {{ field.fm_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_16'" >
                        {{ field.fm_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_17'" >
                        {{ field.fm_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_18'" >
                        {{ field.fm_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_19'" >
                        {{ field.fm_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_20'" >
                        {{ field.fm_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_21'" >
                        {{ field.fm_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_22'" >
                        {{ field.fm_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_23'" >
                        {{ field.fm_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_24'" >
                        {{ field.fm_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_25'" >
                        {{ field.fm_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_26'" >
                        {{ field.fm_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'fm_27'" >
                        {{ field.fm_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_1'" >
                        {{ field.ft_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_2'" >
                        {{ field.ft_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_3'" >
                        {{ field.ft_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_4'" >
                        {{ field.ft_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_5'" >
                        {{ field.ft_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_6'" >
                        {{ field.ft_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_7'" >
                        {{ field.ft_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_8'" >
                        {{ field.ft_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_9'" >
                        {{ field.ft_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_10'" >
                        {{ field.ft_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_11'" >
                        {{ field.ft_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_12'" >
                        {{ field.ft_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_13'" >
                        {{ field.ft_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_14'" >
                        {{ field.ft_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_15'" >
                        {{ field.ft_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_16'" >
                        {{ field.ft_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_17'" >
                        {{ field.ft_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_18'" >
                        {{ field.ft_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_19'" >
                        {{ field.ft_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_20'" >
                        {{ field.ft_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_21'" >
                        {{ field.ft_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_22'" >
                        {{ field.ft_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_23'" >
                        {{ field.ft_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_24'" >
                        {{ field.ft_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_25'" >
                        {{ field.ft_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_26'" >
                        {{ field.ft_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'ft_27'" >
                        {{ field.ft_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'pt_1'" >
                        {{ field.pt_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'pt_2'" >
                        {{ field.pt_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'pt_3'" >
                        {{ field.pt_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'pt_4'" >
                        {{ field.pt_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'pt_5'" >
                        {{ field.pt_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'vg_1'" >
                        {{ field.vg_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'vg_2'" >
                        {{ field.vg_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'vg_3'" >
                        {{ field.vg_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'st_fm1_flow'" >

                        {{ field.st_fm1_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'st_fm1_flow'" >

                        {{ field.stfm1_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'st_fm1_flow'" >

                        {{ field.stfm1_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'st_fm1_flow'" >

                        {{ field.stfm1_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[10] == 'st_fm2_flow'" >

                        {{ field.st_fm2_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'st_fm2_flow'" >

                        {{ field.stfm2_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'st_fm2_flow'" >

                        {{ field.stfm2_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'st_fm2_flow'" >

                        {{ field.stfm2_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_1'" >
                        {{ field.rdl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_1'" >
                        <span v-if="field.rdl_1 ==0.00">0.00</span>
                        <span v-else>{{  parseFloat(((field.rdl_1/1)* 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_2'" >
                        {{ field.rdl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_2'" >
                        <span v-if="field.rdl_2 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_2 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_3'" >
                        {{ field.rdl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_3'" >
                        <span v-if="field.rdl_3 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_3 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_4'" >
                        {{ field.rdl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_4'" >
                        <span v-if="field.rdl_4 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_4 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_5'" >
                        {{ field.rdl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_5'" >
                        <span v-if="field.rdl_5 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_5 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_6'" >
                        {{ field.rdl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_6'" >
                        <span v-if="field.rdl_6 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_6 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_7'" >
                        {{ field.rdl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_7'" >
                        <span v-if="field.rdl_7 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_7 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_8'" >
                        {{ field.rdl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_8'" >
                        <span v-if="field.rdl_8 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_8 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_9'" >
                        {{ field.rdl_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_9'" >
                        <span v-if="field.rdl_9 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_9 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_10'" >
                        {{ field.rdl_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_10'" >
                        <span v-if="field.rdl_10 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_10 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_11'" >
                        {{ field.rdl_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_11'" >
                        <span v-if="field.rdl_11 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_11 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_12'" >
                        {{ field.rdl_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_12'" >
                        <span v-if="field.rdl_12 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_12 / 1) * 0.061) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_13'" >
                        {{ field.rdl_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_13'" >
                        <span v-if="field.rdl_13 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_13 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_14'" >
                        {{ field.rdl_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_14'" >
                        <span v-if="field.rdl_14 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_14 / 1) * 0.179) + 2.6).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_15'" >
                        {{ field.rdl_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_15'" >
                        <span v-if="field.rdl_15 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_15 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_16'" >
                        {{ field.rdl_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_16'" >
                        <span v-if="field.rdl_16 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_16 / 1) * 0.621) + 0).toFixed(2) }}</span>


                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_17'" >
                        {{ field.rdl_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_17'" >
                        <span v-if="field.rdl_17 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_17 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_18'" >
                        {{ field.rdl_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_18'" >
                        <span v-if="field.rdl_18 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_18 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_19'" >
                        {{ field.rdl_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_19'" >
                        <span v-if="field.rdl_19 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_19 / 1) * 0.319) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_20'" >
                        {{ field.rdl_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_20'" >
                        <span v-if="field.rdl_20 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_20 / 1) * 0.126) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_21'" >
                        {{ field.rdl_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_21'" >
                        <span v-if="field.rdl_21 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_21 / 1) * 0.286) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_22'" >
                        {{ field.rdl_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_22'" >
                        <span v-if="field.rdl_22 ==0.00">0.00</span>
                        <span v-else-if="field.rdl_22 <= 44">{{ parseFloat(((field.rdl_22 / 1) * 0.51) + 9.2).toFixed(2) }}</span>
                        <span v-else>{{ parseFloat(((field.rdl_22 / 1) * 0.74) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_23'" >
                        {{ field.rdl_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_23'" >
                        <span v-if="field.rdl_23 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_23 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_24'" >
                        {{ field.rdl_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_24'" >
                        <span v-if="field.rdl_24 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_24 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_25'" >
                        {{ field.rdl_25 }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_25'" >
                        {{ field.rdl25_volume }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl_25'" >
                        {{ field.rdl25_mass }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_1'" >
                        {{ field.rtd_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_2'" >
                        {{ field.rtd_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_3'" >
                        {{ field.rtd_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_4'" >
                        {{ field.rtd_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_5'" >
                        {{ field.rtd_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_6'" >
                        {{ field.rtd_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_7'" >
                        {{ field.rtd_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_8'" >
                        {{ field.rtd_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_9'" >
                        {{ field.rtd_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_10'" >
                        {{ field.rtd_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_11'" >
                        {{ field.rtd_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_12'" >
                        {{ field.rtd_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_13'" >
                        {{ field.rtd_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_14'" >
                        {{ field.rtd_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_15'" >
                        {{ field.rtd_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_16'" >
                        {{ field.rtd_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_17'" >
                        {{ field.rtd_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_18'" >
                        {{ field.rtd_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_19'" >
                        {{ field.rtd_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_20'" >
                        {{ field.rtd_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_21'" >
                        {{ field.rtd_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_22'" >
                        {{ field.rtd_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_23'" >
                        {{ field.rtd_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_24'" >
                        {{ field.rtd_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_25'" >
                        {{ field.rtd_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_26'" >
                        {{ field.rtd_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_27'" >
                        {{ field.rtd_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_28'" >
                        {{ field.rtd_28 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_29'" >
                        {{ field.rtd_29 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_30'" >
                        {{ field.rtd_30 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_31'" >
                        {{ field.rtd_31 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_32'" >
                        {{ field.rtd_32 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_33'" >
                        {{ field.rtd_33 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_34'" >
                        {{ field.rtd_34 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_35'" >
                        {{ field.rtd_35 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_36'" >
                        {{ field.rtd_36 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rtd_37'" >
                        {{ field.rtd_37 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'dpl_1'" >
                        {{ field.dpl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'dpl_1'" >
                        {{  parseFloat(((field.dpl_1 /1)*0.0230)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'dpl_2'" >
                        {{ field.dpl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'dpl_2'" >
                        {{  parseFloat(((field.dpl_2 /1)*0.0206)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'dpl_3'" >
                        {{ field.dpl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'dpl_3'" >
                        {{  parseFloat(((field.dpl_3 /1)*0.0143)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'dpl_4'" >
                        {{ field.dpl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'dpl_4'" >
                        {{  parseFloat(((field.dpl_4 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'dpl_5'" >
                        {{ field.dpl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'dpl_5'" >
                        {{  parseFloat(((field.dpl_5 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'dpl_6'" >
                        {{ field.dpl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'dpl_6'" >
                        {{  parseFloat(((field.dpl_6 /1)*0.0287)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'dpl_7'" >
                        {{ field.dpl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'dpl_7'" >
                        {{  parseFloat(((field.dpl_7 /1)*0.0128)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'dpl_8'" >
                        {{ field.dpl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'dpl_8'" >
                        {{  parseFloat(((field.dpl_8 /1)*1.158)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_1'" >
                        {{ field.fm_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_2'" >
                        {{ field.fm_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_3'" >
                        {{ field.fm_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_4'" >
                        {{ field.fm_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_5'" >
                        {{ field.fm_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_6'" >
                        {{ field.fm_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_7'" >
                        {{ field.fm_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_8'" >
                        {{ field.fm_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_9'" >
                        {{ field.fm_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_10'" >
                        {{ field.fm_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_11'" >
                        {{ field.fm_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_12'" >
                        {{ field.fm_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_13'" >
                        {{ field.fm_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_14'" >
                        {{ field.fm_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_15'" >
                        {{ field.fm_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_16'" >
                        {{ field.fm_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_17'" >
                        {{ field.fm_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_18'" >
                        {{ field.fm_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_19'" >
                        {{ field.fm_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_20'" >
                        {{ field.fm_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_21'" >
                        {{ field.fm_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_22'" >
                        {{ field.fm_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_23'" >
                        {{ field.fm_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_24'" >
                        {{ field.fm_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_25'" >
                        {{ field.fm_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_26'" >
                        {{ field.fm_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'fm_27'" >
                        {{ field.fm_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_1'" >
                        {{ field.ft_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_2'" >
                        {{ field.ft_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_3'" >
                        {{ field.ft_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_4'" >
                        {{ field.ft_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_5'" >
                        {{ field.ft_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_6'" >
                        {{ field.ft_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_7'" >
                        {{ field.ft_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_8'" >
                        {{ field.ft_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_9'" >
                        {{ field.ft_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_10'" >
                        {{ field.ft_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_11'" >
                        {{ field.ft_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_12'" >
                        {{ field.ft_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_13'" >
                        {{ field.ft_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_14'" >
                        {{ field.ft_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_15'" >
                        {{ field.ft_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_16'" >
                        {{ field.ft_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_17'" >
                        {{ field.ft_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_18'" >
                        {{ field.ft_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_19'" >
                        {{ field.ft_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_20'" >
                        {{ field.ft_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_21'" >
                        {{ field.ft_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_22'" >
                        {{ field.ft_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_23'" >
                        {{ field.ft_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_24'" >
                        {{ field.ft_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_25'" >
                        {{ field.ft_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_26'" >
                        {{ field.ft_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'ft_27'" >
                        {{ field.ft_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'pt_1'" >
                        {{ field.pt_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'pt_2'" >
                        {{ field.pt_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'pt_3'" >
                        {{ field.pt_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'pt_4'" >
                        {{ field.pt_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'pt_5'" >
                        {{ field.pt_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'vg_1'" >
                        {{ field.vg_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'vg_2'" >
                        {{ field.vg_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'vg_3'" >
                        {{ field.vg_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'st_fm1_flow'" >

                        {{ field.st_fm1_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'st_fm1_flow'" >

                        {{ field.stfm1_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'st_fm1_flow'" >

                        {{ field.stfm1_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'st_fm1_flow'" >

                        {{ field.stfm1_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[11] == 'st_fm2_flow'" >

                        {{ field.st_fm2_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'st_fm2_flow'" >

                        {{ field.stfm2_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'st_fm2_flow'" >

                        {{ field.stfm2_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'st_fm2_flow'" >

                        {{ field.stfm2_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_1'" >
                        {{ field.rdl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_1'" >
                        <span v-if="field.rdl_1 ==0.00">0.00</span>
                        <span v-else>{{  parseFloat(((field.rdl_1/1)* 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_2'" >
                        {{ field.rdl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_2'" >
                        <span v-if="field.rdl_2 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_2 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_3'" >
                        {{ field.rdl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_3'" >
                        <span v-if="field.rdl_3 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_3 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_4'" >
                        {{ field.rdl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_4'" >
                        <span v-if="field.rdl_4 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_4 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_5'" >
                        {{ field.rdl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_5'" >
                        <span v-if="field.rdl_5 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_5 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_6'" >
                        {{ field.rdl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_6'" >
                        <span v-if="field.rdl_6 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_6 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_7'" >
                        {{ field.rdl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_7'" >
                        <span v-if="field.rdl_7 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_7 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_8'" >
                        {{ field.rdl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_8'" >
                        <span v-if="field.rdl_8 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_8 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_9'" >
                        {{ field.rdl_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_9'" >
                        <span v-if="field.rdl_9 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_9 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_10'" >
                        {{ field.rdl_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_10'" >
                        <span v-if="field.rdl_10 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_10 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_11'" >
                        {{ field.rdl_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_11'" >
                        <span v-if="field.rdl_11 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_11 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_12'" >
                        {{ field.rdl_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_12'" >
                        <span v-if="field.rdl_12 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_12 / 1) * 0.061) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_13'" >
                        {{ field.rdl_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_13'" >
                        <span v-if="field.rdl_13 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_13 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_14'" >
                        {{ field.rdl_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_14'" >
                        <span v-if="field.rdl_14 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_14 / 1) * 0.179) + 2.6).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_15'" >
                        {{ field.rdl_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_15'" >
                        <span v-if="field.rdl_15 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_15 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_16'" >
                        {{ field.rdl_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_16'" >
                        <span v-if="field.rdl_16 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_16 / 1) * 0.621) + 0).toFixed(2) }}</span>


                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_17'" >
                        {{ field.rdl_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_17'" >
                        <span v-if="field.rdl_17 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_17 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_18'" >
                        {{ field.rdl_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_18'" >
                        <span v-if="field.rdl_18 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_18 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_19'" >
                        {{ field.rdl_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_19'" >
                        <span v-if="field.rdl_19 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_19 / 1) * 0.319) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_20'" >
                        {{ field.rdl_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_20'" >
                        <span v-if="field.rdl_20 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_20 / 1) * 0.126) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_21'" >
                        {{ field.rdl_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_21'" >
                        <span v-if="field.rdl_21 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_21 / 1) * 0.286) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_22'" >
                        {{ field.rdl_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_22'" >
                        <span v-if="field.rdl_22 ==0.00">0.00</span>
                        <span v-else-if="field.rdl_22 <= 44">{{ parseFloat(((field.rdl_22 / 1) * 0.51) + 9.2).toFixed(2) }}</span>
                        <span v-else>{{ parseFloat(((field.rdl_22 / 1) * 0.74) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_23'" >
                        {{ field.rdl_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_23'" >
                        <span v-if="field.rdl_23 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_23 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_24'" >
                        {{ field.rdl_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_24'" >
                        <span v-if="field.rdl_24 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_24 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_25'" >
                        {{ field.rdl_25 }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_25'" >
                        {{ field.rdl25_volume }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl_25'" >
                        {{ field.rdl25_mass }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_1'" >
                        {{ field.rtd_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_2'" >
                        {{ field.rtd_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_3'" >
                        {{ field.rtd_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_4'" >
                        {{ field.rtd_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_5'" >
                        {{ field.rtd_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_6'" >
                        {{ field.rtd_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_7'" >
                        {{ field.rtd_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_8'" >
                        {{ field.rtd_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_9'" >
                        {{ field.rtd_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_10'" >
                        {{ field.rtd_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_11'" >
                        {{ field.rtd_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_12'" >
                        {{ field.rtd_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_13'" >
                        {{ field.rtd_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_14'" >
                        {{ field.rtd_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_15'" >
                        {{ field.rtd_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_16'" >
                        {{ field.rtd_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_17'" >
                        {{ field.rtd_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_18'" >
                        {{ field.rtd_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_19'" >
                        {{ field.rtd_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_20'" >
                        {{ field.rtd_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_21'" >
                        {{ field.rtd_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_22'" >
                        {{ field.rtd_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_23'" >
                        {{ field.rtd_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_24'" >
                        {{ field.rtd_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_25'" >
                        {{ field.rtd_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_26'" >
                        {{ field.rtd_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_27'" >
                        {{ field.rtd_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_28'" >
                        {{ field.rtd_28 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_29'" >
                        {{ field.rtd_29 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_30'" >
                        {{ field.rtd_30 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_31'" >
                        {{ field.rtd_31 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_32'" >
                        {{ field.rtd_32 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_33'" >
                        {{ field.rtd_33 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_34'" >
                        {{ field.rtd_34 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_35'" >
                        {{ field.rtd_35 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_36'" >
                        {{ field.rtd_36 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rtd_37'" >
                        {{ field.rtd_37 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'dpl_1'" >
                        {{ field.dpl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'dpl_1'" >
                        {{  parseFloat(((field.dpl_1 /1)*0.0230)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'dpl_2'" >
                        {{ field.dpl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'dpl_2'" >
                        {{  parseFloat(((field.dpl_2 /1)*0.0206)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'dpl_3'" >
                        {{ field.dpl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'dpl_3'" >
                        {{  parseFloat(((field.dpl_3 /1)*0.0143)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'dpl_4'" >
                        {{ field.dpl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'dpl_4'" >
                        {{  parseFloat(((field.dpl_4 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'dpl_5'" >
                        {{ field.dpl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'dpl_5'" >
                        {{  parseFloat(((field.dpl_5 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'dpl_6'" >
                        {{ field.dpl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'dpl_6'" >
                        {{  parseFloat(((field.dpl_6 /1)*0.0287)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'dpl_7'" >
                        {{ field.dpl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'dpl_7'" >
                        {{  parseFloat(((field.dpl_7 /1)*0.0128)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'dpl_8'" >
                        {{ field.dpl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'dpl_8'" >
                        {{  parseFloat(((field.dpl_8 /1)*1.158)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_1'" >
                        {{ field.fm_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_2'" >
                        {{ field.fm_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_3'" >
                        {{ field.fm_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_4'" >
                        {{ field.fm_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_5'" >
                        {{ field.fm_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_6'" >
                        {{ field.fm_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_7'" >
                        {{ field.fm_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_8'" >
                        {{ field.fm_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_9'" >
                        {{ field.fm_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_10'" >
                        {{ field.fm_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_11'" >
                        {{ field.fm_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_12'" >
                        {{ field.fm_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_13'" >
                        {{ field.fm_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_14'" >
                        {{ field.fm_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_15'" >
                        {{ field.fm_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_16'" >
                        {{ field.fm_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_17'" >
                        {{ field.fm_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_18'" >
                        {{ field.fm_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_19'" >
                        {{ field.fm_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_20'" >
                        {{ field.fm_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_21'" >
                        {{ field.fm_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_22'" >
                        {{ field.fm_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_23'" >
                        {{ field.fm_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_24'" >
                        {{ field.fm_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_25'" >
                        {{ field.fm_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_26'" >
                        {{ field.fm_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'fm_27'" >
                        {{ field.fm_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_1'" >
                        {{ field.ft_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_2'" >
                        {{ field.ft_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_3'" >
                        {{ field.ft_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_4'" >
                        {{ field.ft_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_5'" >
                        {{ field.ft_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_6'" >
                        {{ field.ft_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_7'" >
                        {{ field.ft_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_8'" >
                        {{ field.ft_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_9'" >
                        {{ field.ft_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_10'" >
                        {{ field.ft_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_11'" >
                        {{ field.ft_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_12'" >
                        {{ field.ft_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_13'" >
                        {{ field.ft_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_14'" >
                        {{ field.ft_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_15'" >
                        {{ field.ft_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_16'" >
                        {{ field.ft_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_17'" >
                        {{ field.ft_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_18'" >
                        {{ field.ft_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_19'" >
                        {{ field.ft_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_20'" >
                        {{ field.ft_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_21'" >
                        {{ field.ft_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_22'" >
                        {{ field.ft_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_23'" >
                        {{ field.ft_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_24'" >
                        {{ field.ft_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_25'" >
                        {{ field.ft_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_26'" >
                        {{ field.ft_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'ft_27'" >
                        {{ field.ft_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'pt_1'" >
                        {{ field.pt_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'pt_2'" >
                        {{ field.pt_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'pt_3'" >
                        {{ field.pt_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'pt_4'" >
                        {{ field.pt_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'pt_5'" >
                        {{ field.pt_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'vg_1'" >
                        {{ field.vg_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'vg_2'" >
                        {{ field.vg_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'vg_3'" >
                        {{ field.vg_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'st_fm1_flow'" >

                        {{ field.st_fm1_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'st_fm1_flow'" >

                        {{ field.stfm1_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'st_fm1_flow'" >

                        {{ field.stfm1_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'st_fm1_flow'" >

                        {{ field.stfm1_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[12] == 'st_fm2_flow'" >

                        {{ field.st_fm2_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'st_fm2_flow'" >

                        {{ field.stfm2_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'st_fm2_flow'" >

                        {{ field.stfm2_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'st_fm2_flow'" >

                        {{ field.stfm2_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_1'" >
                        {{ field.rdl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_1'" >
                        <span v-if="field.rdl_1 ==0.00">0.00</span>
                        <span v-else>{{  parseFloat(((field.rdl_1/1)* 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_2'" >
                        {{ field.rdl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_2'" >
                        <span v-if="field.rdl_2 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_2 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_3'" >
                        {{ field.rdl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_3'" >
                        <span v-if="field.rdl_3 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_3 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_4'" >
                        {{ field.rdl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_4'" >
                        <span v-if="field.rdl_4 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_4 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_5'" >
                        {{ field.rdl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_5'" >
                        <span v-if="field.rdl_5 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_5 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_6'" >
                        {{ field.rdl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_6'" >
                        <span v-if="field.rdl_6 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_6 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_7'" >
                        {{ field.rdl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_7'" >
                        <span v-if="field.rdl_7 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_7 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_8'" >
                        {{ field.rdl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_8'" >
                        <span v-if="field.rdl_8 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_8 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_9'" >
                        {{ field.rdl_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_9'" >
                        <span v-if="field.rdl_9 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_9 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_10'" >
                        {{ field.rdl_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_10'" >
                        <span v-if="field.rdl_10 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_10 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_11'" >
                        {{ field.rdl_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_11'" >
                        <span v-if="field.rdl_11 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_11 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_12'" >
                        {{ field.rdl_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_12'" >
                        <span v-if="field.rdl_12 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_12 / 1) * 0.061) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_13'" >
                        {{ field.rdl_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_13'" >
                        <span v-if="field.rdl_13 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_13 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_14'" >
                        {{ field.rdl_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_14'" >
                        <span v-if="field.rdl_14 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_14 / 1) * 0.179) + 2.6).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_15'" >
                        {{ field.rdl_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_15'" >
                        <span v-if="field.rdl_15 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_15 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_16'" >
                        {{ field.rdl_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_16'" >
                        <span v-if="field.rdl_16 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_16 / 1) * 0.621) + 0).toFixed(2) }}</span>


                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_17'" >
                        {{ field.rdl_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_17'" >
                        <span v-if="field.rdl_17 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_17 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_18'" >
                        {{ field.rdl_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_18'" >
                        <span v-if="field.rdl_18 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_18 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_19'" >
                        {{ field.rdl_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_19'" >
                        <span v-if="field.rdl_19 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_19 / 1) * 0.319) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_20'" >
                        {{ field.rdl_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_20'" >
                        <span v-if="field.rdl_20 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_20 / 1) * 0.126) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_21'" >
                        {{ field.rdl_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_21'" >
                        <span v-if="field.rdl_21 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_21 / 1) * 0.286) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_22'" >
                        {{ field.rdl_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_22'" >
                        <span v-if="field.rdl_22 ==0.00">0.00</span>
                        <span v-else-if="field.rdl_22 <= 44">{{ parseFloat(((field.rdl_22 / 1) * 0.51) + 9.2).toFixed(2) }}</span>
                        <span v-else>{{ parseFloat(((field.rdl_22 / 1) * 0.74) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_23'" >
                        {{ field.rdl_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_23'" >
                        <span v-if="field.rdl_23 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_23 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_24'" >
                        {{ field.rdl_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_24'" >
                        <span v-if="field.rdl_24 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_24 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_25'" >
                        {{ field.rdl_25 }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_25'" >
                        {{ field.rdl25_volume }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl_25'" >
                        {{ field.rdl25_mass }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_1'" >
                        {{ field.rtd_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_2'" >
                        {{ field.rtd_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_3'" >
                        {{ field.rtd_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_4'" >
                        {{ field.rtd_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_5'" >
                        {{ field.rtd_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_6'" >
                        {{ field.rtd_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_7'" >
                        {{ field.rtd_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_8'" >
                        {{ field.rtd_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_9'" >
                        {{ field.rtd_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_10'" >
                        {{ field.rtd_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_11'" >
                        {{ field.rtd_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_12'" >
                        {{ field.rtd_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_13'" >
                        {{ field.rtd_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_14'" >
                        {{ field.rtd_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_15'" >
                        {{ field.rtd_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_16'" >
                        {{ field.rtd_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_17'" >
                        {{ field.rtd_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_18'" >
                        {{ field.rtd_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_19'" >
                        {{ field.rtd_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_20'" >
                        {{ field.rtd_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_21'" >
                        {{ field.rtd_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_22'" >
                        {{ field.rtd_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_23'" >
                        {{ field.rtd_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_24'" >
                        {{ field.rtd_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_25'" >
                        {{ field.rtd_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_26'" >
                        {{ field.rtd_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_27'" >
                        {{ field.rtd_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_28'" >
                        {{ field.rtd_28 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_29'" >
                        {{ field.rtd_29 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_30'" >
                        {{ field.rtd_30 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_31'" >
                        {{ field.rtd_31 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_32'" >
                        {{ field.rtd_32 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_33'" >
                        {{ field.rtd_33 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_34'" >
                        {{ field.rtd_34 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_35'" >
                        {{ field.rtd_35 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_36'" >
                        {{ field.rtd_36 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rtd_37'" >
                        {{ field.rtd_37 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'dpl_1'" >
                        {{ field.dpl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'dpl_1'" >
                        {{  parseFloat(((field.dpl_1 /1)*0.0230)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'dpl_2'" >
                        {{ field.dpl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'dpl_2'" >
                        {{  parseFloat(((field.dpl_2 /1)*0.0206)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'dpl_3'" >
                        {{ field.dpl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'dpl_3'" >
                        {{  parseFloat(((field.dpl_3 /1)*0.0143)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'dpl_4'" >
                        {{ field.dpl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'dpl_4'" >
                        {{  parseFloat(((field.dpl_4 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'dpl_5'" >
                        {{ field.dpl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'dpl_5'" >
                        {{  parseFloat(((field.dpl_5 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'dpl_6'" >
                        {{ field.dpl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'dpl_6'" >
                        {{  parseFloat(((field.dpl_6 /1)*0.0287)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'dpl_7'" >
                        {{ field.dpl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'dpl_7'" >
                        {{  parseFloat(((field.dpl_7 /1)*0.0128)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'dpl_8'" >
                        {{ field.dpl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'dpl_8'" >
                        {{  parseFloat(((field.dpl_8 /1)*1.158)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_1'" >
                        {{ field.fm_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_2'" >
                        {{ field.fm_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_3'" >
                        {{ field.fm_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_4'" >
                        {{ field.fm_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_5'" >
                        {{ field.fm_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_6'" >
                        {{ field.fm_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_7'" >
                        {{ field.fm_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_8'" >
                        {{ field.fm_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_9'" >
                        {{ field.fm_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_10'" >
                        {{ field.fm_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_11'" >
                        {{ field.fm_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_12'" >
                        {{ field.fm_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_13'" >
                        {{ field.fm_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_14'" >
                        {{ field.fm_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_15'" >
                        {{ field.fm_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_16'" >
                        {{ field.fm_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_17'" >
                        {{ field.fm_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_18'" >
                        {{ field.fm_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_19'" >
                        {{ field.fm_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_20'" >
                        {{ field.fm_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_21'" >
                        {{ field.fm_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_22'" >
                        {{ field.fm_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_23'" >
                        {{ field.fm_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_24'" >
                        {{ field.fm_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_25'" >
                        {{ field.fm_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_26'" >
                        {{ field.fm_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'fm_27'" >
                        {{ field.fm_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_1'" >
                        {{ field.ft_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_2'" >
                        {{ field.ft_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_3'" >
                        {{ field.ft_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_4'" >
                        {{ field.ft_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_5'" >
                        {{ field.ft_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_6'" >
                        {{ field.ft_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_7'" >
                        {{ field.ft_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_8'" >
                        {{ field.ft_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_9'" >
                        {{ field.ft_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_10'" >
                        {{ field.ft_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_11'" >
                        {{ field.ft_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_12'" >
                        {{ field.ft_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_13'" >
                        {{ field.ft_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_14'" >
                        {{ field.ft_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_15'" >
                        {{ field.ft_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_16'" >
                        {{ field.ft_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_17'" >
                        {{ field.ft_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_18'" >
                        {{ field.ft_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_19'" >
                        {{ field.ft_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_20'" >
                        {{ field.ft_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_21'" >
                        {{ field.ft_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_22'" >
                        {{ field.ft_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_23'" >
                        {{ field.ft_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_24'" >
                        {{ field.ft_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_25'" >
                        {{ field.ft_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_26'" >
                        {{ field.ft_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'ft_27'" >
                        {{ field.ft_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'pt_1'" >
                        {{ field.pt_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'pt_2'" >
                        {{ field.pt_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'pt_3'" >
                        {{ field.pt_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'pt_4'" >
                        {{ field.pt_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'pt_5'" >
                        {{ field.pt_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'vg_1'" >
                        {{ field.vg_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'vg_2'" >
                        {{ field.vg_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'vg_3'" >
                        {{ field.vg_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'st_fm1_flow'" >

                        {{ field.st_fm1_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'st_fm1_flow'" >

                        {{ field.stfm1_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'st_fm1_flow'" >

                        {{ field.stfm1_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'st_fm1_flow'" >

                        {{ field.stfm1_pressure }}

                    </td>
                    <!--                    ////////////////////////-->

                    <td style="border:1px solid black;" v-if="val_1[13] == 'st_fm2_flow'" >

                        {{ field.st_fm2_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'st_fm2_flow'" >

                        {{ field.stfm2_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'st_fm2_flow'" >

                        {{ field.stfm2_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'st_fm2_flow'" >

                        {{ field.stfm2_pressure }}

                    </td>
                    <!--                    ////////////////////////-->

                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_1'" >
                        {{ field.rdl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_1'" >
                        <span v-if="field.rdl_1 ==0.00">0.00</span>
                        <span v-else>{{  parseFloat(((field.rdl_1/1)* 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_2'" >
                        {{ field.rdl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_2'" >
                        <span v-if="field.rdl_2 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_2 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_3'" >
                        {{ field.rdl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_3'" >
                        <span v-if="field.rdl_3 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_3 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_4'" >
                        {{ field.rdl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_4'" >
                        <span v-if="field.rdl_4 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_4 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_5'" >
                        {{ field.rdl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_5'" >
                        <span v-if="field.rdl_5 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_5 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_6'" >
                        {{ field.rdl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_6'" >
                        <span v-if="field.rdl_6 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_6 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_7'" >
                        {{ field.rdl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_7'" >
                        <span v-if="field.rdl_7 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_7 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_8'" >
                        {{ field.rdl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_8'" >
                        <span v-if="field.rdl_8 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_8 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_9'" >
                        {{ field.rdl_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_9'" >
                        <span v-if="field.rdl_9 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_9 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_10'" >
                        {{ field.rdl_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_10'" >
                        <span v-if="field.rdl_10 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_10 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_11'" >
                        {{ field.rdl_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_11'" >
                        <span v-if="field.rdl_11 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_11 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_12'" >
                        {{ field.rdl_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_12'" >
                        <span v-if="field.rdl_12 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_12 / 1) * 0.061) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_13'" >
                        {{ field.rdl_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_13'" >
                        <span v-if="field.rdl_13 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_13 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_14'" >
                        {{ field.rdl_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_14'" >
                        <span v-if="field.rdl_14 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_14 / 1) * 0.179) + 2.6).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_15'" >
                        {{ field.rdl_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_15'" >
                        <span v-if="field.rdl_15 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_15 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_16'" >
                        {{ field.rdl_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_16'" >
                        <span v-if="field.rdl_16 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_16 / 1) * 0.621) + 0).toFixed(2) }}</span>


                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_17'" >
                        {{ field.rdl_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_17'" >
                        <span v-if="field.rdl_17 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_17 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_18'" >
                        {{ field.rdl_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_18'" >
                        <span v-if="field.rdl_18 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_18 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_19'" >
                        {{ field.rdl_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_19'" >
                        <span v-if="field.rdl_19 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_19 / 1) * 0.319) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_20'" >
                        {{ field.rdl_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_20'" >
                        <span v-if="field.rdl_20 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_20 / 1) * 0.126) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_21'" >
                        {{ field.rdl_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_21'" >
                        <span v-if="field.rdl_21 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_21 / 1) * 0.286) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_22'" >
                        {{ field.rdl_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_22'" >
                        <span v-if="field.rdl_22 ==0.00">0.00</span>
                        <span v-else-if="field.rdl_22 <= 44">{{ parseFloat(((field.rdl_22 / 1) * 0.51) + 9.2).toFixed(2) }}</span>
                        <span v-else>{{ parseFloat(((field.rdl_22 / 1) * 0.74) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_23'" >
                        {{ field.rdl_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_23'" >
                        <span v-if="field.rdl_23 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_23 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_24'" >
                        {{ field.rdl_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_24'" >
                        <span v-if="field.rdl_24 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_24 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_25'" >
                        {{ field.rdl_25 }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_25'" >
                        {{ field.rdl25_volume }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl_25'" >
                        {{ field.rdl25_mass }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_1'" >
                        {{ field.rtd_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_2'" >
                        {{ field.rtd_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_3'" >
                        {{ field.rtd_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_4'" >
                        {{ field.rtd_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_5'" >
                        {{ field.rtd_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_6'" >
                        {{ field.rtd_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_7'" >
                        {{ field.rtd_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_8'" >
                        {{ field.rtd_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_9'" >
                        {{ field.rtd_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_10'" >
                        {{ field.rtd_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_11'" >
                        {{ field.rtd_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_12'" >
                        {{ field.rtd_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_13'" >
                        {{ field.rtd_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_14'" >
                        {{ field.rtd_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_15'" >
                        {{ field.rtd_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_16'" >
                        {{ field.rtd_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_17'" >
                        {{ field.rtd_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_18'" >
                        {{ field.rtd_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_19'" >
                        {{ field.rtd_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_20'" >
                        {{ field.rtd_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_21'" >
                        {{ field.rtd_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_22'" >
                        {{ field.rtd_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_23'" >
                        {{ field.rtd_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_24'" >
                        {{ field.rtd_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_25'" >
                        {{ field.rtd_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_26'" >
                        {{ field.rtd_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_27'" >
                        {{ field.rtd_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_28'" >
                        {{ field.rtd_28 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_29'" >
                        {{ field.rtd_29 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_30'" >
                        {{ field.rtd_30 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_31'" >
                        {{ field.rtd_31 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_32'" >
                        {{ field.rtd_32 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_33'" >
                        {{ field.rtd_33 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_34'" >
                        {{ field.rtd_34 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_35'" >
                        {{ field.rtd_35 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_36'" >
                        {{ field.rtd_36 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rtd_37'" >
                        {{ field.rtd_37 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'dpl_1'" >
                        {{ field.dpl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'dpl_1'" >
                        {{  parseFloat(((field.dpl_1 /1)*0.0230)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'dpl_2'" >
                        {{ field.dpl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'dpl_2'" >
                        {{  parseFloat(((field.dpl_2 /1)*0.0206)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'dpl_3'" >
                        {{ field.dpl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'dpl_3'" >
                        {{  parseFloat(((field.dpl_3 /1)*0.0143)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'dpl_4'" >
                        {{ field.dpl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'dpl_4'" >
                        {{  parseFloat(((field.dpl_4 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'dpl_5'" >
                        {{ field.dpl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'dpl_5'" >
                        {{  parseFloat(((field.dpl_5 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'dpl_6'" >
                        {{ field.dpl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'dpl_6'" >
                        {{  parseFloat(((field.dpl_6 /1)*0.0287)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'dpl_7'" >
                        {{ field.dpl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'dpl_7'" >
                        {{  parseFloat(((field.dpl_7 /1)*0.0128)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'dpl_8'" >
                        {{ field.dpl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'dpl_8'" >
                        {{  parseFloat(((field.dpl_8 /1)*1.158)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_1'" >
                        {{ field.fm_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_2'" >
                        {{ field.fm_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_3'" >
                        {{ field.fm_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_4'" >
                        {{ field.fm_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_5'" >
                        {{ field.fm_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_6'" >
                        {{ field.fm_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_7'" >
                        {{ field.fm_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_8'" >
                        {{ field.fm_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_9'" >
                        {{ field.fm_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_10'" >
                        {{ field.fm_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_11'" >
                        {{ field.fm_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_12'" >
                        {{ field.fm_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_13'" >
                        {{ field.fm_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_14'" >
                        {{ field.fm_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_15'" >
                        {{ field.fm_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_16'" >
                        {{ field.fm_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_17'" >
                        {{ field.fm_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_18'" >
                        {{ field.fm_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_19'" >
                        {{ field.fm_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_20'" >
                        {{ field.fm_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_21'" >
                        {{ field.fm_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_22'" >
                        {{ field.fm_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_23'" >
                        {{ field.fm_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_24'" >
                        {{ field.fm_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_25'" >
                        {{ field.fm_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_26'" >
                        {{ field.fm_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'fm_27'" >
                        {{ field.fm_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_1'" >
                        {{ field.ft_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_2'" >
                        {{ field.ft_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_3'" >
                        {{ field.ft_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_4'" >
                        {{ field.ft_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_5'" >
                        {{ field.ft_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_6'" >
                        {{ field.ft_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_7'" >
                        {{ field.ft_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_8'" >
                        {{ field.ft_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_9'" >
                        {{ field.ft_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_10'" >
                        {{ field.ft_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_11'" >
                        {{ field.ft_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_12'" >
                        {{ field.ft_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_13'" >
                        {{ field.ft_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_14'" >
                        {{ field.ft_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_15'" >
                        {{ field.ft_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_16'" >
                        {{ field.ft_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_17'" >
                        {{ field.ft_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_18'" >
                        {{ field.ft_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_19'" >
                        {{ field.ft_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_20'" >
                        {{ field.ft_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_21'" >
                        {{ field.ft_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_22'" >
                        {{ field.ft_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_23'" >
                        {{ field.ft_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_24'" >
                        {{ field.ft_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_25'" >
                        {{ field.ft_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_26'" >
                        {{ field.ft_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'ft_27'" >
                        {{ field.ft_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'pt_1'" >
                        {{ field.pt_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'pt_2'" >
                        {{ field.pt_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'pt_3'" >
                        {{ field.pt_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'pt_4'" >
                        {{ field.pt_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'pt_5'" >
                        {{ field.pt_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'vg_1'" >
                        {{ field.vg_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'vg_2'" >
                        {{ field.vg_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'vg_3'" >
                        {{ field.vg_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'st_fm1_flow'" >

                        {{ field.st_fm1_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'st_fm1_flow'" >

                        {{ field.stfm1_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'st_fm1_flow'" >

                        {{ field.stfm1_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'st_fm1_flow'" >

                        {{ field.stfm1_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[14] == 'st_fm2_flow'" >

                        {{ field.st_fm2_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'st_fm2_flow'" >

                        {{ field.stfm2_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'st_fm2_flow'" >

                        {{ field.stfm2_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'st_fm2_flow'" >

                        {{ field.stfm2_pressure }}

                    </td>
                    <!--                    ////////////////////////-->
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_1'" >
                        {{ field.rdl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_1'" >
                        <span v-if="field.rdl_1 ==0.00">0.00</span>
                        <span v-else>{{  parseFloat(((field.rdl_1/1)* 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_2'" >
                        {{ field.rdl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_2'" >
                        <span v-if="field.rdl_2 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_2 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_3'" >
                        {{ field.rdl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_3'" >
                        <span v-if="field.rdl_3 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_3 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_4'" >
                        {{ field.rdl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_4'" >
                        <span v-if="field.rdl_4 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_4 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_5'" >
                        {{ field.rdl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_5'" >
                        <span v-if="field.rdl_5 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_5 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_6'" >
                        {{ field.rdl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_6'" >
                        <span v-if="field.rdl_6 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_6 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_7'" >
                        {{ field.rdl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_7'" >
                        <span v-if="field.rdl_7 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_7 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_8'" >
                        {{ field.rdl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_8'" >
                        <span v-if="field.rdl_8 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_8 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_9'" >
                        {{ field.rdl_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_9'" >
                        <span v-if="field.rdl_9 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_9 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_10'" >
                        {{ field.rdl_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_10'" >
                        <span v-if="field.rdl_10 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_10 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_11'" >
                        {{ field.rdl_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_11'" >
                        <span v-if="field.rdl_11 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_11 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_12'" >
                        {{ field.rdl_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_12'" >
                        <span v-if="field.rdl_12 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_12 / 1) * 0.061) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_13'" >
                        {{ field.rdl_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_13'" >
                        <span v-if="field.rdl_13 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_13 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_14'" >
                        {{ field.rdl_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_14'" >
                        <span v-if="field.rdl_14 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_14 / 1) * 0.179) + 2.6).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_15'" >
                        {{ field.rdl_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_15'" >
                        <span v-if="field.rdl_15 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_15 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_16'" >
                        {{ field.rdl_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_16'" >
                        <span v-if="field.rdl_16 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_16 / 1) * 0.621) + 0).toFixed(2) }}</span>


                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_17'" >
                        {{ field.rdl_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_17'" >
                        <span v-if="field.rdl_17 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_17 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_18'" >
                        {{ field.rdl_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_18'" >
                        <span v-if="field.rdl_18 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_18 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_19'" >
                        {{ field.rdl_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_19'" >
                        <span v-if="field.rdl_19 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_19 / 1) * 0.319) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_20'" >
                        {{ field.rdl_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_20'" >
                        <span v-if="field.rdl_20 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_20 / 1) * 0.126) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_21'" >
                        {{ field.rdl_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_21'" >
                        <span v-if="field.rdl_21 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_21 / 1) * 0.286) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_22'" >
                        {{ field.rdl_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_22'" >
                        <span v-if="field.rdl_22 ==0.00">0.00</span>
                        <span v-else-if="field.rdl_22 <= 44">{{ parseFloat(((field.rdl_22 / 1) * 0.51) + 9.2).toFixed(2) }}</span>
                        <span v-else>{{ parseFloat(((field.rdl_22 / 1) * 0.74) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_23'" >
                        {{ field.rdl_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_23'" >
                        <span v-if="field.rdl_23 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_23 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_24'" >
                        {{ field.rdl_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_24'" >
                        <span v-if="field.rdl_24 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_24 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_25'" >
                        {{ field.rdl_25 }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_25'" >
                        {{ field.rdl25_volume }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl_25'" >
                        {{ field.rdl25_mass }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_1'" >
                        {{ field.rtd_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_2'" >
                        {{ field.rtd_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_3'" >
                        {{ field.rtd_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_4'" >
                        {{ field.rtd_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_5'" >
                        {{ field.rtd_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_6'" >
                        {{ field.rtd_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_7'" >
                        {{ field.rtd_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_8'" >
                        {{ field.rtd_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_9'" >
                        {{ field.rtd_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_10'" >
                        {{ field.rtd_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_11'" >
                        {{ field.rtd_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_12'" >
                        {{ field.rtd_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_13'" >
                        {{ field.rtd_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_14'" >
                        {{ field.rtd_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_15'" >
                        {{ field.rtd_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_16'" >
                        {{ field.rtd_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_17'" >
                        {{ field.rtd_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_18'" >
                        {{ field.rtd_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_19'" >
                        {{ field.rtd_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_20'" >
                        {{ field.rtd_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_21'" >
                        {{ field.rtd_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_22'" >
                        {{ field.rtd_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_23'" >
                        {{ field.rtd_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_24'" >
                        {{ field.rtd_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_25'" >
                        {{ field.rtd_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_26'" >
                        {{ field.rtd_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_27'" >
                        {{ field.rtd_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_28'" >
                        {{ field.rtd_28 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_29'" >
                        {{ field.rtd_29 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_30'" >
                        {{ field.rtd_30 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_31'" >
                        {{ field.rtd_31 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_32'" >
                        {{ field.rtd_32 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_33'" >
                        {{ field.rtd_33 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_34'" >
                        {{ field.rtd_34 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_35'" >
                        {{ field.rtd_35 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_36'" >
                        {{ field.rtd_36 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rtd_37'" >
                        {{ field.rtd_37 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'dpl_1'" >
                        {{ field.dpl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'dpl_1'" >
                        {{  parseFloat(((field.dpl_1 /1)*0.0230)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'dpl_2'" >
                        {{ field.dpl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'dpl_2'" >
                        {{  parseFloat(((field.dpl_2 /1)*0.0206)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'dpl_3'" >
                        {{ field.dpl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'dpl_3'" >
                        {{  parseFloat(((field.dpl_3 /1)*0.0143)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'dpl_4'" >
                        {{ field.dpl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'dpl_4'" >
                        {{  parseFloat(((field.dpl_4 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'dpl_5'" >
                        {{ field.dpl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'dpl_5'" >
                        {{  parseFloat(((field.dpl_5 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'dpl_6'" >
                        {{ field.dpl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'dpl_6'" >
                        {{  parseFloat(((field.dpl_6 /1)*0.0287)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'dpl_7'" >
                        {{ field.dpl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'dpl_7'" >
                        {{  parseFloat(((field.dpl_7 /1)*0.0128)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'dpl_8'" >
                        {{ field.dpl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'dpl_8'" >
                        {{  parseFloat(((field.dpl_8 /1)*1.158)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_1'" >
                        {{ field.fm_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_2'" >
                        {{ field.fm_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_3'" >
                        {{ field.fm_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_4'" >
                        {{ field.fm_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_5'" >
                        {{ field.fm_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_6'" >
                        {{ field.fm_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_7'" >
                        {{ field.fm_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_8'" >
                        {{ field.fm_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_9'" >
                        {{ field.fm_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_10'" >
                        {{ field.fm_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_11'" >
                        {{ field.fm_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_12'" >
                        {{ field.fm_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_13'" >
                        {{ field.fm_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_14'" >
                        {{ field.fm_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_15'" >
                        {{ field.fm_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_16'" >
                        {{ field.fm_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_17'" >
                        {{ field.fm_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_18'" >
                        {{ field.fm_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_19'" >
                        {{ field.fm_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_20'" >
                        {{ field.fm_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_21'" >
                        {{ field.fm_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_22'" >
                        {{ field.fm_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_23'" >
                        {{ field.fm_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_24'" >
                        {{ field.fm_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_25'" >
                        {{ field.fm_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_26'" >
                        {{ field.fm_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'fm_27'" >
                        {{ field.fm_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_1'" >
                        {{ field.ft_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_2'" >
                        {{ field.ft_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_3'" >
                        {{ field.ft_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_4'" >
                        {{ field.ft_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_5'" >
                        {{ field.ft_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_6'" >
                        {{ field.ft_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_7'" >
                        {{ field.ft_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_8'" >
                        {{ field.ft_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_9'" >
                        {{ field.ft_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_10'" >
                        {{ field.ft_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_11'" >
                        {{ field.ft_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_12'" >
                        {{ field.ft_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_13'" >
                        {{ field.ft_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_14'" >
                        {{ field.ft_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_15'" >
                        {{ field.ft_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_16'" >
                        {{ field.ft_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_17'" >
                        {{ field.ft_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_18'" >
                        {{ field.ft_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_19'" >
                        {{ field.ft_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_20'" >
                        {{ field.ft_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_21'" >
                        {{ field.ft_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_22'" >
                        {{ field.ft_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_23'" >
                        {{ field.ft_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_24'" >
                        {{ field.ft_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_25'" >
                        {{ field.ft_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_26'" >
                        {{ field.ft_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'ft_27'" >
                        {{ field.ft_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'pt_1'" >
                        {{ field.pt_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'pt_2'" >
                        {{ field.pt_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'pt_3'" >
                        {{ field.pt_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'pt_4'" >
                        {{ field.pt_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'pt_5'" >
                        {{ field.pt_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'vg_1'" >
                        {{ field.vg_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'vg_2'" >
                        {{ field.vg_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'vg_3'" >
                        {{ field.vg_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'st_fm1_flow'" >

                        {{ field.st_fm1_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'st_fm1_flow'" >

                        {{ field.stfm1_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'st_fm1_flow'" >

                        {{ field.stfm1_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'st_fm1_flow'" >

                        {{ field.stfm1_pressure }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'st_fm2_flow'" >

                        {{ field.st_fm2_flow }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'st_fm2_flow'" >

                        {{ field.stfm2_flow_tot }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'st_fm2_flow'" >

                        {{ field.stfm2_temp }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'st_fm2_flow'" >
                        {{ field.stfm2_pressure }}
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_1'" >
                        {{ field.rdl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_1'" >
                        <span v-if="field.rdl_1 ==0.00">0.00</span>
                        <span v-else>{{  parseFloat(((field.rdl_1/1)* 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_2'" >
                        {{ field.rdl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_2'" >
                        <span v-if="field.rdl_2 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_2 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_3'" >
                        {{ field.rdl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_3'" >
                        <span v-if="field.rdl_3 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_3 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_4'" >
                        {{ field.rdl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_4'" >
                        <span v-if="field.rdl_4 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_4 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_5'" >
                        {{ field.rdl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_5'" >
                        <span v-if="field.rdl_5 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_5 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_6'" >
                        {{ field.rdl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_6'" >
                        <span v-if="field.rdl_6 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_6 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_7'" >
                        {{ field.rdl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_7'" >
                        <span v-if="field.rdl_7 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_7 / 1) * 0.064) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_8'" >
                        {{ field.rdl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_8'" >
                        <span v-if="field.rdl_8 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_8 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_9'" >
                        {{ field.rdl_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_9'" >
                        <span v-if="field.rdl_9 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_9 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_10'" >
                        {{ field.rdl_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_10'" >
                        <span v-if="field.rdl_10 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_10 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_11'" >
                        {{ field.rdl_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_11'" >
                        <span v-if="field.rdl_11 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_11 / 1) * 0.154) + 1.23).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_12'" >
                        {{ field.rdl_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_12'" >
                        <span v-if="field.rdl_12 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_12 / 1) * 0.061) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_13'" >
                        {{ field.rdl_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_13'" >
                        <span v-if="field.rdl_13 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_13 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_14'" >
                        {{ field.rdl_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_14'" >
                        <span v-if="field.rdl_14 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_14 / 1) * 0.179) + 2.6).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_15'" >
                        {{ field.rdl_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_15'" >
                        <span v-if="field.rdl_15 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_15 / 1) * 0.179) + 2.42).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_16'" >
                        {{ field.rdl_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_16'" >
                        <span v-if="field.rdl_16 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_16 / 1) * 0.621) + 0).toFixed(2) }}</span>


                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_17'" >
                        {{ field.rdl_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_17'" >
                        <span v-if="field.rdl_17 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_17 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_18'" >
                        {{ field.rdl_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_18'" >
                        <span v-if="field.rdl_18 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_18 / 1) * 0.621) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_19'" >
                        {{ field.rdl_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_19'" >
                        <span v-if="field.rdl_19 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_19 / 1) * 0.319) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_20'" >
                        {{ field.rdl_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_20'" >
                        <span v-if="field.rdl_20 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_20 / 1) * 0.126) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_21'" >
                        {{ field.rdl_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_21'" >
                        <span v-if="field.rdl_21 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_21 / 1) * 0.286) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_22'" >
                        {{ field.rdl_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_22'" >
                        <span v-if="field.rdl_22 ==0.00">0.00</span>
                        <span v-else-if="field.rdl_22 <= 44">{{ parseFloat(((field.rdl_22 / 1) * 0.51) + 9.2).toFixed(2) }}</span>
                        <span v-else>{{ parseFloat(((field.rdl_22 / 1) * 0.74) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_23'" >
                        {{ field.rdl_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_23'" >
                        <span v-if="field.rdl_23 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_23 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_24'" >
                        {{ field.rdl_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_24'" >
                        <span v-if="field.rdl_24 ==0.00">0.00</span>
                        <span v-else>{{ parseFloat(((field.rdl_24 / 1) * 0.154) + 0).toFixed(2) }}</span>

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_25'" >
                        {{ field.rdl_25 }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_25'" >
                        {{ field.rdl25_volume }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl_25'" >
                        {{ field.rdl25_mass }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_1'" >
                        {{ field.rtd_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_2'" >
                        {{ field.rtd_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_3'" >
                        {{ field.rtd_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_4'" >
                        {{ field.rtd_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_5'" >
                        {{ field.rtd_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_6'" >
                        {{ field.rtd_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_7'" >
                        {{ field.rtd_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_8'" >
                        {{ field.rtd_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_9'" >
                        {{ field.rtd_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_10'" >
                        {{ field.rtd_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_11'" >
                        {{ field.rtd_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_12'" >
                        {{ field.rtd_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_13'" >
                        {{ field.rtd_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_14'" >
                        {{ field.rtd_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_15'" >
                        {{ field.rtd_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_16'" >
                        {{ field.rtd_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_17'" >
                        {{ field.rtd_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_18'" >
                        {{ field.rtd_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_19'" >
                        {{ field.rtd_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_20'" >
                        {{ field.rtd_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_21'" >
                        {{ field.rtd_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_22'" >
                        {{ field.rtd_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_23'" >
                        {{ field.rtd_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_24'" >
                        {{ field.rtd_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_25'" >
                        {{ field.rtd_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_26'" >
                        {{ field.rtd_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_27'" >
                        {{ field.rtd_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_28'" >
                        {{ field.rtd_28 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_29'" >
                        {{ field.rtd_29 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_30'" >
                        {{ field.rtd_30 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_31'" >
                        {{ field.rtd_31 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_32'" >
                        {{ field.rtd_32 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_33'" >
                        {{ field.rtd_33 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_34'" >
                        {{ field.rtd_34 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_35'" >
                        {{ field.rtd_35 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_36'" >
                        {{ field.rtd_36 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rtd_37'" >
                        {{ field.rtd_37 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl_1'" >
                        {{ field.dpl_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl_1'" >
                        {{  parseFloat(((field.dpl_1 /1)*0.0230)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl_2'" >
                        {{ field.dpl_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl_2'" >
                        {{  parseFloat(((field.dpl_2 /1)*0.0206)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl_3'" >
                        {{ field.dpl_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl_3'" >
                        {{  parseFloat(((field.dpl_3 /1)*0.0143)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl_4'" >
                        {{ field.dpl_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl_4'" >
                        {{  parseFloat(((field.dpl_4 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl_5'" >
                        {{ field.dpl_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl_5'" >
                        {{  parseFloat(((field.dpl_5 /1)*0.0102)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl_6'" >
                        {{ field.dpl_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl_6'" >
                        {{  parseFloat(((field.dpl_6 /1)*0.0287)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl_7'" >
                        {{ field.dpl_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl_7'" >
                        {{  parseFloat(((field.dpl_7 /1)*0.0128)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl_8'" >
                        {{ field.dpl_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl_8'" >
                        {{  parseFloat(((field.dpl_8 /1)*1.158)+0).toFixed(2) }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_1'" >
                        {{ field.fm_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_2'" >
                        {{ field.fm_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_3'" >
                        {{ field.fm_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_4'" >
                        {{ field.fm_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_5'" >
                        {{ field.fm_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_6'" >
                        {{ field.fm_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_7'" >
                        {{ field.fm_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_8'" >
                        {{ field.fm_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_9'" >
                        {{ field.fm_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_10'" >
                        {{ field.fm_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_11'" >
                        {{ field.fm_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_12'" >
                        {{ field.fm_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_13'" >
                        {{ field.fm_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_14'" >
                        {{ field.fm_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_15'" >
                        {{ field.fm_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_16'" >
                        {{ field.fm_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_17'" >
                        {{ field.fm_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_18'" >
                        {{ field.fm_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_19'" >
                        {{ field.fm_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_20'" >
                        {{ field.fm_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_21'" >
                        {{ field.fm_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_22'" >
                        {{ field.fm_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_23'" >
                        {{ field.fm_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_24'" >
                        {{ field.fm_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_25'" >
                        {{ field.fm_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_26'" >
                        {{ field.fm_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'fm_27'" >
                        {{ field.fm_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_1'" >
                        {{ field.ft_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_2'" >
                        {{ field.ft_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_3'" >
                        {{ field.ft_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_4'" >
                        {{ field.ft_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_5'" >
                        {{ field.ft_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_6'" >
                        {{ field.ft_6 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_7'" >
                        {{ field.ft_7 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_8'" >
                        {{ field.ft_8 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_9'" >
                        {{ field.ft_9 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_10'" >
                        {{ field.ft_10 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_11'" >
                        {{ field.ft_11 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_12'" >
                        {{ field.ft_12 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_13'" >
                        {{ field.ft_13 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_14'" >
                        {{ field.ft_14 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_15'" >
                        {{ field.ft_15 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_16'" >
                        {{ field.ft_16 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_17'" >
                        {{ field.ft_17 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_18'" >
                        {{ field.ft_18 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_19'" >
                        {{ field.ft_19 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_20'" >
                        {{ field.ft_20 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_21'" >
                        {{ field.ft_21 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_22'" >
                        {{ field.ft_22 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_23'" >
                        {{ field.ft_23 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_24'" >
                        {{ field.ft_24 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_25'" >
                        {{ field.ft_25 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_26'" >
                        {{ field.ft_26 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'ft_27'" >
                        {{ field.ft_27 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'pt_1'" >
                        {{ field.pt_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'pt_2'" >
                        {{ field.pt_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'pt_3'" >
                        {{ field.pt_3 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'pt_4'" >
                        {{ field.pt_4 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'pt_5'" >
                        {{ field.pt_5 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'vg_1'" >
                        {{ field.vg_1 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'vg_2'" >
                        {{ field.vg_2 }}

                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'vg_3'" >
                        {{ field.vg_3 }}

                    </td>
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
import {Line} from 'vue-chartjs';
import moment from "moment";


export default {
    name: "PDFReport",
    data() {

        role_id:'this.$store.getters.currentUser.role'
        return {
            filter_range:'y',
            timing: 3,
            setInterval:'60',
            val_1  : [],
            startdate:'',
            enddate:'',
            select_record_option:[],
            select_record:[],
            select_db_record: '',
            db_val_1: [],db_val_2: [],db_val_3: [],db_val_4: [],db_val_5: [],db_val_6: [],db_val_7: [],db_val_8: [],db_val_9: [],db_val_10: [],db_val_11: [],
            db_val_12: [],db_val_13: [],db_val_14: [],db_val_15: [],db_val_16: [],
            disable: false,
            user_role_s: this.$store.getters.currentUser.role,

        }

    },
    mounted(){
        document.getElementById('change-row').style.marginRight = "0px";
        function myFunction(x) {
            if (x.matches) { // If media query matches
                document.querySelector('.custom-top-menu').style.display = "contents";
            } else {
                document.querySelector('.custom-top-menu').style.display = "block";
            }
        }
        var x = window.matchMedia("(max-width: 990px)")
        myFunction(x) // Call listener function at run time
        x.addListener(myFunction) // Attach listener function on state changes



    },


    beforeCreate: function() {
        document.querySelector('body').style.maxWidth = "100%";
        document.querySelector('body').style.minWidth = "100%";

        // document.getElementById("main").style.overflow = "hidden";
    },

    created() {
        // window.addEventListener('beforeunload', window.location.reload());
        this.getData();
        // document.querySelector("row").style.marginRight = "auto";


        // ready() {
        //     window.addEventListener('beforeunload',  window.location.reload());
        // },

    },
    methods: {
        tableToExcel(){
            var downloadurl;
            var dataFileType = 'data:application/vnd.ms-excel';
            var tableSelect = document.getElementById('testTable');
            var tableHTMLData = tableSelect.outerHTML.replace(/ /g, '%20');

            // Specify file name
            var name ='BioTech';
            var filename = name+'.xls';

            // Create download link element
            downloadurl = document.createElement("a");

            document.body.appendChild(downloadurl);

            if(navigator.msSaveOrOpenBlob){
                var blob = new Blob(['\ufeff', tableHTMLData], {
                    type: dataFileType
                });
                navigator.msSaveOrOpenBlob( blob, filename);
            }else{
                // Create a link to the file
                downloadurl.href = dataFileType + ',' + tableHTMLData;

                // Setting the file name
                downloadurl.download = filename;

                //triggering the function
                downloadurl.click();
            }
        },
        CheckRange(){
            if(this.val_1.length >15){
                this.val_1.pop()
                alert('You can Only Select 16 Values');
            }

        },
        abidfunction: function(){
            axios.get('api/showselectiona/'+ this.select_db_record, {headers: {'Authorization': 'Bearer ' + this.currentUser.token}})
                .then((response) => {
                    this.select_record_option = response.data.select_record
                    this.setInterval = this.select_record_option.selection_interval
                    this.timing = this.select_record_option.timing
                    this.val_1[0] = this.select_record_option.val_1
                    this.val_1[1] = this.select_record_option.val_2
                    this.val_1[2] = this.select_record_option.val_3
                    this.val_1[3] = this.select_record_option.val_4
                    this.val_1[4] = this.select_record_option.val_5
                    this.val_1[5] = this.select_record_option.val_6
                    this.val_1[6] = this.select_record_option.val_7
                    this.val_1[7] = this.select_record_option.val_8
                    this.val_1[8] = this.select_record_option.val_9
                    this.val_1[9] = this.select_record_option.val_10
                    this.val_1[10] = this.select_record_option.val_11
                    this.val_1[11] = this.select_record_option.val_12
                    this.val_1[12] = this.select_record_option.val_13
                    this.val_1[13] = this.select_record_option.val_14
                    this.val_1[14] = this.select_record_option.val_15
                    this.val_1[15] = this.select_record_option.val_16
                    console.log(this.select_record_option);
                    $('#testTable').paging({limit: 5});

                })
                .catch(err => {
                    console.log(err);
                })
        },
        getData() {
            axios.get('api/showselection/'+this.user_role_s, {headers: {'Authorization': 'Bearer ' + this.currentUser.token}})
                .then((response) => {
                    this.select_record = response.data.select_record;
                    // console.log(this.select_record[0].name)
                })
                .catch(err => {
                    console.log(err);
                })
        },

        // ExportExcel(type, fn, dl) {
        //     var elt = this.$refs.exportable_table;
        //
        //     console.log(elt);
        //     var wb = XLSX.utils.table_to_book(elt, {sheet: "worksheet",dateNF:'MM-DD-YYYY hh:mm'});
        //     var wscols = [
        //         { width: '600' },  // first column
        //
        //
        //     ];
        //     wb["!cols"] = wscols;
        //
        //     return dl ?
        //
        //         XLSX.write(wb, {bookType: type, bookSST: true, type: 'base64'}) :
        //         XLSX.writeFile(wb, fn || (('BioTech' + '.' || 'SheetJSTableExport.') + (type || 'xlsx')));
        //
        // },
        submit() {
            this.disable = true;
            axios.post('api/saveselection',[this.val_1,this.setInterval,this.timing,this.startdate,this.enddate,this.filter_range], {headers: {'Authorization': 'Bearer ' + this.currentUser.token }})
                .then((response) => {
                    this.db_val_1 = response.data.val_1
                    this.db_val_2 = response.data.get_range
                    console.log(this.db_val_2)

                })
                .catch(err => {
                    console.log(err);
                })
        },
        reloadPage() {
            window.location.reload();
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

body{
    width:100% !important;
    min-width: 100% !important;
    max-width: 100% !important;
    background-color: indianred;
}
.paging-nav {
    text-align: right;
    padding-top: 2px;
}

.paging-nav a {
    margin: auto 1px;
    text-decoration: none;
    display: inline-block;
    padding: 1px 7px;
    background: #91b9e6;
    color: white;
    border-radius: 3px;
}

.paging-nav .selected-page {
    background: #187ed5;
    font-weight: bold;
}
/*///*/
.custom-st{
    padding:10px;
    text-align:left;
    height: 29px;

}
.custom-table{

    color:white;
}
.custom-table th{
    border:2px solid black;
}
.custom-table td{
    border:2px solid black;
}
.table-style-me{
    border: 1px solid !important;

}
.table-style-me th{
    font-size: 15px;
}
.table-style-me td{
    border-left: 1px solid;
    border-right: 1px solid;
}
/*th h6{*/
/*    font-size: 0.9rem;*/
/*}*/

@media only screen and (max-width: 1840px) {
    .table-style-me td {
        padding:0px;
    }
    .custom-st{
        text-align:center;
        padding:5px;
        padding-left: 0px;
        height: fit-content;
        font-size: 9px;
    }

    .custom-padding{
        padding-bottom:5px;
    }
    .custom-padding-two{
        padding-bottom:8px;
    }
    .custom-padding-three{
        padding-bottom:7px;
    }
    .custom-padding-four{
        padding-bottom:0px;
        padding-top:2px;
    }
    .custom-input-padding{
        padding-bottom:1.8px;
    }
}
@media only screen and (min-width: 1410px)  {
    .custom-padding-four{
        padding-bottom:22px !important;
        padding-top:2px;
    }

}
@media only screen and (max-width: 1410px)  {
    .flow-padding-two{
        padding-bottom:7px !important;
    }
}
@media only screen and (max-width: 1310px)  {
    .flow-padding-three{
        padding-bottom:7px !important;
    }
}
@media only screen and (max-width: 1375px)  {
    .flow-padding{
        padding-bottom: 7.8px;
    }
}
@media only screen and (max-width: 1220px)  {
    .flow-padding{
        padding-bottom:15px !important;
    }
    .print-btn{
        left: 79% !important;
    }
}
@media only screen and (max-width: 1130px)  {
    .flow-padding-two{
        padding-bottom:15px !important;
    }
    .flow-padding-one{
        padding-bottom:20px !important;
    }
}
@media only screen and (max-width: 1080px) {
    .flow-padding-three{
        padding-bottom:15px !important;
    }
}
@media only screen and (max-width: 1037px) {

    .flow-padding-three{
        padding-bottom:19px !important;
    }
    .flow-padding-two{
        padding-bottom:20px !important;
    }
    .flow-padding{
        padding-bottom:37px !important;
    }
    .custom-padding{
        padding-bottom:5px;
    }
    .custom-padding-two{
        padding-bottom:11px !important;
    }
    .custom-padding-three{
        padding-bottom:22px;
    }
    .custom-padding-four{
        padding-bottom:52px;
    }
    .custom-input-padding{
        padding-bottom:5.5px;
    }
}
@media only screen and (max-width: 800px) {

    .table-custom-style{
        margin-left: 80px !important;
    }

}
@media only screen and (max-width: 600px) {
    .print-btn{
        left: 82% !important;
    }
}
@media only screen and (max-width: 500px) {
    .table-style-me{
        width: 83%!important;
        margin-left: 40px;
    }
}

</style>
