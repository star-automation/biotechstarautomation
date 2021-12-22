<template>
    <div className="col-md-12" style="padding: 0px;">

        <h1 style="text-align: center;padding-top: 30px;">Multi Graph{{val_1}}</h1>
        <div class="table-container col-md-10 m-auto">
            <form name="chartForm" @submit.prevent="submit">
                <table class="table table-style-me" style="display:inline-table;width:18%; text-align: center; color: white;">
                    <tr style="border: none">

                        <th colspan="3"> <h6>Pre Esterification</h6></th>
                    </tr>
                    <tr style="background-color:#4a4a4a;">
                        <th>Name</th>
                        <th>level</th>
                        <th>Temp</th>
                    </tr>
                    <tr>
                        <td>
                            Settling Tank A
                        </td>
                        <td>
                            <input value="rdl_13"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>

                        <td>
                            <input value="rtd_9"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                    <tr>
                        <td>Settling Tank B</td>
                        <td>
                            <input value="rdl_14"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_10"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Settling Tank C
                        </td>
                        <td>
                            <input value="rdl_15"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_11"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            E201
                        </td>
                        <td>
                            <input value="rdl_1"
                                   type="hidden">
                        </td>
                        <td>
                            <input value="rtd_4"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            E101
                        </td>
                        <td>
                            <input value="rdl_1"
                                   type="hidden">
                        </td>
                        <td>
                            <input value="rtd_1"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            D101A
                        </td>
                        <td>
                            <input value="rdl_1"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_2"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            D101B
                        </td>
                        <td>
                            <input value="rdl_2"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_3"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            PPRA
                        </td>
                        <td>
                            <input value="rdl_23"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_32"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            PPRB
                        </td>
                        <td>
                            <input value="rdl_24"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_33"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            GST
                        </td>
                        <td>
                            <input value="rdl_18"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_34"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            GLV
                        </td>
                        <td>
                            <input value="rdl_12"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>

                            <input value="rtd_5"
                                   v-model="val_1" type="hidden">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            GLV Evaporater
                        </td>
                        <td>
                            <input value="rdl_1"
                                   type="hidden">
                        </td>
                        <td>
                            <input value="rtd_8"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            GLV T
                        </td>
                        <td>
                            <input value="rdl_1"
                                   type="hidden">
                        </td>
                        <td>
                            <input value="rtd_5"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            GLV M
                        </td>
                        <td>
                            <input value="rdl_1"
                                   type="hidden">
                        </td>
                        <td>
                            <input value="rtd_6"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            GLV B
                        </td>
                        <td>
                            <input value="rdl_1"
                                   type="hidden">
                        </td>
                        <td>

                            <input value="rtd_7"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            D405A
                        </td>
                        <td>
                            <input value="rdl_3"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_1"
                                   type="hidden">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            D405B
                        </td>
                        <td>
                            <input value="rdl_4"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rdl_1"
                                   type="hidden">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            D405C
                        </td>
                        <td>
                            <input value="rdl_5"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rdl_1"
                                   type="hidden">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            H2SO4 Tank
                        </td>
                        <td>
                            <input value="rdl_25"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rdl_1"
                                   type="hidden">
                        </td>
                    </tr>
                    <tr>
                        <td>


                            SP1

                        </td>
                        <td>

                            <input value="rdl_20"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            SP2
                        </td>
                        <td>
                            <input value="rdl_21"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td></td>
                    </tr>
                    <tr style="background-color:#4a4a4a;">
                        <th>Name</th>
                        <th>Flow</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>
                            FM 18 (Mathanol into GST 1 and 2)
                        </td>
                        <td>
                            <input value="fm_18"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_18"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            FM 19 (Methanol into PPRA and B)
                        </td>
                        <td>

                            <input value="fm_19"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">


                        </td>
                        <td>

                            <input value="ft_19"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            FM 20 (Mathanol into GLV)

                        </td>
                        <td>
                            <input value="fm_20"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_20"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            FM 23 (Raw Material Offloading)
                        </td>
                        <td>
                            <input value="fm_23"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_23"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            FM 24 (Raw Metarial to Settling Tank)
                        </td>
                        <td>
                            <input value="fm_24"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_24"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
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
                    </tr>
                </table>
                <table class="table table-style-me" style="display:inline-table;width:18%; text-align: center; color: white;">
                    <tr style="border: none">

                        <th colspan="3"> <h6>Methanol</h6></th>
                    </tr>
                    <tr style="background-color:#4a4a4a;">
                        <th>Name</th>
                        <th>level</th>
                        <th>Temp</th>
                    </tr>
                    <tr>
                        <td>E401</td>
                        <td>
                            <input value="dpl_2"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td> <input value="rtd_17"
                                    v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>Green Vessel</td>
                        <td><input value="rdl_1"
                                   v-model="val_1" type="hidden"></td>
                        <td> <input value="rtd_19"
                                    v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>Old Green Vessel</td>
                        <td> <input value="rdl_1"
                                    v-model="val_1" type="hidden"></td>
                        <td> <input value="rtd_20"
                                    v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>Blue Vessel</td>
                        <td><input value="rdl_1"
                                   v-model="val_1" type="hidden"></td>
                        <td><input value="rtd_18"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>E601</td>
                        <td><input value="rdl_1"
                                   v-model="val_1" type="hidden"></td>
                        <td><input value="rtd_21"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>T601</td>
                        <td><input value="dpl_3"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="rdl_1"
                                   v-model="val_1" type="hidden"></td>
                    </tr>
                    <tr>
                        <td>T601 T</td>
                        <td><input value="rdl_1"
                                   v-model="val_1" type="hidden"></td>
                        <td><input value="rtd_22"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>T601 M</td>
                        <td><input value="rdl_1"
                                   type="hidden"></td>
                        <td><input value="rtd_23"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>T601 B</td>
                        <td><input value=""
                                   type="hidden"></td>
                        <td><input value="rtd_24"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>Methanol Tank 1</td>
                        <td><input value="rdl_16"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="rdl_1"
                                   v-model="val_1" type="hidden"></td>
                    </tr>
                    <tr>
                        <td>Methanol Tank 2</td>
                        <td><input value="rdl_19"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="rdl_1"
                                   v-model="val_1" type="hidden"></td>
                    </tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr style="background-color:#4a4a4a;">
                        <th>Name</th>
                        <th>Flow</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>FM 14 (D403 into T601)</td>
                        <td><input value="fm_14"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_14"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>FM 15 (T601 to D602)</td>
                        <td><input value="fm_15"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_15"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>FM 16 (T601 to Reflux)</td>
                        <td><input value="fm_16"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_16"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>FM 17 (T601 Drain)</td>
                        <td><input value="fm_17"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_17"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>FM 7 (D602to Methanol Storage Tank)</td>
                        <td><input value="fm_7"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_7"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                </table>
                <table class="table table-style-me" style="display:inline-table;width:18%; text-align: center; color: white;">
                    <tr style="border: none">

                        <th colspan="3"> <h6>Trans Esterification</h6></th>
                    </tr>
                    <tr style="background-color:#4a4a4a;">
                        <th>Name</th>
                        <th>level</th>
                        <th>Temp</th>
                    </tr>
                    <tr>
                        <td>D405 A</td>
                        <td>
                            <input value="rdl_3"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td>  <input value="rdl_1"
                                     v-model="val_1" type="hidden"></td>
                    </tr>
                    <tr>
                        <td>D405 B</td>
                        <td><input value="rdl_4"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="rdl_1"
                                   v-model="val_1" type="hidden"></td>
                    </tr>
                    <tr>
                        <td>D405 C</td>
                        <td> <input value="rdl_5"
                                    v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td> <input value="rdl_1"
                                    v-model="val_1" type="hidden"></td>
                    </tr>
                    <tr>
                        <td>Trans Reactor</td>
                        <td><input value=""
                                   type="hidden"></td>
                        <td> <input value="rtd_35"
                                    v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>C401 A</td>
                        <td><input value="rdl_6"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="rdl_1"
                                   v-model="val_1" type="hidden"></td>
                    </tr>
                    <tr>
                        <td>C401 B</td>
                        <td><input value="rdl_7"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="rdl_1"
                                   v-model="val_1" type="hidden"></td>
                    </tr>
                    <tr>
                        <td>E401</td>
                        <td><input value="dpl_2"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="rtd_17"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>Hot Water Tank</td>
                        <td><input value="rdl_1"
                                   v-model="val_1" type="hidden"></td>
                        <td><input value="rtd_12"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>D402 A</td>
                        <td><input value="rdl_8"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                        <td><input value="rtd_13"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>D402 B</td>
                        <td> <input value="rdl_9"
                                    v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td> <input value="rtd_14"
                                    v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>D402 C</td>
                        <td><input value="rdl_10"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="rtd_15"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr><td>D402 D</td>
                        <td><input value="rdl_11"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td>
                            <input value="rtd_16"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td></tr>
                    <tr><td>SP 1</td><td><input value="rdl_20"
                                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td><td> <input value="rdl_1"
                                                                                                                                             v-model="val_1" type="hidden"></td></tr>
                    <tr><td>SP 2</td><td><input value="rdl_21"
                                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td><td><input value="rdl_1"
                                                                                                                                            v-model="val_1" type="hidden"></td></tr>
                    <tr><td>SP 3</td><td><input value="rdl_22"
                                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td><td><input value="rdl_1"
                                                                                                                                            v-model="val_1" type="hidden"></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr style="background-color:#4a4a4a;">
                        <th>Name</th>
                        <th>Flow</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>FM 21 (Methanol into Trans)</td>
                        <td><input value="fm_21"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_21"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>FM 1(Trans Oil)</td>
                        <td><input value="fm_1"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_1"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>FM 2( Alkali Trans)</td>
                        <td><input value="fm_2"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_2"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>FM 3 (Trans Evaporator to NI)</td>
                        <td><input value="fm_3"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_3"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>FM 4 (Water N1)</td>
                        <td><input value="fm_4"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_4"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>FM 5 (N2 to D402)</td>
                        <td><input value="fm_5"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td> <input value="ft_5"
                                    v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>FM 6 (N3 to Slag pool)</td>
                        <td><input value="fm_6"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_6"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                </table>
                <table class="table table-style-me" style="display:inline-table;width:18%; text-align: center; color: white;">
                    <tr style="border: none">

                        <th colspan="3"> <h6>Distillation</h6></th>
                    </tr>
                    <tr style="background-color:#4a4a4a;">
                        <th>Name</th>
                        <th>level</th>
                        <th>Temp</th>
                    </tr>
                    <tr>
                        <td>D402 A</td>
                        <td>
                            <input value="rdl_8"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td> <input value="rtd_13"
                                    v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>D402 B</td>
                        <td>
                            <input value="rdl_9"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td> <input value="rtd_14"
                                    v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>D402 C</td>
                        <td> <input value="rdl_10"
                                    v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td> <input value="rtd_15"
                                    v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>D402 D</td>
                        <td><input value="rdl_11"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td> <input value="rtd_16"
                                    v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>E501</td>
                        <td><input value="rdl_1"
                                   v-model="val_1" type="hidden"></td>
                        <td><input value="rtd_25"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>D501</td>
                        <td><input value="dpl_1"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="rtd_26"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>T501</td>
                        <td><input value="dpl_6"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value=""
                                   v-model="val_1" type="hidden"></td>
                    </tr>
                    <tr>
                        <td>D503</td>
                        <td><input value="dpl_4"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value=""
                                   v-model="val_1" type="hidden"></td>
                    </tr>
                    <tr>
                        <td>T501 T</td>
                        <td><input value="rdl_1"
                                   v-model="val_1" type="hidden"></td>
                        <td><input value="rtd_27"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>T501 M</td>
                        <td><input value="rdl_1"
                                   v-model="val_1" type="hidden"></td>
                        <td><input value="rtd_28"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>T501 B</td>
                        <td><input value="rdl_1"
                                   v-model="val_1" type="hidden"></td>
                        <td><input value="rtd_29"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr><td>T502 B</td><td><input value="dpl_7"
                                                  v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td><td><input value=""
                                                                                                                                              v-model="val_1" type="hidden"></td></tr>
                    <tr><td>D504</td><td><input value="dpl_5"
                                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td><td><input value="rdl_1"
                                                                                                                                            v-model="val_1" type="hidden"></td></tr>
                    <tr><td>T504 M</td><td><input value="rdl_1"
                                                  v-model="val_1" type="hidden"></td><td><input value="rtd_30"
                                                                                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td></tr>
                    <tr><td>T502 B</td><td><input value="rdl_1"
                                                  v-model="val_1" type="hidden"></td><td><input value="rtd_31"
                                                                                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td></tr>
                    <tr><td>Bio Transfer Line</td><td><input value="rdl_1"
                                                             v-model="val_1" type="hidden"></td><td> <input value="rdl_1"
                                                                                                            v-model="val_1" type="hidden"></td></tr>
                    <tr><td> Bio Storage Tank</td><td> <input value="dpl_8"
                                                              v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td><td> <input value="rtd_36"
                                                                                                                                                           v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td></tr>
                    <tr><td>Tar Tank</td><td> <input value="rdl_1"
                                                     v-model="val_1" type="hidden"></td><td> <input value="rdl_1"
                                                                                                    v-model="val_1" type="hidden"></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr style="background-color:#4a4a4a;">
                        <th>Name</th>
                        <th>Flow</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>FM 8 (D402-D501)</td>
                        <td><input value="fm_8"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_8"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>FM 9 (D501-T501)</td>
                        <td><input value="fm_9"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_9"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>FM 10 (T501-T502)</td>
                        <td><input value="fm_10"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_10"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>FM 12 (Recycle to D405 Line)</td>
                        <td><input value="fm_12"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_12"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>FM 11 (Tar Transfer)</td>
                        <td><input value="fm_11"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_11"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>FM 13 (Biodiesel to Storage)</td>
                        <td><input value="fm_13"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_13"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>FM 22 (Biodiesel Storage to Truck)</td>
                        <td><input value="fm_22"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_22"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                </table>
                <table class="table table-style-me" style="display:inline-table;width:18%; text-align: center; color: white;">
                    <tr style="border: none">

                        <th colspan="3"> <h6>Utilities</h6></th>
                    </tr>
                    <tr style="background-color:#4a4a4a;">
                        <th>Name</th>
                        <th>level</th>
                        <th>Temp</th>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr style="background-color:#4a4a4a;">
                        <th>Main Steam</th>
                        <th>All</th>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Main Steam</td>
                        <td> <input value="main_steam"
                                    v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Steam To E401</td>
                        <td> <input value="steam_fm"
                                    v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr><td>.</td><td></td><td></td></tr>
                    <tr style="background-color:#4a4a4a;">
                        <th>Name</th>
                        <th>Flow</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>FM 26 (CT Outlet)</td>
                        <td><input value="fm_26"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="ft_26"
                                   v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
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
        <!--        <button id="btn_print" v-on:click="print" class="btn btn-success" style="position:absolute; left: 86%; top: 130px;">Print Chart</button>-->
        <div class="container-2 col-md-10 m-auto">
            <div class="col-md-10">
                <h3>Graph For Level</h3>
            <canvas id="myChart1" width="450" height="150" style="width: 1583px;height: 527px;color: white; background-color: white;"></canvas>
            </div>
            
            <h3>Graph For Volume</h3>
            <canvas id="myChart2" width="450" height="150" style="width: 1583px;height: 527px;color: white; background-color: white;"></canvas>
            <h3>Graph For Temperature</h3>
            <canvas id="myChart3" width="450" height="150" style="width: 1583px;height: 527px;color: white; background-color: white;"></canvas>
            <h3>Graph For Flow</h3>
            <canvas id="myChart4" width="450" height="150" style="width: 1583px;height: 527px;color: white; background-color: white;"></canvas>
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
            timing: 1,
            db_timing:[],
            Volume_timing:[],
            setInterval: '60',
            val_1: [],
            startdate: '',
            enddate: '',
            select_record_option: [],
            select_record: [],
            select_db_record: '',
            db_val_1: [],
            db_val_2: [],
            db_val_3: [],
            db_val_4: [],
            db_val_5: [],
            db_val_6: [],
            db_val_7: [],
            db_val_8: [],
            db_val_9: [],
            db_val_10: [],
            db_val_11: [],
            db_val_12: [],
            db_val_13: [],
            db_val_14: [],
            db_val_15: [],
            db_val_16: [],
            vol_val_1: [],
            vol_val_2: [],
            vol_val_3: [],
            vol_val_4: [],
            vol_val_5: [],
            vol_val_6: [],
            vol_val_7: [],
            vol_val_8: [],
            vol_val_9: [],
            vol_val_10: [],
            vol_val_11: [],
            vol_val_12: [],
            vol_val_13: [],
            vol_val_14: [],
            vol_val_15: [],
            vol_val_16: [],
            db_rdl_volume: [],
            db_rdl_mass: [],
            disable: false,
            label_1:'',
            label_2:'',
            label_3:'',
            label_4:'',
            label_5:'',
            label_6:'',
            label_7:'',
            label_8:'',
            label_9:'',
            label_10:'',
            label_11:'',
            label_12:'',
            label_13:'',
            label_14:'',
            label_15:'',
            label_16:'',
            label_rdl_volume:'',
            label_rdl_mass:'',
        }

    },

    beforeCreate: function() {
        document.querySelector('body').style.maxWidth = "100%";
        document.querySelector('body').style.minWidth = "100%";

        // document.getElementById("main").style.overflow = "hidden";
    },
    methods: {
        CheckRange(){
        //     if(this.val_1.length >15){
        //         this.val_1.pop()
        //         alert('You can Only Select 16 Values');
        //     }

        },
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
            this.disable = true;
            axios.post('api/multigraph', [this.val_1,this.setInterval,this.timing,this.startdate,this.enddate] , {headers: {'Authorization': 'Bearer '+this.currentUser.token}})
                .then((response) => {
                    this.db_val_1 = response.data.value_1
                    this.db_val_2 = response.data.value_2
                    this.db_val_3 = response.data.value_3
                    this.db_val_4 = response.data.value_4
                    this.db_val_5 = response.data.value_5
                    this.db_val_6 = response.data.value_6
                    this.db_val_7 = response.data.value_7
                    this.db_val_8 = response.data.value_8
                    this.db_val_9 = response.data.value_9
                    this.db_val_10 = response.data.value_10
                    this.db_val_11 = response.data.value_11
                    this.db_val_12 = response.data.value_12
                    this.db_val_13 = response.data.value_13
                    this.db_val_14 = response.data.value_14
                    this.db_val_15 = response.data.value_15
                    this.db_val_16 = response.data.value_16
                    this.vol_val_1 = response.data.vol_value_1
                    this.vol_val_2 = response.data.vol_value_2
                    this.vol_val_3 = response.data.vol_value_3
                    this.vol_val_4 = response.data.vol_value_4
                    this.vol_val_5 = response.data.vol_value_5
                    this.vol_val_6 = response.data.vol_value_6
                    this.vol_val_7 = response.data.vol_value_7
                    this.vol_val_8 = response.data.vol_value_8
                    this.vol_val_9 = response.data.vol_value_9
                    this.vol_val_10 = response.data.vol_value_10
                    this.vol_val_11 = response.data.vol_value_11
                    this.vol_val_12 = response.data.vol_value_12
                    this.vol_val_13 = response.data.vol_value_13
                    this.vol_val_14 = response.data.vol_value_14
                    this.vol_val_15 = response.data.vol_value_15
                    this.vol_val_16 = response.data.vol_value_16
                    this.db_timing = response.data.timing
                    this.Volume_timing = response.data.Volume_timing
                    this.db_rdl_volume = response.data.rdl25_volume
                    this.db_rdl_mass = response.data.rdl25_mass
                    if(this.val_1[0]=='rdl_1'){
                        this.label_1 = 'D101 A';
                    }else if(this.val_1[0]=='rdl_2'){
                        this.label_1 = 'D101 B';
                    }else if(this.val_1[0]=='rdl_3'){
                        this.label_1 = 'D405 A';
                    }else if(this.val_1[0]=='rdl_4'){
                        this.label_1 = 'D405 B';
                    }else if(this.val_1[0]=='rdl_5'){
                        this.label_1 = 'D405 C';
                    }else if(this.val_1[0]=='rdl_6'){
                        this.label_1 = 'ALKALI (C401A)';
                    }else if(this.val_1[0]=='rdl_7'){
                        this.label_1 = 'ALKALI (C401B)';
                    }else if(this.val_1[0]=='rdl_8'){
                        this.label_1 = 'D402 A';
                    }else if(this.val_1[0]=='rdl_9'){
                        this.label_1 = 'D402 B';
                    }else if(this.val_1[0]=='rdl_10'){
                        this.label_1 = 'D402 C';
                    }else if(this.val_1[0]=='rdl_11'){
                        this.label_1 = 'D402 D';
                    }else if(this.val_1[0]=='rdl_12'){
                        this.label_1 = 'GLV';
                    }else if(this.val_1[0]=='rdl_13'){
                        this.label_1 = 'SETTLING A';
                    }else if(this.val_1[0]=='rdl_14'){
                        this.label_1 = 'SETTLING B';
                    }else if(this.val_1[0]=='rdl_15'){
                        this.label_1 = 'SETTLING C';
                    }else if(this.val_1[0]=='rdl_16'){
                        this.label_1 = 'METHANOL TANK#1';
                    }else if(this.val_1[0]=='rdl_17'){
                        this.label_1 = 'TAR TANK';
                    }else if(this.val_1[0]=='rdl_18'){
                        this.label_1 = 'GST TANK#1';
                    }else if(this.val_1[0]=='rdl_19'){
                        this.label_1 = 'METHANOL TANK#2';
                    }else if(this.val_1[0]=='rdl_20'){
                        this.label_1 = 'Slang Pool#1';
                    }else if(this.val_1[0]=='rdl_21'){
                        this.label_1 = 'Slag Pool#2';
                    }else if(this.val_1[0]=='rdl_22'){
                        this.label_1 = 'Slag Pool#3';
                    }else if(this.val_1[0]=='rdl_23'){
                        this.label_1 = 'PPRA';
                    }else if(this.val_1[0]=='rdl_24'){
                        this.label_1 = 'PPRB';
                    }else if(this.val_1[0]=='rdl_25'){
                        this.label_1 = 'H2SO4 Tank';
                    }else if(this.val_1[0]=='dpl_1'){
                        this.label_1 = 'D501';
                    }else if(this.val_1[0]=='dpl_2'){
                        this.label_1 = 'E401';
                    }else if(this.val_1[0]=='dpl_3'){
                        this.label_1 = 'T601';
                    }else if(this.val_1[0]=='dpl_4'){
                        this.label_1 = 'D503';
                    }else if(this.val_1[0]=='dpl_5'){
                        this.label_1 = 'D504';
                    }else if(this.val_1[0]=='dpl_6'){
                        this.label_1 = 'T501';
                    }else if(this.val_1[0]=='dpl_7'){
                        this.label_1 = 'T502';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[1]=='rdl_1'){
                        this.label_2 = 'D101 A';
                    }else if(this.val_1[1]=='rdl_2'){
                        this.label_2 = 'D101 B';
                    }else if(this.val_1[1]=='rdl_3'){
                        this.label_2 = 'D405 A';
                    }else if(this.val_1[1]=='rdl_4'){
                        this.label_2 = 'D405 B';
                    }else if(this.val_1[1]=='rdl_5'){
                        this.label_2 = 'D405 C';
                    }else if(this.val_1[1]=='rdl_6'){
                        this.label_2 = 'ALKALI (C401A)';
                    }else if(this.val_1[1]=='rdl_7'){
                        this.label_2 = 'ALKALI (C401B)';
                    }else if(this.val_1[1]=='rdl_8'){
                        this.label_2 = 'D402 A';
                    }else if(this.val_1[1]=='rdl_9'){
                        this.label_2 = 'D402 B';
                    }else if(this.val_1[1]=='rdl_10'){
                        this.label_2 = 'D402 C';
                    }else if(this.val_1[1]=='rdl_11'){
                        this.label_2 = 'D402 D';
                    }else if(this.val_1[1]=='rdl_12'){
                        this.label_2 = 'GLV';
                    }else if(this.val_1[1]=='rdl_13'){
                        this.label_2 = 'SETTLING A';
                    }else if(this.val_1[1]=='rdl_14'){
                        this.label_2 = 'SETTLING B';
                    }else if(this.val_1[1]=='rdl_15'){
                        this.label_2 = 'SETTLING C';
                    }else if(this.val_1[1]=='rdl_16'){
                        this.label_2 = 'METHANOL TANK#1';
                    }else if(this.val_1[1]=='rdl_17'){
                        this.label_2 = 'TAR TANK';
                    }else if(this.val_1[1]=='rdl_18'){
                        this.label_2 = 'GST TANK#1';
                    }else if(this.val_1[1]=='rdl_19'){
                        this.label_2 = 'METHANOL TANK#2';
                    }else if(this.val_1[1]=='rdl_20'){
                        this.label_2 = 'Slang Pool#1';
                    }else if(this.val_1[1]=='rdl_21'){
                        this.label_2 = 'Slag Pool#2';
                    }else if(this.val_1[1]=='rdl_22'){
                        this.label_2 = 'Slag Pool#3';
                    }else if(this.val_1[1]=='rdl_23'){
                        this.label_2 = 'PPRA';
                    }else if(this.val_1[1]=='rdl_24'){
                        this.label_2 = 'PPRB';
                    }else if(this.val_1[1]=='rdl_25'){
                        this.label_2 = 'H2SO4 Tank';
                    }else if(this.val_1[1]=='dpl_1'){
                        this.label_2 = 'D501';
                    }else if(this.val_1[1]=='dpl_2'){
                        this.label_2 = 'E401';
                    }else if(this.val_1[1]=='dpl_3'){
                        this.label_2 = 'T601';
                    }else if(this.val_1[1]=='dpl_4'){
                        this.label_2 = 'D503';
                    }else if(this.val_1[1]=='dpl_5'){
                        this.label_2 = 'D504';
                    }else if(this.val_1[1]=='dpl_6'){
                        this.label_2 = 'T501';
                    }else if(this.val_1[1]=='dpl_7'){
                        this.label_2 = 'T502';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[2]=='rdl_1'){
                        this.label_3 = 'D101 A';
                    }else if(this.val_1[2]=='rdl_2'){
                        this.label_3 = 'D101 B';
                    }else if(this.val_1[2]=='rdl_3'){
                        this.label_3 = 'D405 A';
                    }else if(this.val_1[2]=='rdl_4'){
                        this.label_3 = 'D405 B';
                    }else if(this.val_1[2]=='rdl_5'){
                        this.label_3 = 'D405 C';
                    }else if(this.val_1[2]=='rdl_6'){
                        this.label_3 = 'ALKALI (C401A)';
                    }else if(this.val_1[2]=='rdl_7'){
                        this.label_3 = 'ALKALI (C401B)';
                    }else if(this.val_1[2]=='rdl_8'){
                        this.label_3 = 'D402 A';
                    }else if(this.val_1[2]=='rdl_9'){
                        this.label_3 = 'D402 B';
                    }else if(this.val_1[2]=='rdl_10'){
                        this.label_3 = 'D402 C';
                    }else if(this.val_1[2]=='rdl_11'){
                        this.label_3 = 'D402 D';
                    }else if(this.val_1[2]=='rdl_12'){
                        this.label_3 = 'GLV';
                    }else if(this.val_1[2]=='rdl_13'){
                        this.label_3 = 'SETTLING A';
                    }else if(this.val_1[2]=='rdl_14'){
                        this.label_3 = 'SETTLING B';
                    }else if(this.val_1[2]=='rdl_15'){
                        this.label_3 = 'SETTLING C';
                    }else if(this.val_1[2]=='rdl_16'){
                        this.label_3 = 'METHANOL TANK#1';
                    }else if(this.val_1[2]=='rdl_17'){
                        this.label_3 = 'TAR TANK';
                    }else if(this.val_1[2]=='rdl_18'){
                        this.label_3 = 'GST TANK#1';
                    }else if(this.val_1[2]=='rdl_19'){
                        this.label_3 = 'METHANOL TANK#2';
                    }else if(this.val_1[2]=='rdl_20'){
                        this.label_3 = 'Slang Pool#1';
                    }else if(this.val_1[2]=='rdl_21'){
                        this.label_3 = 'Slag Pool#2';
                    }else if(this.val_1[2]=='rdl_22'){
                        this.label_3 = 'Slag Pool#3';
                    }else if(this.val_1[2]=='rdl_23'){
                        this.label_3 = 'PPRA';
                    }else if(this.val_1[2]=='rdl_24'){
                        this.label_3 = 'PPRB';
                    }else if(this.val_1[2]=='rdl_25'){
                        this.label_3 = 'H2SO4 Tank';
                    }else if(this.val_1[2]=='dpl_1'){
                        this.label_3 = 'D501';
                    }else if(this.val_1[2]=='dpl_2'){
                        this.label_3 = 'E401';
                    }else if(this.val_1[2]=='dpl_3'){
                        this.label_3 = 'T601';
                    }else if(this.val_1[2]=='dpl_4'){
                        this.label_3 = 'D503';
                    }else if(this.val_1[2]=='dpl_5'){
                        this.label_3 = 'D504';
                    }else if(this.val_1[2]=='dpl_6'){
                        this.label_3 = 'T501';
                    }else if(this.val_1[2]=='dpl_7'){
                        this.label_3 = 'T502';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[3]=='rdl_1'){
                        this.label_4 = 'D101 A';
                    }else if(this.val_1[3]=='rdl_2'){
                        this.label_4 = 'D101 B';
                    }else if(this.val_1[3]=='rdl_3'){
                        this.label_4 = 'D405 A';
                    }else if(this.val_1[3]=='rdl_4'){
                        this.label_4 = 'D405 B';
                    }else if(this.val_1[3]=='rdl_5'){
                        this.label_4 = 'D405 C';
                    }else if(this.val_1[3]=='rdl_6'){
                        this.label_4 = 'ALKALI (C401A)';
                    }else if(this.val_1[3]=='rdl_7'){
                        this.label_4 = 'ALKALI (C401B)';
                    }else if(this.val_1[3]=='rdl_8'){
                        this.label_4 = 'D402 A';
                    }else if(this.val_1[3]=='rdl_9'){
                        this.label_4 = 'D402 B';
                    }else if(this.val_1[3]=='rdl_10'){
                        this.label_4 = 'D402 C';
                    }else if(this.val_1[3]=='rdl_11'){
                        this.label_4 = 'D402 D';
                    }else if(this.val_1[3]=='rdl_12'){
                        this.label_4 = 'GLV';
                    }else if(this.val_1[3]=='rdl_13'){
                        this.label_4 = 'SETTLING A';
                    }else if(this.val_1[3]=='rdl_14'){
                        this.label_4 = 'SETTLING B';
                    }else if(this.val_1[3]=='rdl_15'){
                        this.label_4 = 'SETTLING C';
                    }else if(this.val_1[3]=='rdl_16'){
                        this.label_4 = 'METHANOL TANK#1';
                    }else if(this.val_1[3]=='rdl_17'){
                        this.label_4 = 'TAR TANK';
                    }else if(this.val_1[3]=='rdl_18'){
                        this.label_4 = 'GST TANK#1';
                    }else if(this.val_1[3]=='rdl_19'){
                        this.label_4 = 'METHANOL TANK#2';
                    }else if(this.val_1[3]=='rdl_20'){
                        this.label_4 = 'Slang Pool#1';
                    }else if(this.val_1[3]=='rdl_21'){
                        this.label_4 = 'Slag Pool#2';
                    }else if(this.val_1[3]=='rdl_22'){
                        this.label_4 = 'Slag Pool#3';
                    }else if(this.val_1[3]=='rdl_23'){
                        this.label_4 = 'PPRA';
                    }else if(this.val_1[3]=='rdl_24'){
                        this.label_4 = 'PPRB';
                    }else if(this.val_1[3]=='rdl_25'){
                        this.label_4 = 'H2SO4 Tank';
                    }else if(this.val_1[3]=='dpl_1'){
                        this.label_4 = 'D501';
                    }else if(this.val_1[3]=='dpl_2'){
                        this.label_4 = 'E401';
                    }else if(this.val_1[3]=='dpl_3'){
                        this.label_4 = 'T601';
                    }else if(this.val_1[3]=='dpl_4'){
                        this.label_4 = 'D503';
                    }else if(this.val_1[3]=='dpl_5'){
                        this.label_4 = 'D504';
                    }else if(this.val_1[3]=='dpl_6'){
                        this.label_4 = 'T501';
                    }else if(this.val_1[3]=='dpl_7'){
                        this.label_4 = 'T502';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[4]=='rdl_1'){
                        this.label_5 = 'D101 A';
                    }else if(this.val_1[4]=='rdl_2'){
                        this.label_5 = 'D101 B';
                    }else if(this.val_1[4]=='rdl_3'){
                        this.label_5 = 'D405 A';
                    }else if(this.val_1[4]=='rdl_4'){
                        this.label_5 = 'D405 B';
                    }else if(this.val_1[4]=='rdl_5'){
                        this.label_5 = 'D405 C';
                    }else if(this.val_1[4]=='rdl_6'){
                        this.label_5 = 'ALKALI (C401A)';
                    }else if(this.val_1[4]=='rdl_7'){
                        this.label_5 = 'ALKALI (C401B)';
                    }else if(this.val_1[4]=='rdl_8'){
                        this.label_5 = 'D402 A';
                    }else if(this.val_1[4]=='rdl_9'){
                        this.label_5 = 'D402 B';
                    }else if(this.val_1[4]=='rdl_10'){
                        this.label_5 = 'D402 C';
                    }else if(this.val_1[4]=='rdl_11'){
                        this.label_5 = 'D402 D';
                    }else if(this.val_1[4]=='rdl_12'){
                        this.label_5 = 'GLV';
                    }else if(this.val_1[4]=='rdl_13'){
                        this.label_5 = 'SETTLING A';
                    }else if(this.val_1[4]=='rdl_14'){
                        this.label_5 = 'SETTLING B';
                    }else if(this.val_1[4]=='rdl_15'){
                        this.label_5 = 'SETTLING C';
                    }else if(this.val_1[4]=='rdl_16'){
                        this.label_5 = 'METHANOL TANK#1';
                    }else if(this.val_1[4]=='rdl_17'){
                        this.label_5 = 'TAR TANK';
                    }else if(this.val_1[4]=='rdl_18'){
                        this.label_5 = 'GST TANK#1';
                    }else if(this.val_1[4]=='rdl_19'){
                        this.label_5 = 'METHANOL TANK#2';
                    }else if(this.val_1[4]=='rdl_20'){
                        this.label_5 = 'Slang Pool#1';
                    }else if(this.val_1[4]=='rdl_21'){
                        this.label_5 = 'Slag Pool#2';
                    }else if(this.val_1[4]=='rdl_22'){
                        this.label_5 = 'Slag Pool#3';
                    }else if(this.val_1[4]=='rdl_23'){
                        this.label_5 = 'PPRA';
                    }else if(this.val_1[4]=='rdl_24'){
                        this.label_5 = 'PPRB';
                    }else if(this.val_1[4]=='rdl_25'){
                        this.label_5 = 'H2SO4 Tank';
                    }else if(this.val_1[4]=='dpl_1'){
                        this.label_5 = 'D501';
                    }else if(this.val_1[4]=='dpl_2'){
                        this.label_5 = 'E401';
                    }else if(this.val_1[4]=='dpl_3'){
                        this.label_5 = 'T601';
                    }else if(this.val_1[4]=='dpl_4'){
                        this.label_5 = 'D503';
                    }else if(this.val_1[4]=='dpl_5'){
                        this.label_5 = 'D504';
                    }else if(this.val_1[4]=='dpl_6'){
                        this.label_5 = 'T501';
                    }else if(this.val_1[4]=='dpl_7'){
                        this.label_5 = 'T502';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[5]=='rdl_1'){
                        this.label_6 = 'D101 A';
                    }else if(this.val_1[5]=='rdl_2'){
                        this.label_6 = 'D101 B';
                    }else if(this.val_1[5]=='rdl_3'){
                        this.label_6 = 'D405 A';
                    }else if(this.val_1[5]=='rdl_4'){
                        this.label_6 = 'D405 B';
                    }else if(this.val_1[5]=='rdl_5'){
                        this.label_6 = 'D405 C';
                    }else if(this.val_1[5]=='rdl_6'){
                        this.label_6 = 'ALKALI (C401A)';
                    }else if(this.val_1[5]=='rdl_7'){
                        this.label_6 = 'ALKALI (C401B)';
                    }else if(this.val_1[5]=='rdl_8'){
                        this.label_6 = 'D402 A';
                    }else if(this.val_1[5]=='rdl_9'){
                        this.label_6 = 'D402 B';
                    }else if(this.val_1[5]=='rdl_10'){
                        this.label_6 = 'D402 C';
                    }else if(this.val_1[5]=='rdl_11'){
                        this.label_6 = 'D402 D';
                    }else if(this.val_1[5]=='rdl_12'){
                        this.label_6 = 'GLV';
                    }else if(this.val_1[5]=='rdl_13'){
                        this.label_6 = 'SETTLING A';
                    }else if(this.val_1[5]=='rdl_14'){
                        this.label_6 = 'SETTLING B';
                    }else if(this.val_1[5]=='rdl_15'){
                        this.label_6 = 'SETTLING C';
                    }else if(this.val_1[5]=='rdl_16'){
                        this.label_6 = 'METHANOL TANK#1';
                    }else if(this.val_1[5]=='rdl_17'){
                        this.label_6 = 'TAR TANK';
                    }else if(this.val_1[5]=='rdl_18'){
                        this.label_6 = 'GST TANK#1';
                    }else if(this.val_1[5]=='rdl_19'){
                        this.label_6 = 'METHANOL TANK#2';
                    }else if(this.val_1[5]=='rdl_20'){
                        this.label_6 = 'Slang Pool#1';
                    }else if(this.val_1[5]=='rdl_21'){
                        this.label_6 = 'Slag Pool#2';
                    }else if(this.val_1[5]=='rdl_22'){
                        this.label_6 = 'Slag Pool#3';
                    }else if(this.val_1[5]=='rdl_23'){
                        this.label_6 = 'PPRA';
                    }else if(this.val_1[5]=='rdl_24'){
                        this.label_6 = 'PPRB';
                    }else if(this.val_1[5]=='rdl_25'){
                        this.label_6 = 'H2SO4 Tank';
                    }else if(this.val_1[5]=='dpl_1'){
                        this.label_6 = 'D501';
                    }else if(this.val_1[5]=='dpl_2'){
                        this.label_6 = 'E401';
                    }else if(this.val_1[5]=='dpl_3'){
                        this.label_6 = 'T601';
                    }else if(this.val_1[5]=='dpl_4'){
                        this.label_6 = 'D503';
                    }else if(this.val_1[5]=='dpl_5'){
                        this.label_6 = 'D504';
                    }else if(this.val_1[5]=='dpl_6'){
                        this.label_6 = 'T501';
                    }else if(this.val_1[5]=='dpl_7'){
                        this.label_6 = 'T502';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[6]=='rdl_1'){
                        this.label_7 = 'D101 A';
                    }else if(this.val_1[6]=='rdl_2'){
                        this.label_7 = 'D101 B';
                    }else if(this.val_1[6]=='rdl_3'){
                        this.label_7 = 'D405 A';
                    }else if(this.val_1[6]=='rdl_4'){
                        this.label_7 = 'D405 B';
                    }else if(this.val_1[6]=='rdl_5'){
                        this.label_7 = 'D405 C';
                    }else if(this.val_1[6]=='rdl_6'){
                        this.label_7 = 'ALKALI (C401A)';
                    }else if(this.val_1[6]=='rdl_7'){
                        this.label_7 = 'ALKALI (C401B)';
                    }else if(this.val_1[6]=='rdl_8'){
                        this.label_7 = 'D402 A';
                    }else if(this.val_1[6]=='rdl_9'){
                        this.label_7 = 'D402 B';
                    }else if(this.val_1[6]=='rdl_10'){
                        this.label_7 = 'D402 C';
                    }else if(this.val_1[6]=='rdl_11'){
                        this.label_7 = 'D402 D';
                    }else if(this.val_1[6]=='rdl_12'){
                        this.label_7 = 'GLV';
                    }else if(this.val_1[6]=='rdl_13'){
                        this.label_7 = 'SETTLING A';
                    }else if(this.val_1[6]=='rdl_14'){
                        this.label_7 = 'SETTLING B';
                    }else if(this.val_1[6]=='rdl_15'){
                        this.label_7 = 'SETTLING C';
                    }else if(this.val_1[6]=='rdl_16'){
                        this.label_7 = 'METHANOL TANK#1';
                    }else if(this.val_1[6]=='rdl_17'){
                        this.label_7 = 'TAR TANK';
                    }else if(this.val_1[6]=='rdl_18'){
                        this.label_7 = 'GST TANK#1';
                    }else if(this.val_1[6]=='rdl_19'){
                        this.label_7 = 'METHANOL TANK#2';
                    }else if(this.val_1[6]=='rdl_20'){
                        this.label_7 = 'Slang Pool#1';
                    }else if(this.val_1[6]=='rdl_21'){
                        this.label_7 = 'Slag Pool#2';
                    }else if(this.val_1[6]=='rdl_22'){
                        this.label_7 = 'Slag Pool#3';
                    }else if(this.val_1[6]=='rdl_23'){
                        this.label_7 = 'PPRA';
                    }else if(this.val_1[6]=='rdl_24'){
                        this.label_7 = 'PPRB';
                    }else if(this.val_1[6]=='rdl_25'){
                        this.label_7 = 'H2SO4 Tank';
                    }else if(this.val_1[6]=='dpl_1'){
                        this.label_7 = 'D501';
                    }else if(this.val_1[6]=='dpl_2'){
                        this.label_7 = 'E401';
                    }else if(this.val_1[6]=='dpl_3'){
                        this.label_7 = 'T601';
                    }else if(this.val_1[6]=='dpl_4'){
                        this.label_7 = 'D503';
                    }else if(this.val_1[6]=='dpl_5'){
                        this.label_7 = 'D504';
                    }else if(this.val_1[6]=='dpl_6'){
                        this.label_7 = 'T501';
                    }else if(this.val_1[6]=='dpl_7'){
                        this.label_7 = 'T502';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[7]=='rdl_1'){
                        this.label_8 = 'D101 A';
                    }else if(this.val_1[7]=='rdl_2'){
                        this.label_8 = 'D101 B';
                    }else if(this.val_1[7]=='rdl_3'){
                        this.label_8 = 'D405 A';
                    }else if(this.val_1[7]=='rdl_4'){
                        this.label_8 = 'D405 B';
                    }else if(this.val_1[7]=='rdl_5'){
                        this.label_8 = 'D405 C';
                    }else if(this.val_1[7]=='rdl_6'){
                        this.label_8 = 'ALKALI (C401A)';
                    }else if(this.val_1[7]=='rdl_7'){
                        this.label_8 = 'ALKALI (C401B)';
                    }else if(this.val_1[7]=='rdl_8'){
                        this.label_8 = 'D402 A';
                    }else if(this.val_1[7]=='rdl_9'){
                        this.label_8 = 'D402 B';
                    }else if(this.val_1[7]=='rdl_10'){
                        this.label_8 = 'D402 C';
                    }else if(this.val_1[7]=='rdl_11'){
                        this.label_8 = 'D402 D';
                    }else if(this.val_1[7]=='rdl_12'){
                        this.label_8 = 'GLV';
                    }else if(this.val_1[7]=='rdl_13'){
                        this.label_8 = 'SETTLING A';
                    }else if(this.val_1[7]=='rdl_14'){
                        this.label_8 = 'SETTLING B';
                    }else if(this.val_1[7]=='rdl_15'){
                        this.label_8 = 'SETTLING C';
                    }else if(this.val_1[7]=='rdl_16'){
                        this.label_8 = 'METHANOL TANK#1';
                    }else if(this.val_1[7]=='rdl_17'){
                        this.label_8 = 'TAR TANK';
                    }else if(this.val_1[7]=='rdl_18'){
                        this.label_8 = 'GST TANK#1';
                    }else if(this.val_1[7]=='rdl_19'){
                        this.label_8 = 'METHANOL TANK#2';
                    }else if(this.val_1[7]=='rdl_20'){
                        this.label_8 = 'Slang Pool#1';
                    }else if(this.val_1[7]=='rdl_21'){
                        this.label_8 = 'Slag Pool#2';
                    }else if(this.val_1[7]=='rdl_22'){
                        this.label_8 = 'Slag Pool#3';
                    }else if(this.val_1[7]=='rdl_23'){
                        this.label_8 = 'PPRA';
                    }else if(this.val_1[7]=='rdl_24'){
                        this.label_8 = 'PPRB';
                    }else if(this.val_1[7]=='rdl_25'){
                        this.label_8 = 'H2SO4 Tank';
                    }else if(this.val_1[7]=='dpl_1'){
                        this.label_8 = 'D501';
                    }else if(this.val_1[7]=='dpl_2'){
                        this.label_8 = 'E401';
                    }else if(this.val_1[7]=='dpl_3'){
                        this.label_8 = 'T601';
                    }else if(this.val_1[7]=='dpl_4'){
                        this.label_8 = 'D503';
                    }else if(this.val_1[7]=='dpl_5'){
                        this.label_8 = 'D504';
                    }else if(this.val_1[7]=='dpl_6'){
                        this.label_8 = 'T501';
                    }else if(this.val_1[7]=='dpl_7'){
                        this.label_8 = 'T502';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[8]=='rdl_1'){
                        this.label_9 = 'D101 A';
                    }else if(this.val_1[8]=='rdl_2'){
                        this.label_9 = 'D101 B';
                    }else if(this.val_1[8]=='rdl_3'){
                        this.label_9 = 'D405 A';
                    }else if(this.val_1[8]=='rdl_4'){
                        this.label_9 = 'D405 B';
                    }else if(this.val_1[8]=='rdl_5'){
                        this.label_9 = 'D405 C';
                    }else if(this.val_1[8]=='rdl_6'){
                        this.label_9 = 'ALKALI (C401A)';
                    }else if(this.val_1[8]=='rdl_7'){
                        this.label_9 = 'ALKALI (C401B)';
                    }else if(this.val_1[8]=='rdl_8'){
                        this.label_9 = 'D402 A';
                    }else if(this.val_1[8]=='rdl_9'){
                        this.label_9 = 'D402 B';
                    }else if(this.val_1[8]=='rdl_10'){
                        this.label_9 = 'D402 C';
                    }else if(this.val_1[8]=='rdl_11'){
                        this.label_9 = 'D402 D';
                    }else if(this.val_1[8]=='rdl_12'){
                        this.label_9 = 'GLV';
                    }else if(this.val_1[8]=='rdl_13'){
                        this.label_9 = 'SETTLING A';
                    }else if(this.val_1[8]=='rdl_14'){
                        this.label_9 = 'SETTLING B';
                    }else if(this.val_1[8]=='rdl_15'){
                        this.label_9 = 'SETTLING C';
                    }else if(this.val_1[8]=='rdl_16'){
                        this.label_9 = 'METHANOL TANK#1';
                    }else if(this.val_1[8]=='rdl_17'){
                        this.label_9 = 'TAR TANK';
                    }else if(this.val_1[8]=='rdl_18'){
                        this.label_9 = 'GST TANK#1';
                    }else if(this.val_1[8]=='rdl_19'){
                        this.label_9 = 'METHANOL TANK#2';
                    }else if(this.val_1[8]=='rdl_20'){
                        this.label_9 = 'Slang Pool#1';
                    }else if(this.val_1[8]=='rdl_21'){
                        this.label_9 = 'Slag Pool#2';
                    }else if(this.val_1[8]=='rdl_22'){
                        this.label_9 = 'Slag Pool#3';
                    }else if(this.val_1[8]=='rdl_23'){
                        this.label_9 = 'PPRA';
                    }else if(this.val_1[8]=='rdl_24'){
                        this.label_9 = 'PPRB';
                    }else if(this.val_1[8]=='rdl_25'){
                        this.label_9 = 'H2SO4 Tank';
                    }else if(this.val_1[8]=='dpl_1'){
                        this.label_9 = 'D501';
                    }else if(this.val_1[8]=='dpl_2'){
                        this.label_9 = 'E401';
                    }else if(this.val_1[8]=='dpl_3'){
                        this.label_9 = 'T601';
                    }else if(this.val_1[8]=='dpl_4'){
                        this.label_9 = 'D503';
                    }else if(this.val_1[8]=='dpl_5'){
                        this.label_9 = 'D504';
                    }else if(this.val_1[8]=='dpl_6'){
                        this.label_9 = 'T501';
                    }else if(this.val_1[8]=='dpl_7'){
                        this.label_9 = 'T502';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[8]=='rdl_1'){
                        this.label_10 = 'D101 A';
                    }else if(this.val_1[9]=='rdl_2'){
                        this.label_10 = 'D101 B';
                    }else if(this.val_1[9]=='rdl_3'){
                        this.label_10 = 'D405 A';
                    }else if(this.val_1[9]=='rdl_4'){
                        this.label_10 = 'D405 B';
                    }else if(this.val_1[9]=='rdl_5'){
                        this.label_10 = 'D405 C';
                    }else if(this.val_1[9]=='rdl_6'){
                        this.label_10 = 'ALKALI (C401A)';
                    }else if(this.val_1[9]=='rdl_7'){
                        this.label_10 = 'ALKALI (C401B)';
                    }else if(this.val_1[9]=='rdl_8'){
                        this.label_10 = 'D402 A';
                    }else if(this.val_1[9]=='rdl_9'){
                        this.label_10 = 'D402 B';
                    }else if(this.val_1[9]=='rdl_10'){
                        this.label_10 = 'D402 C';
                    }else if(this.val_1[9]=='rdl_11'){
                        this.label_10 = 'D402 D';
                    }else if(this.val_1[9]=='rdl_12'){
                        this.label_10 = 'GLV';
                    }else if(this.val_1[9]=='rdl_13'){
                        this.label_10 = 'SETTLING A';
                    }else if(this.val_1[9]=='rdl_14'){
                        this.label_10 = 'SETTLING B';
                    }else if(this.val_1[9]=='rdl_15'){
                        this.label_10 = 'SETTLING C';
                    }else if(this.val_1[9]=='rdl_16'){
                        this.label_10 = 'METHANOL TANK#1';
                    }else if(this.val_1[9]=='rdl_17'){
                        this.label_10 = 'TAR TANK';
                    }else if(this.val_1[9]=='rdl_18'){
                        this.label_10 = 'GST TANK#1';
                    }else if(this.val_1[9]=='rdl_19'){
                        this.label_10 = 'METHANOL TANK#2';
                    }else if(this.val_1[9]=='rdl_20'){
                        this.label_10 = 'Slang Pool#1';
                    }else if(this.val_1[9]=='rdl_21'){
                        this.label_10 = 'Slag Pool#2';
                    }else if(this.val_1[9]=='rdl_22'){
                        this.label_10 = 'Slag Pool#3';
                    }else if(this.val_1[9]=='rdl_23'){
                        this.label_10 = 'PPRA';
                    }else if(this.val_1[9]=='rdl_24'){
                        this.label_10 = 'PPRB';
                    }else if(this.val_1[9]=='rdl_25'){
                        this.label_10 = 'H2SO4 Tank';
                    }else if(this.val_1[9]=='dpl_1'){
                        this.label_10 = 'D501';
                    }else if(this.val_1[9]=='dpl_2'){
                        this.label_10 = 'E401';
                    }else if(this.val_1[9]=='dpl_3'){
                        this.label_10 = 'T601';
                    }else if(this.val_1[9]=='dpl_4'){
                        this.label_10 = 'D503';
                    }else if(this.val_1[9]=='dpl_5'){
                        this.label_10 = 'D504';
                    }else if(this.val_1[9]=='dpl_6'){
                        this.label_10 = 'T501';
                    }else if(this.val_1[9]=='dpl_7'){
                        this.label_10 = 'T502';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[10]=='rdl_1'){
                        this.label_11 = 'D101 A';
                    }else if(this.val_1[10]=='rdl_2'){
                        this.label_11 = 'D101 B';
                    }else if(this.val_1[10]=='rdl_3'){
                        this.label_11 = 'D405 A';
                    }else if(this.val_1[10]=='rdl_4'){
                        this.label_11 = 'D405 B';
                    }else if(this.val_1[10]=='rdl_5'){
                        this.label_11 = 'D405 C';
                    }else if(this.val_1[10]=='rdl_6'){
                        this.label_11 = 'ALKALI (C401A)';
                    }else if(this.val_1[10]=='rdl_7'){
                        this.label_11 = 'ALKALI (C401B)';
                    }else if(this.val_1[10]=='rdl_8'){
                        this.label_11 = 'D402 A';
                    }else if(this.val_1[10]=='rdl_9'){
                        this.label_11 = 'D402 B';
                    }else if(this.val_1[10]=='rdl_10'){
                        this.label_11 = 'D402 C';
                    }else if(this.val_1[10]=='rdl_11'){
                        this.label_11 = 'D402 D';
                    }else if(this.val_1[10]=='rdl_12'){
                        this.label_11 = 'GLV';
                    }else if(this.val_1[10]=='rdl_13'){
                        this.label_11 = 'SETTLING A';
                    }else if(this.val_1[10]=='rdl_14'){
                        this.label_11 = 'SETTLING B';
                    }else if(this.val_1[10]=='rdl_15'){
                        this.label_11 = 'SETTLING C';
                    }else if(this.val_1[10]=='rdl_16'){
                        this.label_11 = 'METHANOL TANK#1';
                    }else if(this.val_1[10]=='rdl_17'){
                        this.label_11 = 'TAR TANK';
                    }else if(this.val_1[10]=='rdl_18'){
                        this.label_11 = 'GST TANK#1';
                    }else if(this.val_1[10]=='rdl_19'){
                        this.label_11 = 'METHANOL TANK#2';
                    }else if(this.val_1[10]=='rdl_20'){
                        this.label_11 = 'Slang Pool#1';
                    }else if(this.val_1[10]=='rdl_21'){
                        this.label_11 = 'Slag Pool#2';
                    }else if(this.val_1[10]=='rdl_22'){
                        this.label_11 = 'Slag Pool#3';
                    }else if(this.val_1[10]=='rdl_23'){
                        this.label_11 = 'PPRA';
                    }else if(this.val_1[10]=='rdl_24'){
                        this.label_11 = 'PPRB';
                    }else if(this.val_1[10]=='rdl_25'){
                        this.label_11 = 'H2SO4 Tank';
                    }else if(this.val_1[10]=='dpl_1'){
                        this.label_11 = 'D501';
                    }else if(this.val_1[10]=='dpl_2'){
                        this.label_11 = 'E401';
                    }else if(this.val_1[10]=='dpl_3'){
                        this.label_11 = 'T601';
                    }else if(this.val_1[10]=='dpl_4'){
                        this.label_11 = 'D503';
                    }else if(this.val_1[10]=='dpl_5'){
                        this.label_11 = 'D504';
                    }else if(this.val_1[10]=='dpl_6'){
                        this.label_11 = 'T501';
                    }else if(this.val_1[10]=='dpl_7'){
                        this.label_11 = 'T502';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[11]=='rdl_1'){
                        this.label_12 = 'D101 A';
                    }else if(this.val_1[11]=='rdl_2'){
                        this.label_12 = 'D101 B';
                    }else if(this.val_1[11]=='rdl_3'){
                        this.label_12 = 'D405 A';
                    }else if(this.val_1[11]=='rdl_4'){
                        this.label_12 = 'D405 B';
                    }else if(this.val_1[11]=='rdl_5'){
                        this.label_12 = 'D405 C';
                    }else if(this.val_1[11]=='rdl_6'){
                        this.label_12 = 'ALKALI (C401A)';
                    }else if(this.val_1[11]=='rdl_7'){
                        this.label_12 = 'ALKALI (C401B)';
                    }else if(this.val_1[11]=='rdl_8'){
                        this.label_12 = 'D402 A';
                    }else if(this.val_1[11]=='rdl_9'){
                        this.label_12 = 'D402 B';
                    }else if(this.val_1[11]=='rdl_10'){
                        this.label_12 = 'D402 C';
                    }else if(this.val_1[11]=='rdl_11'){
                        this.label_12 = 'D402 D';
                    }else if(this.val_1[11]=='rdl_12'){
                        this.label_12 = 'GLV';
                    }else if(this.val_1[11]=='rdl_13'){
                        this.label_12 = 'SETTLING A';
                    }else if(this.val_1[11]=='rdl_14'){
                        this.label_12 = 'SETTLING B';
                    }else if(this.val_1[11]=='rdl_15'){
                        this.label_12 = 'SETTLING C';
                    }else if(this.val_1[11]=='rdl_16'){
                        this.label_12 = 'METHANOL TANK#1';
                    }else if(this.val_1[11]=='rdl_17'){
                        this.label_12 = 'TAR TANK';
                    }else if(this.val_1[11]=='rdl_18'){
                        this.label_12 = 'GST TANK#1';
                    }else if(this.val_1[11]=='rdl_19'){
                        this.label_12 = 'METHANOL TANK#2';
                    }else if(this.val_1[11]=='rdl_20'){
                        this.label_12 = 'Slang Pool#1';
                    }else if(this.val_1[11]=='rdl_21'){
                        this.label_12 = 'Slag Pool#2';
                    }else if(this.val_1[11]=='rdl_22'){
                        this.label_12 = 'Slag Pool#3';
                    }else if(this.val_1[11]=='rdl_23'){
                        this.label_12 = 'PPRA';
                    }else if(this.val_1[11]=='rdl_24'){
                        this.label_12 = 'PPRB';
                    }else if(this.val_1[11]=='rdl_25'){
                        this.label_12 = 'H2SO4 Tank';
                    }else if(this.val_1[11]=='dpl_1'){
                        this.label_12 = 'D501';
                    }else if(this.val_1[11]=='dpl_2'){
                        this.label_12 = 'E401';
                    }else if(this.val_1[11]=='dpl_3'){
                        this.label_12 = 'T601';
                    }else if(this.val_1[11]=='dpl_4'){
                        this.label_12 = 'D503';
                    }else if(this.val_1[11]=='dpl_5'){
                        this.label_12 = 'D504';
                    }else if(this.val_1[11]=='dpl_6'){
                        this.label_12 = 'T501';
                    }else if(this.val_1[11]=='dpl_7'){
                        this.label_12 = 'T502';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[12]=='rdl_1'){
                        this.label_13 = 'D101 A';
                    }else if(this.val_1[12]=='rdl_2'){
                        this.label_13 = 'D101 B';
                    }else if(this.val_1[12]=='rdl_3'){
                        this.label_13 = 'D405 A';
                    }else if(this.val_1[12]=='rdl_4'){
                        this.label_13 = 'D405 B';
                    }else if(this.val_1[12]=='rdl_5'){
                        this.label_13 = 'D405 C';
                    }else if(this.val_1[12]=='rdl_6'){
                        this.label_13 = 'ALKALI (C401A)';
                    }else if(this.val_1[12]=='rdl_7'){
                        this.label_13 = 'ALKALI (C401B)';
                    }else if(this.val_1[12]=='rdl_8'){
                        this.label_13 = 'D402 A';
                    }else if(this.val_1[12]=='rdl_9'){
                        this.label_13 = 'D402 B';
                    }else if(this.val_1[12]=='rdl_10'){
                        this.label_13 = 'D402 C';
                    }else if(this.val_1[12]=='rdl_11'){
                        this.label_13 = 'D402 D';
                    }else if(this.val_1[12]=='rdl_12'){
                        this.label_13 = 'GLV';
                    }else if(this.val_1[12]=='rdl_13'){
                        this.label_13 = 'SETTLING A';
                    }else if(this.val_1[12]=='rdl_14'){
                        this.label_13 = 'SETTLING B';
                    }else if(this.val_1[12]=='rdl_15'){
                        this.label_13 = 'SETTLING C';
                    }else if(this.val_1[12]=='rdl_16'){
                        this.label_13 = 'METHANOL TANK#1';
                    }else if(this.val_1[12]=='rdl_17'){
                        this.label_13 = 'TAR TANK';
                    }else if(this.val_1[12]=='rdl_18'){
                        this.label_13 = 'GST TANK#1';
                    }else if(this.val_1[12]=='rdl_19'){
                        this.label_13 = 'METHANOL TANK#2';
                    }else if(this.val_1[12]=='rdl_20'){
                        this.label_13 = 'Slang Pool#1';
                    }else if(this.val_1[12]=='rdl_21'){
                        this.label_13 = 'Slag Pool#2';
                    }else if(this.val_1[12]=='rdl_22'){
                        this.label_13 = 'Slag Pool#3';
                    }else if(this.val_1[12]=='rdl_23'){
                        this.label_13 = 'PPRA';
                    }else if(this.val_1[12]=='rdl_24'){
                        this.label_13 = 'PPRB';
                    }else if(this.val_1[12]=='rdl_25'){
                        this.label_13 = 'H2SO4 Tank';
                    }else if(this.val_1[12]=='dpl_1'){
                        this.label_13 = 'D501';
                    }else if(this.val_1[12]=='dpl_2'){
                        this.label_13 = 'E401';
                    }else if(this.val_1[12]=='dpl_3'){
                        this.label_13 = 'T601';
                    }else if(this.val_1[12]=='dpl_4'){
                        this.label_13 = 'D503';
                    }else if(this.val_1[12]=='dpl_5'){
                        this.label_13 = 'D504';
                    }else if(this.val_1[12]=='dpl_6'){
                        this.label_13 = 'T501';
                    }else if(this.val_1[12]=='dpl_7'){
                        this.label_13 = 'T502';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[13]=='rdl_1'){
                        this.label_14 = 'D101 A';
                    }else if(this.val_1[13]=='rdl_2'){
                        this.label_14 = 'D101 B';
                    }else if(this.val_1[13]=='rdl_3'){
                        this.label_14 = 'D405 A';
                    }else if(this.val_1[13]=='rdl_4'){
                        this.label_14 = 'D405 B';
                    }else if(this.val_1[13]=='rdl_5'){
                        this.label_14 = 'D405 C';
                    }else if(this.val_1[13]=='rdl_6'){
                        this.label_14 = 'ALKALI (C401A)';
                    }else if(this.val_1[13]=='rdl_7'){
                        this.label_14 = 'ALKALI (C401B)';
                    }else if(this.val_1[13]=='rdl_8'){
                        this.label_14 = 'D402 A';
                    }else if(this.val_1[13]=='rdl_9'){
                        this.label_14 = 'D402 B';
                    }else if(this.val_1[13]=='rdl_10'){
                        this.label_14 = 'D402 C';
                    }else if(this.val_1[13]=='rdl_11'){
                        this.label_14 = 'D402 D';
                    }else if(this.val_1[13]=='rdl_12'){
                        this.label_14 = 'GLV';
                    }else if(this.val_1[13]=='rdl_13'){
                        this.label_14 = 'SETTLING A';
                    }else if(this.val_1[13]=='rdl_14'){
                        this.label_14 = 'SETTLING B';
                    }else if(this.val_1[13]=='rdl_15'){
                        this.label_14 = 'SETTLING C';
                    }else if(this.val_1[13]=='rdl_16'){
                        this.label_14 = 'METHANOL TANK#1';
                    }else if(this.val_1[13]=='rdl_17'){
                        this.label_14 = 'TAR TANK';
                    }else if(this.val_1[13]=='rdl_18'){
                        this.label_14 = 'GST TANK#1';
                    }else if(this.val_1[13]=='rdl_19'){
                        this.label_14 = 'METHANOL TANK#2';
                    }else if(this.val_1[13]=='rdl_20'){
                        this.label_14 = 'Slang Pool#1';
                    }else if(this.val_1[13]=='rdl_21'){
                        this.label_14 = 'Slag Pool#2';
                    }else if(this.val_1[13]=='rdl_22'){
                        this.label_14 = 'Slag Pool#3';
                    }else if(this.val_1[13]=='rdl_23'){
                        this.label_14 = 'PPRA';
                    }else if(this.val_1[13]=='rdl_24'){
                        this.label_14 = 'PPRB';
                    }else if(this.val_1[13]=='rdl_25'){
                        this.label_14 = 'H2SO4 Tank';
                    }else if(this.val_1[13]=='dpl_1'){
                        this.label_14 = 'D501';
                    }else if(this.val_1[13]=='dpl_2'){
                        this.label_14 = 'E401';
                    }else if(this.val_1[13]=='dpl_3'){
                        this.label_14 = 'T601';
                    }else if(this.val_1[13]=='dpl_4'){
                        this.label_14 = 'D503';
                    }else if(this.val_1[13]=='dpl_5'){
                        this.label_14 = 'D504';
                    }else if(this.val_1[13]=='dpl_6'){
                        this.label_14 = 'T501';
                    }else if(this.val_1[13]=='dpl_7'){
                        this.label_14 = 'T502';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[14]=='rdl_1'){
                        this.label_15 = 'D101 A';
                    }else if(this.val_1[14]=='rdl_2'){
                        this.label_15 = 'D101 B';
                    }else if(this.val_1[14]=='rdl_3'){
                        this.label_15 = 'D405 A';
                    }else if(this.val_1[14]=='rdl_4'){
                        this.label_15 = 'D405 B';
                    }else if(this.val_1[14]=='rdl_5'){
                        this.label_15 = 'D405 C';
                    }else if(this.val_1[14]=='rdl_6'){
                        this.label_15 = 'ALKALI (C401A)';
                    }else if(this.val_1[14]=='rdl_7'){
                        this.label_15 = 'ALKALI (C401B)';
                    }else if(this.val_1[14]=='rdl_8'){
                        this.label_15 = 'D402 A';
                    }else if(this.val_1[14]=='rdl_9'){
                        this.label_15 = 'D402 B';
                    }else if(this.val_1[14]=='rdl_10'){
                        this.label_15 = 'D402 C';
                    }else if(this.val_1[14]=='rdl_11'){
                        this.label_15 = 'D402 D';
                    }else if(this.val_1[14]=='rdl_12'){
                        this.label_15 = 'GLV';
                    }else if(this.val_1[14]=='rdl_13'){
                        this.label_15 = 'SETTLING A';
                    }else if(this.val_1[14]=='rdl_14'){
                        this.label_15 = 'SETTLING B';
                    }else if(this.val_1[14]=='rdl_15'){
                        this.label_15 = 'SETTLING C';
                    }else if(this.val_1[14]=='rdl_16'){
                        this.label_15 = 'METHANOL TANK#1';
                    }else if(this.val_1[14]=='rdl_17'){
                        this.label_15 = 'TAR TANK';
                    }else if(this.val_1[14]=='rdl_18'){
                        this.label_15 = 'GST TANK#1';
                    }else if(this.val_1[14]=='rdl_19'){
                        this.label_15 = 'METHANOL TANK#2';
                    }else if(this.val_1[14]=='rdl_20'){
                        this.label_15 = 'Slang Pool#1';
                    }else if(this.val_1[14]=='rdl_21'){
                        this.label_15 = 'Slag Pool#2';
                    }else if(this.val_1[14]=='rdl_22'){
                        this.label_15 = 'Slag Pool#3';
                    }else if(this.val_1[14]=='rdl_23'){
                        this.label_15 = 'PPRA';
                    }else if(this.val_1[14]=='rdl_24'){
                        this.label_15 = 'PPRB';
                    }else if(this.val_1[14]=='rdl_25'){
                        this.label_15 = 'H2SO4 Tank';
                    }else if(this.val_1[14]=='dpl_1'){
                        this.label_15 = 'D501';
                    }else if(this.val_1[14]=='dpl_2'){
                        this.label_15 = 'E401';
                    }else if(this.val_1[14]=='dpl_3'){
                        this.label_15 = 'T601';
                    }else if(this.val_1[14]=='dpl_4'){
                        this.label_15 = 'D503';
                    }else if(this.val_1[14]=='dpl_5'){
                        this.label_15 = 'D504';
                    }else if(this.val_1[14]=='dpl_6'){
                        this.label_15 = 'T501';
                    }else if(this.val_1[14]=='dpl_7'){
                        this.label_15 = 'T502';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[15]=='rdl_1'){
                        this.label_16 = 'D101 A';
                    }else if(this.val_1[15]=='rdl_2'){
                        this.label_16 = 'D101 B';
                    }else if(this.val_1[15]=='rdl_3'){
                        this.label_16 = 'D405 A';
                    }else if(this.val_1[15]=='rdl_4'){
                        this.label_16 = 'D405 B';
                    }else if(this.val_1[15]=='rdl_5'){
                        this.label_16 = 'D405 C';
                    }else if(this.val_1[15]=='rdl_6'){
                        this.label_16 = 'ALKALI (C401A)';
                    }else if(this.val_1[15]=='rdl_7'){
                        this.label_16 = 'ALKALI (C401B)';
                    }else if(this.val_1[15]=='rdl_8'){
                        this.label_16 = 'D402 A';
                    }else if(this.val_1[15]=='rdl_9'){
                        this.label_16 = 'D402 B';
                    }else if(this.val_1[15]=='rdl_10'){
                        this.label_16 = 'D402 C';
                    }else if(this.val_1[15]=='rdl_11'){
                        this.label_16 = 'D402 D';
                    }else if(this.val_1[15]=='rdl_12'){
                        this.label_16 = 'GLV';
                    }else if(this.val_1[15]=='rdl_13'){
                        this.label_16 = 'SETTLING A';
                    }else if(this.val_1[15]=='rdl_14'){
                        this.label_16 = 'SETTLING B';
                    }else if(this.val_1[15]=='rdl_15'){
                        this.label_16 = 'SETTLING C';
                    }else if(this.val_1[15]=='rdl_16'){
                        this.label_16 = 'METHANOL TANK#1';
                    }else if(this.val_1[15]=='rdl_17'){
                        this.label_16 = 'TAR TANK';
                    }else if(this.val_1[15]=='rdl_18'){
                        this.label_16 = 'GST TANK#1';
                    }else if(this.val_1[15]=='rdl_19'){
                        this.label_16 = 'METHANOL TANK#2';
                    }else if(this.val_1[15]=='rdl_20'){
                        this.label_16 = 'Slang Pool#1';
                    }else if(this.val_1[15]=='rdl_21'){
                        this.label_16 = 'Slag Pool#2';
                    }else if(this.val_1[15]=='rdl_22'){
                        this.label_16 = 'Slag Pool#3';
                    }else if(this.val_1[15]=='rdl_23'){
                        this.label_16 = 'PPRA';
                    }else if(this.val_1[15]=='rdl_24'){
                        this.label_16 = 'PPRB';
                    }else if(this.val_1[15]=='rdl_25'){
                        this.label_16 = 'H2SO4 Tank';
                    }else if(this.val_1[15]=='dpl_1'){
                        this.label_16 = 'D501';
                    }else if(this.val_1[15]=='dpl_2'){
                        this.label_16 = 'E401';
                    }else if(this.val_1[15]=='dpl_3'){
                        this.label_16 = 'T601';
                    }else if(this.val_1[15]=='dpl_4'){
                        this.label_16 = 'D503';
                    }else if(this.val_1[15]=='dpl_5'){
                        this.label_16 = 'D504';
                    }else if(this.val_1[15]=='dpl_6'){
                        this.label_16 = 'T501';
                    }else if(this.val_1[15]=='dpl_7'){
                        this.label_16 = 'T502';
                    } 
                     
                       
                        var ctx = document.getElementById('myChart1').getContext('2d');
                        if (window.bar != undefined)
                            window.bar.destroy();
                        window.bar = new Chart(ctx, {
                            type: 'line',
                            tooltips: {enabled: false},
                            hover: {mode: null},
                            data: {
                                labels: this.db_timing,
                                datasets: [{
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: this.label_1,
                                    data: this.db_val_1,
                                    backgroundColor: [

                                        'rgb(255,99,132)',

                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: this.label_rdl_volume,
                                    data: this.db_rdl_volume,
                                    backgroundColor: [

                                        'rgb(104,0,0)',

                                    ],
                                    borderColor: [
                                        'rgb(104,0,0)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: this.label_rdl_mass,
                                    data: this.db_rdl_mass,
                                    backgroundColor: [

                                        'rgb(90,18,71)',

                                    ],
                                    borderColor: [
                                        'rgb(90,18,71)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: this.label_2,
                                    data: this.db_val_2,


                                    backgroundColor: [

                                        'rgb(39,156,12)',

                                    ],
                                    borderColor: [
                                        'rgb(39,156,12)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: this.label_3,
                                    data: this.db_val_3,


                                    backgroundColor: [

                                        'rgb(12,53,156)',

                                    ],
                                    borderColor: [
                                        'rgb(12,53,156)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: this.label_4,
                                    data: this.db_val_4,


                                    backgroundColor: [

                                        'rgb(179,132,0)',

                                    ],
                                    borderColor: [
                                        'rgb(179,132,0)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: this.label_5,
                                    data: this.db_val_5,


                                    backgroundColor: [

                                        'rgb(5,5,5)',

                                    ],
                                    borderColor: [
                                        'rgb(5,5,5)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: this.label_6,
                                    data: this.db_val_6,


                                    backgroundColor: [

                                        'rgb(46,75,34)',

                                    ],
                                    borderColor: [
                                        'rgb(46,75,34)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: this.label_7,
                                    data: this.db_val_7,


                                    backgroundColor: [

                                        'rgb(142,12,156)',

                                    ],
                                    borderColor: [
                                        'rgb(142,12,156)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: this.label_8,
                                    data: this.db_val_8,


                                    backgroundColor: [

                                        'rgb(0,229,255)',

                                    ],
                                    borderColor: [
                                        'rgb(0,229,255)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: this.label_9,
                                    data: this.db_val_9,


                                    backgroundColor: [

                                        'rgb(156,12,12)',

                                    ],
                                    borderColor: [
                                        'rgb(156,12,12)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: this.label_10,
                                    data: this.db_val_10,


                                    backgroundColor: [

                                        'rgba(0,234,255,0.34)',

                                    ],
                                    borderColor: [
                                        'rgba(0,234,255,0.34)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: this.label_11,
                                    data: this.db_val_11,


                                    backgroundColor: [

                                        'rgb(156,86,12)',

                                    ],
                                    borderColor: [
                                        'rgb(156,86,12)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: this.label_12,
                                    data: this.db_val_12,


                                    backgroundColor: [

                                        'rgb(255,93,8)',

                                    ],
                                    borderColor: [
                                        'rgb(255,93,8)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: this.label_13,
                                    data: this.db_val_13,


                                    backgroundColor: [

                                        'rgba(12,122,156,0.6)',

                                    ],
                                    borderColor: [
                                        'rgba(12,122,156,0.6)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: this.label_14,
                                    data: this.db_val_14,


                                    backgroundColor: [

                                        'rgb(0,63,255)',

                                    ],
                                    borderColor: [
                                        'rgb(0,63,255)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: this.label_15,
                                    data: this.db_val_15,


                                    backgroundColor: [

                                        'rgb(89,12,156)',

                                    ],
                                    borderColor: [
                                        'rgb(89,12,156)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: this.label_16,
                                    data: this.db_val_16,


                                    backgroundColor: [

                                        'rgb(201,173,0)',

                                    ],
                                    borderColor: [
                                        'rgb(201,173,0)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }],


                            },


                   
                            options: {
                                plugins: {
                                    legend: {
                                        labels: {
                                            // This more specific font property overrides the global property
                                            font: {
                                                size: 14
                                            }
                                        }
                                    }
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true,

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
                         var ctx = document.getElementById('myChart2').getContext('2d');
                        if (window.bar != undefined)
                            window.bar.destroy();
                        window.bar = new Chart(ctx, {
                            type: 'line',
                            tooltips: {enabled: false},
                            hover: {mode: null},
                            data: {
                                labels: this.Volume_timing,
                                datasets: [{
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: 'h',
                                    data: this.vol_val_1,
                                    backgroundColor: [

                                        'rgb(255,99,132)',

                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: 'h',
                                    data: this.db_rdl_volume,
                                    backgroundColor: [

                                        'rgb(104,0,0)',

                                    ],
                                    borderColor: [
                                        'rgb(104,0,0)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: 'h',
                                    data: this.db_rdl_mass,
                                    backgroundColor: [

                                        'rgb(90,18,71)',

                                    ],
                                    borderColor: [
                                        'rgb(90,18,71)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: 'h',
                                    data: this.vol_val_2,


                                    backgroundColor: [

                                        'rgb(39,156,12)',

                                    ],
                                    borderColor: [
                                        'rgb(39,156,12)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: 'h',
                                    data: this.vol_val_3,


                                    backgroundColor: [

                                        'rgb(12,53,156)',

                                    ],
                                    borderColor: [
                                        'rgb(12,53,156)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: 'h',
                                    data: this.vol_val_4,


                                    backgroundColor: [

                                        'rgb(179,132,0)',

                                    ],
                                    borderColor: [
                                        'rgb(179,132,0)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: 'h',
                                    data: this.vol_val_5,


                                    backgroundColor: [

                                        'rgb(5,5,5)',

                                    ],
                                    borderColor: [
                                        'rgb(5,5,5)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: 'h',
                                    data: this.vol_val_6,


                                    backgroundColor: [

                                        'rgb(46,75,34)',

                                    ],
                                    borderColor: [
                                        'rgb(46,75,34)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: 'h',
                                    data: this.vol_val_7,


                                    backgroundColor: [

                                        'rgb(142,12,156)',

                                    ],
                                    borderColor: [
                                        'rgb(142,12,156)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: 'h',
                                    data: this.vol_val_8,


                                    backgroundColor: [

                                        'rgb(0,229,255)',

                                    ],
                                    borderColor: [
                                        'rgb(0,229,255)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: 'h',
                                    data: this.vol_val_9,


                                    backgroundColor: [

                                        'rgb(156,12,12)',

                                    ],
                                    borderColor: [
                                        'rgb(156,12,12)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: 'h',
                                    data: this.vol_val_10,


                                    backgroundColor: [

                                        'rgba(0,234,255,0.34)',

                                    ],
                                    borderColor: [
                                        'rgba(0,234,255,0.34)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: 'h',
                                    data: this.vol_val_11,


                                    backgroundColor: [

                                        'rgb(156,86,12)',

                                    ],
                                    borderColor: [
                                        'rgb(156,86,12)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: 'h',
                                    data: this.vol_val_12,


                                    backgroundColor: [

                                        'rgb(255,93,8)',

                                    ],
                                    borderColor: [
                                        'rgb(255,93,8)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: 'h',
                                    data: this.vol_val_13,


                                    backgroundColor: [

                                        'rgba(12,122,156,0.6)',

                                    ],
                                    borderColor: [
                                        'rgba(12,122,156,0.6)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: 'h',
                                    data: this.vol_val_14,


                                    backgroundColor: [

                                        'rgb(0,63,255)',

                                    ],
                                    borderColor: [
                                        'rgb(0,63,255)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: 'h',
                                    data: this.vol_val_15,


                                    backgroundColor: [

                                        'rgb(89,12,156)',

                                    ],
                                    borderColor: [
                                        'rgb(89,12,156)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }, {
                                    hover: {
                                        mode: 'new mode'
                                    },
                                    label: 'h',
                                    data: this.vol_val_16,


                                    backgroundColor: [

                                        'rgb(201,173,0)',

                                    ],
                                    borderColor: [
                                        'rgb(201,173,0)',

                                    ],
                                    borderWidth: 1
                                    , fill: false,
                                }],


                            },
                        });
                    
                })
                .catch(err =>{
                    console.log(err);
                })
        },
        reloadPage() {
            window.location.reload();
        }
    },

    mounted() {
        document.getElementById('change-row').style.marginRight = "0px";
        // if (localStorage.getItem('reloaded')) {
        //     // The page was just reloaded. Clear the value from local storage
        //     // so that it will reload the next time this page is visited.
        //     localStorage.removeItem('reloaded');
        // } else {
        //     // Set a flag so that we know not to reload the page twice.
        //     localStorage.setItem('reloaded', '1');
        //     location.reload();
        // }
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
<!--<style scoped>-->

<!--body{-->
<!--    width:100% !important;-->
<!--    min-width: 100% !important;-->
<!--    max-width: 100% !important;-->
<!--    background-color: indianred;-->
<!--}-->
<!--#graphReport tr td {-->
<!--    padding: 15px;-->
<!--    text-align: center;-->
<!--    border: 1px solid black !important;-->
<!--}-->

<!--#graphReport tr th {-->
<!--    padding: 15px;-->
<!--    text-align: center;-->
<!--    border: 1px solid black !important;-->
<!--}-->

<!--#graphReport tr {-->

<!--    border: none !important;-->
<!--}-->


<!--.custom-st{-->
<!--    padding:10px;-->
<!--    text-align:left;-->
<!--    height: 29px;-->

<!--}-->
<!--.custom-table{-->

<!--    color:white;-->
<!--}-->
<!--.custom-table th{-->
<!--    border:2px solid black;-->
<!--}-->
<!--.custom-table td{-->
<!--    border:2px solid black;-->
<!--}-->

<!--.table-style-me th{-->
<!--    font-size: 15px;-->
<!--}-->
<!--@media only screen and (max-width: 1840px) {-->
<!--    .table-style-me td {-->
<!--        padding:0px;-->
<!--    }-->
<!--    .custom-st{-->
<!--        text-align:center;-->
<!--        padding:5px;-->
<!--        padding-left: 0px;-->
<!--        height: fit-content;-->
<!--        font-size: 9px;-->
<!--    }-->
<!--    .custom-st input[type=checkbox]{-->

<!--    }-->
<!--    th h6{-->
<!--        font-size: 0.9rem;-->
<!--    }-->
<!--    .custom-padding{-->
<!--        padding-bottom:5px;-->
<!--    }-->
<!--    .custom-padding-two{-->
<!--        padding-bottom:8px;-->
<!--    }-->
<!--    .custom-padding-three{-->
<!--        padding-bottom:7px;-->
<!--    }-->
<!--    .custom-padding-four{-->
<!--        padding-bottom:0px;-->
<!--        padding-top:2px;-->
<!--    }-->
<!--    .custom-input-padding{-->
<!--        padding-bottom:1.8px;-->
<!--    }-->
<!--}-->
<!--@media only screen and (min-width: 1410px)  {-->
<!--    .custom-padding-four{-->
<!--        padding-bottom:22px !important;-->
<!--        padding-top:2px;-->
<!--    }-->

<!--}-->
<!--@media only screen and (max-width: 1410px)  {-->
<!--    .flow-padding-two{-->
<!--        padding-bottom:7px !important;-->
<!--    }-->
<!--}-->
<!--@media only screen and (max-width: 1310px)  {-->
<!--    .flow-padding-three{-->
<!--        padding-bottom:7px !important;-->
<!--    }-->
<!--}-->
<!--@media only screen and (max-width: 1375px)  {-->
<!--    .flow-padding{-->
<!--        padding-bottom: 7.8px;-->
<!--    }-->
<!--}-->
<!--@media only screen and (max-width: 1220px)  {-->
<!--    .flow-padding{-->
<!--        padding-bottom:15px !important;-->
<!--    }-->
<!--    .print-btn{-->
<!--        left: 79% !important;-->
<!--    }-->
<!--}-->
<!--@media only screen and (max-width: 1130px)  {-->
<!--    .flow-padding-two{-->
<!--        padding-bottom:15px !important;-->
<!--    }-->
<!--    .flow-padding-one{-->
<!--        padding-bottom:20px !important;-->
<!--    }-->
<!--}-->
<!--@media only screen and (max-width: 1080px) {-->
<!--    .flow-padding-three{-->
<!--        padding-bottom:15px !important;-->
<!--    }-->
<!--}-->
<!--@media only screen and (max-width: 1037px) {-->

<!--    .flow-padding-three{-->
<!--        padding-bottom:19px !important;-->
<!--    }-->
<!--    .flow-padding-two{-->
<!--        padding-bottom:20px !important;-->
<!--    }-->
<!--    .flow-padding{-->
<!--        padding-bottom:37px !important;-->
<!--    }-->
<!--    .custom-padding{-->
<!--        padding-bottom:5px;-->
<!--    }-->
<!--    .custom-padding-two{-->
<!--        padding-bottom:11px !important;-->
<!--    }-->
<!--    .custom-padding-three{-->
<!--        padding-bottom:22px;-->
<!--    }-->
<!--    .custom-padding-four{-->
<!--        padding-bottom:52px;-->
<!--    }-->
<!--    .custom-input-padding{-->
<!--        padding-bottom:5.5px;-->
<!--    }-->
<!--}-->
<!--@media only screen and (max-width: 800px) {-->

<!--    .table-custom-style{-->
<!--        margin-left: 80px !important;-->
<!--    }-->

<!--}-->
<!--@media only screen and (max-width: 600px) {-->
<!--    .table-style-me{-->
<!--        width: 83%!important;-->
<!--        margin-left: 40px;-->
<!--    }-->
<!--    .print-btn{-->
<!--        left: 82% !important;-->
<!--    }-->
<!--}-->
<!--</style>-->
