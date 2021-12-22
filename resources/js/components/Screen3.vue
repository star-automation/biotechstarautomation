<template>
    <div class="col-md-12" style="padding: 0px;">
        {{ getData() }}
        <img src="images/screen3new.png" :style="{'width':'100%','height':'871px'}"/>
        <div style="position: absolute;top: 35px;left: 51px;">
            <p style="font-size: 22px;">{{dt_aio.timing}}</p>
        </div>
         <div :style="{'position': 'absolute','top': '163px','left': '1067px','display':'inline-table'}">
           
            <!-- <p :style="{'color': 'white','text-center':'center'}">PT-3</p> -->
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.pt_3 <= 0">0.00 Bar</span>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.pt_3}} Bar</span>
            
            
        </div>
        <div :style="{'position': 'absolute','top':'52px','left':'1238px','padding':'2px','border':'1px solid white','display':'inline-table'}">
            <p :style="{'color': 'white !important','margin-right':'20px'}">Flow</p>
<!--            <p :style="{'background-color':'black','color':'#BFFF00 !important','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="fm.fm_1 <= -0.21">Error</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{ dt_aio.st_fm1_flow }} t/hr</p>

            <p :style="{'color': 'white !important','margin-right':'20px'}">Total Flow</p>
<!--            <p :style="{'background-color':'black','color':'#BFFF00 !important','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="fm.fm_1 <= -0.21">Error</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" >{{ dt_aio.stfm1_flow_tot }} ton</p>

            <p :style="{'color': 'white !important','margin-right':'20px'}">Temp</p>
<!--            <p :style="{'background-color':'black','color':'#BFFF00 !important','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="fm.fm_1 <= -0.21">Error</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" >{{ dt_aio.stfm1_temp }} &#8451;</p>

            <p :style="{'color': 'white !important','margin-right':'20px'}">Pressure</p>
<!--            <p :style="{'background-color':'black','color':'#BFFF00 !important','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="fm.fm_1 <= -0.21">Error</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" >{{ dt_aio.stfm1_pressure }} MPa</p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '221px','top': '144px'}">
            <div class="outer" :style="{'width': '17px','height': '100px'}">
                <div class="rdl_21_inner" data-progress="" v-if="parseInt(dt_aio.rdl_21) > parseInt(setpoint.rdl22_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_21_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_21) < parseInt(setpoint.rdl22_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_21_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="rdl_21" style="margin: auto; display: none;" > {{ dt_aio.rdl_21 }} </p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '332px','top': '144px'}">
            <div class="outer" :style="{'width': '17px','height': '100px'}">
                <div class="rdl_20_inner" data-progress="" v-if="parseInt(dt_aio.rdl_2) > parseInt(setpoint.rdl20_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_20_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_20) < parseInt(setpoint.rdl20_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_20_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p style="margin: auto; display: none;" id="rdl_20" ref="input">{{ dt_aio.rdl_20 }}</p>
            <!--            <input type="hidden" v-model="rtd_1"/>-->
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '598px','top': '130px'}">
            <div class="outer" :style="{'width': '17px','height': '93px'}">
                <div class="rdl_6_inner" data-progress="" v-if="parseInt(dt_aio.rdl_6) > parseInt(setpoint.rdl6_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_6_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_6) < parseInt(setpoint.rdl6_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_6_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p style="display: none;" id="rdl_6" ref="input">{{ dt_aio.rdl_6 }}</p>
            <!--            <input type="hidden" v-model="rtd_1"/>-->
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '286px','top': '323px'}">
            <div class="outer" :style="{'width': '17px','height': '100px'}">
                <div class="rdl_22_inner" data-progress="" v-if="parseInt(dt_aio.rdl_22) > parseInt(setpoint.rdl22_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_22_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_22) < parseInt(setpoint.rdl22_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_22_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p style="margin: auto; display: none;" id="rdl_22" ref="input">{{ dt_aio.rdl_22 }}</p>
            <!--            <input type="hidden" v-model="rtd_1"/>-->
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '555px','top': '349px'}">
            <div class="outer" :style="{'width': '17px','height': '95px'}">
                <div class="rdl_7_inner" data-progress="" v-if="parseInt(dt_aio.rdl_7) > parseInt(setpoint.rdl7_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_7_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_7) < parseInt(setpoint.rdl7_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_7_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p style="margin: auto; display: none;" id="rdl_7" ref="input">{{ dt_aio.rdl_7 }}</p>
            <!--            <input type="hidden" v-model="rtd_1"/>-->
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '686px','top': '572px'}">
            <div class="outer" :style="{'width': '17px','height': '90px'}">
                <div class="rdl_26_inner" data-progress="" v-if="parseInt(dt_aio.rdl_26) > parseInt(setpoint.rdl26_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_26_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_26) < parseInt(setpoint.rdl26_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_26_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p style="margin: auto; display: none;" id="rdl_26" ref="input">{{ dt_aio.rdl_26 }}</p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '1371px','top': '524px'}">
            <div class="outer" :style="{'width': '17px','height': '120px'}">
                <div class="rdl_8_inner" data-progress="" v-if="parseInt(dt_aio.rdl_8) > parseInt(setpoint.rdl8_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_8_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_8) < parseInt(setpoint.rdl8_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_8_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p style="margin: auto; display: none;" id="rdl_8" ref="input">{{ dt_aio.rdl_8 }}</p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '1550px','top': '522px'}">
            <div class="outer" :style="{'width': '17px','height': '120px'}">
                <div class="rdl_9_inner" data-progress="" v-if="parseInt(dt_aio.rdl_9) > parseInt(setpoint.rdl9_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_9_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_9) < parseInt(setpoint.rdl9_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_9_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p style="margin: auto; display: none;" id="rdl_9" ref="input">{{ dt_aio.rdl_9 }}</p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '1728px','top': '522px'}">
            <div class="outer" :style="{'width': '17px','height': '120px'}">
                <div class="rdl_10_inner" data-progress="" v-if="parseInt(dt_aio.rdl_10) > parseInt(setpoint.rdl10_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_10_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_10) < parseInt(setpoint.rdl10_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_10_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p style="margin: auto; display: none;" id="rdl_10" ref="input">{{ dt_aio.rdl_10 }}</p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '1907px','top': '522px'}">
            <div class="outer" :style="{'width': '17px','height': '120px'}">
                <div class="rdl_11_inner" data-progress="" v-if="parseInt(dt_aio.rdl_11) > parseInt(setpoint.rdl11_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_11_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_11) < parseInt(setpoint.rdl11_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_11_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p style="margin: auto; display: none;" id="rdl_11" ref="input">{{ dt_aio.rdl_11 }}</p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '1790px','top': '83px'}">
            <div class="outer" :style="{'width': '17px','height': '120px'}">
                <div class="rdl_5_inner" data-progress="" v-if="parseInt(dt_aio.rdl_5) > parseInt(setpoint.rdl5_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_5_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_5) < parseInt(setpoint.rdl5_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_5_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p style="margin: auto; display: none;" id="rdl_5" ref="input">{{ dt_aio.rdl_5 }}</p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '1648px','top': '84px'}">
            <div class="outer" :style="{'width': '17px','height': '120px'}">
                <div class="rdl_4_inner" data-progress="" v-if="parseInt(dt_aio.rdl_4) > parseInt(setpoint.rdl4_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_4_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_4) < parseInt(setpoint.rdl4_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_4_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p style="margin: auto; display: none;" id="rdl_4" ref="input">{{ dt_aio.rdl_4 }}</p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '1506px','top': '85px'}">
            <div class="outer" :style="{'width': '17px','height': '120px'}">
                <div class="rdl_3_inner" data-progress="" v-if="parseInt(dt_aio.rdl_3) > parseInt(setpoint.rdl3_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_3_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_3) < parseInt(setpoint.rdl3_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_3_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p style="margin: auto; display: none;" id="rdl_3" ref="input">{{ dt_aio.rdl_3 }}</p>
        </div>
        <div :style="{'position': 'absolute','top': '190px','left': '104px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white','background':'black','margin-bottom':'-5px','text-align':'center'}">RDL-21</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_21 <= -0.34">Error</span>
            <span :style="{'color': 'green','background-color':'black','color':'green','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_21 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">VR-21</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_21}} &#13221;</p>
        </div>

        <div :style="{'position': 'absolute','top': '191px','left': '261px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','background':'black','margin-bottom':'-5px','text-align':'center'}">RDL-20</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_20 <= -0.34">Error</span>
            <span :style="{'color': 'green','background-color':'black','color':'green','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_20 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">VR-20</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_20}} &#13221;</p>

        </div>

        <div :style="{'position': 'absolute','top': '371px','left': '133px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','background':'black','margin-bottom':'-5px','text-align':'center'}">RDL-22</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_22 <= -0.1">Error</span>
            <span :style="{'color': 'green','background-color':'black','color':'green','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_22 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">VR-22</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_22}} &#13221;</p>
        </div>

        <div :style="{'position': 'absolute','top': '400px','left': '484px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','background':'black','margin-bottom':'-5px','text-align':'center'}">RDL-7</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_7 <= -0.06">Error</span>
            <span :style="{'color': 'green','background-color':'black','color':'green','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_7 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">VR-7</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_7}} &#13221;</p>
        </div>

        <div :style="{'position': 'absolute','top': '173px','left': '527px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','background':'black','margin-bottom':'-5px','text-align':'center'}">RDL-6</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_6 <= -0.06">Error</span>
            <span :style="{'background-color':'black','color':'green','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_6 }} in</span>
            <!--           <span :style="{'color': 'white'}">%</span>-->
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">VR-6</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_6}} &#13221;</p>
        </div>

        <div :style="{'position': 'absolute','top': '575px','left': '396px','display':'inline-table'}">
            <img src="images/vg2.png" width="40">
            <p :style="{'color': 'white'}">GVM-1</p>
            <span :style="{'background-color':'black','color':'green','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">00.00</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">%</span>
        </div>

        <div :style="{'position': 'absolute','bottom': '109px','left': '555px','display':'inline-table'}">
            <p :style="{'color': 'white'}">FM-6</p>
            <span :style="{'background-color':'black','border':'0.1px solid yellow','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_6 <= -0.15">Error</span>
            <span :style="{'background-color':'black','border':'0.1px solid yellow','color':'green','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.fm_6 }}</span>
            <span :style="{'color': 'white !important','margin-left': '12px'}"> &#13221;/hr </span>

        </div>

        <div :style="{'position': 'absolute','bottom': '192px','left': '799px','display':'inline-table'}">
            <p :style="{'color': 'white'}">FM-4</p>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_4 <= -0.15">Error</span>
            <span :style="{'background-color':'black','color':'green','padding':'0px 3px'}" v-else>{{ dt_aio.fm_4 }}</span>
            <p :style="{'color': 'white !important','margin-left': '12px'}"> &#13221;/hr </p>

        </div>
<!--        <div :style="{'position': 'absolute','bottom': '274px','left': '497px','display':'inline-table'}">-->
<!--            <p :style="{'color': 'white'}">FM-2</p>-->
<!--            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="fm.fm_2 <= -0.06">Error</span>-->
<!--            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{ fm.fm_2 }}</span>-->
<!--            <span :style="{'color': 'white !important','margin-left': '12px'}"> &#13221;/hr </span>-->

<!--        </div>-->
        <div :style="{'position': 'absolute','top': '70px','left': '516px','display':'inline-table'}">
            <span :style="{'color': 'white !important','margin-right':'20px'}">FM-21</span>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_21 <= -0.93">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_21}}</span>
            <span :style="{'color': 'white !important','margin-left': '8px'}"> &#13221;/hr </span>

        </div>

        <div :style="{'position': 'absolute','bottom': '244px','left': '605px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','background':'black','margin-bottom':'-5px','text-align':'center'}">RDL-26</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{ dt_aio.rdl_26 }} in</span>
            <!--            <span :style="{'color': 'white'}">%</span>-->
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">VR-26</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA</p>
        </div>
        <div :style="{'position': 'absolute','bottom': '321px','left': '605px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-12</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_12>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_12}} &#8451;</p>
            <!--            <span :style="{'color': 'white'}">%</span>-->
        </div>

        <div :style="{'position': 'absolute','bottom': '235px','left': '950px','display':'inline-table'}">
            <p :style="{'color': 'white'}">FM-5</p>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_5 <= -0.21">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_5}}</span>
            <p :style="{'color': 'white !important','margin-left': '12px'}"> &#13221;/hr </p>
<!--            <p style="margin-top:5px;">Total Flow</p>-->
<!--            <p :style="{'color':'#BFFF00','background-color':'black'}">00.00  &#13221;</p>-->
        </div>
        <div :style="{'position': 'absolute','bottom': '322px','left': '988px','display':'inline-table'}">
            <span :style="{'color': 'white !important','margin-right':'22px'}">FM-3</span>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_3 <= -0.21">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_3}}</span>
            <span :style="{'color': 'white !important','margin-left': '12px'}"> &#13221;/hr </span>
<!--            <p style="margin-top:5px;margin-left: 45px;">Total Flow</p>-->
<!--            <p :style="{'color':'#BFFF00','margin-left':'45px','background-color':'black'}">00.00  &#13221;</p>-->
        </div>
        <div :style="{'position': 'absolute','bottom': '345px','left': '962px','display':'inline-table'}">
            <p :style="{'color': 'white !important','position':'absolute','top':'-11px'}">BVM-1</p>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">00.00</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">%</span>
            <img src="images/vg1.png" width="30">
        </div>
        <div :style="{'position': 'absolute','bottom': '456px','left': '874px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-35</p>-->
            <p   :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.rtd_35}} &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '245px','left': '1163px','display':'inline-table'}">
            <span :style="{'color': 'white !important'}">  GVM-2</span>
            <img src="images/vg1.png" width="30">
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">00.00 %</span>
        </div>
        <div :style="{'position': 'absolute','top':'300px','left':'591px','padding':'2px','border':'1px solid white','display':'inline-table'}">
            <p :style="{'color': 'white !important','margin-right':'20px'}">Oil</p>
            <p :style="{'background-color':'black','color':'#BFFF00 !important','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_1 <= -0.21">Error</p>
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.fm_1 }}</p>
            <p :style="{'color': 'white !important','margin-left': '8px'}"> &#13221;/hr </p>
            <hr style="background-color: white">
            <p :style="{'color': 'white'}">Alkali</p>
            <p :style="{'background-color':'black','color':'#BFFF00 !important','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_2 <= -0.06">Error</p>
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.fm_2 }}</p>
            <p :style="{'color': 'white !important','margin-left': '12px'}"> &#13221;/hr </p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '1195px','top': '346px'}">
            <div class="outer" :style="{'width': '17px','height': '99px'}">
                <div class="dpl_2_inner" data-progress="" v-if="parseInt(dt_aio.dpl_2) > parseInt(setpoint.dpl2_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="dpl_2_inner" data-progress="" v-else-if="parseInt(dt_aio.dpl_2) < parseInt(setpoint.dpl2_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="dpl_2_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p style="margin: auto; display: none;" id="dpl_2" ref="input">{{ dt_aio.dpl_2 }}</p>
        </div>
        <div :style="{'position': 'absolute','top': '400px','left': '1123px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">DPL-2</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.dpl_2 <= -1.23">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.dpl_2}} in</span>
            <p :style="{'color': '#BFFF00','background-color':'black','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vd_2}} m³</p>
        </div>
      
        <div :style="{'position': 'absolute','top': '348px','left': '1123px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','margin-bottom':'-5px'}">rtd-17</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.rtd_17}} &#8451;</p>
        </div>

        <div :style="{'position': 'absolute','top': '585px','left': '1827px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">RDL-11</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_11 <= -0.16">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_11 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">VR-11</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_11}} &#13221;</p>
        </div>
        <div :style="{'position': 'absolute','top': '533px','left': '1827px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-16</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_16>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_16}} &#8451;</p>
        </div>

        <div :style="{'position': 'absolute','top': '586px','left': '1650px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">RDL-10</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_10 <= -0.16">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_10 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">VR-10</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_10}} &#13221;</p>
        </div>
        <div :style="{'position': 'absolute','top': '533px','left': '1650px','display':'inline-table'}">
<!--            <p :style="{'color': 'white !important'}">RTD-15</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_15>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_15}} &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '588px','left': '1470px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">RDL-9</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_9 <= -0.16">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_9 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">VR-9</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_9}} &#13221;</p>

        </div>
        <div :style="{'position': 'absolute','top': '533px','left': '1470px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-14</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_14>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rtd_14 }} &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '590px','left': '1292px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">RDL-8</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_8 <= -0.16">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_8 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">VR-8</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_8}} &#13221;</p>

        </div>

        <div :style="{'position': 'absolute','top': '533px','left': '1292px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-13</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_13>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_13}} &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '151px','left': '1425px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">RDL-3</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_3 <= -0.16">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_3 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">VR-3</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_3}} &#13221;</p>
        </div>
        <div :style="{'position': 'absolute','top': '95px','left': '1425px','display':'inline-table'}">


        </div>
        <div :style="{'position': 'absolute','top': '150px','left': '1567px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">RDL-4</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_4 <= -0.16">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_4 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">VR-4</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_4}} &#13221;</p>

        </div>

        <div :style="{'position': 'absolute','top': '150px','left': '1710px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">RDL-5</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_5 <= -0.16">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_5 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">VR-5</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_5}} &#13221;</p>

        </div>

        <div :style="{'position': 'absolute','top': '165px','left': '424px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <img src="images/h11.png" width="40" v-if="pump.p401a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','position':'absolute','top':'70px'}">P-401</p>
        </div>
        <div :style="{'position': 'absolute','top': '275px','left': '424px','display':'inline-table'}" v-for="pump in pump_interval">

            <!--            <img src="images/h11.png" width="40" v-if="pump.p401b_status == '1' ">-->
            <img src="images/h22.png" width="40" >
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>
        <div :style="{'position': 'absolute','top': '459px','left': '331px','display':'inline-table'}">
            <p :style="{'color': 'white'}">P-402</p>
        </div>
        <div :style="{'position': 'absolute','top': '405px','left': '392px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <img src="images/h11.png" width="40" v-if="pump.p402a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
        </div>
        <div :style="{'position': 'absolute','top': '450px','left': '393px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">B</p>
            <!--            <img src="images/h11.png" width="40" v-if="pump.p402b_status == '1' ">-->
            <img src="images/h22.png" width="40" >
        </div>
        <div :style="{'position': 'absolute','top': '493px','left': '393px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">C</p>
            <!--            <img src="images/h11.png" width="40" v-if="pump.p402c_status == '1' ">-->
            <img src="images/h22.png" width="40" >
        </div>
        <div :style="{'position': 'absolute','top': '510px','left': '595px','display':'inline-table'}">
            <img src="images/h22.png" width="40">
            <p :style="{'color': 'white'}">P-508 A</p>
        </div>
        <div :style="{'position': 'absolute','bottom': '225px','left': '706px','display':'inline-table'}">
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <img src="images/h22.png" width="40">
            <p :style="{'color': 'white','position':'absolute','top':'70px'}">P-508</p>
        </div>
        <div :style="{'position': 'absolute','bottom': '115px','left': '706px','display':'inline-table'}">

            <img src="images/h22.png" width="40">
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>
        <div :style="{'position': 'absolute','bottom': '428px','left': '1075px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <!--            <img src="images/h11.png" width="40" v-if="pump.p403a_status == '1' ">-->
            <img src="images/h22.png" width="40" >
            <p :style="{'color': 'white','position':'absolute','top':'55px'}">P-403</p>
        </div>
        <div :style="{'position': 'absolute','bottom': '341px','left': '1075px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">B</p>
            <img src="images/h11.png" width="40" v-if="pump.p403b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
        </div>
        <div :style="{'position': 'absolute','top': '240px','left': '1362px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <img src="images/h11.png" width="40" v-if="pump.p405a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','position':'absolute','top':'70px'}">P-405</p>
        </div>
        <div :style="{'position': 'absolute','top': '349px','left': '1362px','display':'inline-table'}" v-for="pump in pump_interval">

            <img src="images/h11.png" width="40" v-if="pump.p405b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>
        <div :style="{'position':'absolute','bottom': '161px','left': '1570px','display':'inline-table'}">
            <p>P-404</p>
        </div>

        <div :style="{'position': 'absolute','bottom': '147px','left': '1504px','display':'inline-table'}" v-for="pump in pump_interval">
            <span :style="{'color': 'white !important'}">A  </span>
            <img src="images/h111.png" width="30" v-if="pump.p404a_status == '1' ">
            <img src="images/h221.png" width="30" v-else>

        </div>
        <div :style="{'position': 'absolute','bottom': '147px','left': '1640px','display':'inline-table'}" v-for="pump in pump_interval">
            <!--            <img src="images/h111.png" width="30" v-if="pump.p404b_status == '1' ">-->
            <img src="images/h221.png" width="30" >
            <span :style="{'color': 'white !important'}">  B</span>
        </div>
        <div :style="{'position': 'absolute','top': '225px','left': '1465px','display':'inline-table'}">
            <img src="images/vg22.png" width="30" v-if="valves_status.bvo_8 == 1 ">
            <img src="images/vg1.png" width="30" v-else>
            <span :style="{'color': 'white !important'}">  BOV-8</span>
        </div>
        <div :style="{'position': 'absolute','top': '225px','left': '1607px','display':'inline-table'}">
            <img src="images/vg22.png" width="30" v-if="valves_status.bvo_9 == 1 ">
            <img src="images/vg1.png" width="30" v-else>
            <span :style="{'color': 'white !important'}">  BOV-9</span>
        </div>
        <div :style="{'position': 'absolute','top': '225px','left': '1749px','display':'inline-table'}">
            <img src="images/vg22.png" width="30" v-if="valves_status.bvo_10 == 1 ">
            <img src="images/vg1.png" width="30" v-else>
            <span :style="{'color': 'white !important'}">  BOV-10</span>
        </div>
        <div :style="{'position': 'absolute','top': '443px','left': '1290px','display':'inline-table'}">
            <span :style="{'color': 'white !important'}">  BOV-1</span>

            <img src="images/vg22.png" width="30" v-if="valves_status.bvo_1 == 1 ">
            <img src="images/vg1.png" width="30" v-else>
        </div>
        <div :style="{'position': 'absolute','top': '443px','left': '1468px','display':'inline-table'}">
            <span :style="{'color': 'white !important'}">  BOV-2</span>
            <img src="images/vg22.png" width="30" v-if="valves_status.bvo_2 == 1 ">
            <img src="images/vg1.png" width="30" v-else>
        </div>
        <div :style="{'position': 'absolute','top': '443px','left': '1648px','display':'inline-table'}">
            <span :style="{'color': 'white !important'}">  BOV-3</span>
            <img src="images/vg22.png" width="30" v-if="valves_status.bvo_3 == 1 ">
            <img src="images/vg1.png" width="30" v-else>
        </div>
        <div :style="{'position': 'absolute','top': '443px','left': '1825px','display':'inline-table'}">
            <span :style="{'color': 'white !important'}">  BOV-4</span>
            <img src="images/vg22.png" width="30" v-if="valves_status.bvo_4 == 1 ">
            <img src="images/vg1.png" width="30" v-else>
        </div>
        <footer style="background: #003749; border: none;margin-top: -3px;">
            <h3 style="text-align: center; color: white; padding:6px;margin:0px !important;">Trans Esterification | BioTech Powered By Star Automation</h3>
        </footer>
    </div>
</template>
<script>
import {screen3} from "../helpers/api";
import ProgressBar from 'vuejs-progress-bar';

export default {
    name: "Screen3",
    data() {
        return {
            dt_aio: [],
            pump_interval: [],
            valves_status:[],
            setpoint: [],
        }
    },
    methods: {
        getData() {
            const token = "Bearer " + this.currentUser.token;
            screen3(token)
                .then((res) => {
                    this.dt_aio = res.dt_aio
                   
                    this.pump_interval = res.pump_interval
                    this.valves_status = res.valves_status
                    this.setpoint = res.setpoint
                    this.showbar();
                })
                .catch((err) => {
                    console.log(err)
                });
        },
        showbar(){
            $(document).ready(function() {
                var rdl_23 = $("#rdl_23").text();
                var data23 = (100/136)*parseInt(rdl_23);
                if (data23 >= 100){
                    data23 = 100
                }
                var add_rld_23 =  data23;
                $('.rdl_23_inner').css('height', add_rld_23+'px');
////////////////////////////////////////////////
                var rdl_22 = $('#rdl_22').text();
                var data22 = (100/126)*parseInt(rdl_22);
                if (data22 >= 100){
                    data22 = 100
                }
                var add_rdl_22 =  data22;
                $('.rdl_22_inner').css('height', add_rdl_22+'px');
///////////////////////////////////////////////////
                var rdl_6 = $('#rdl_6').text();
                var data6 = (93/80)*parseInt(rdl_6);
                if (data6 >= 93){
                    data6 = 93
                }
                var add_rdl_6 =  data6;
                $('.rdl_6_inner').css('height', add_rdl_6+'px');
/////////////////////////////////////////
                var rdl_27 = $('#rdl_27').text();
                var data27 = (100/100)*parseInt(rdl_27);
                if (data27 >= 100){
                    data27 = 100
                }
                var add_rdl_27 =  data27;
                $('.rdl_27_inner').css('height', add_rdl_27+'px');
//////////////////////////////
                var rdl_7 = $('#rdl_7').text();
                var data7 = (95/80)*parseInt(rdl_7);
                if (data7 >= 95){
                    data7 = 95
                }
                var add_rdl_7 =  data7;
                $('.rdl_7_inner').css('height', add_rdl_7+'px');
///////////////////////////////
                var rdl_26 = $('#rdl_26').text();
                var data26 = (90/100)*parseInt(rdl_26);
                if (data26 >= 90){
                    data26 = 90
                }
                var add_rdl_26 =  data26;
                $('.rdl_26_inner').css('height', add_rdl_26+'px');
/////////////////////////////////
                var rdl_8 = $('#rdl_8').text();
                var data8 = (120/207)*parseInt(rdl_8);
                if (data8 >= 120){
                    data8 = 120
                }
                var add_rdl_8 =  data8;
                $('.rdl_8_inner').css('height', add_rdl_8+'px');
//////////////////////////////
                var rdl_9 = $('#rdl_9').text();
                var data9 = (120/207)*parseInt(rdl_9);
                if (data9 >= 120){
                    data9 = 120
                }
                var add_rdl_9 =  data9;
                $('.rdl_9_inner').css('height', add_rdl_9+'px');
//////////////////////////////////
                var rdl_10 = $('#rdl_10').text();
                var data10 = (120/207)*parseInt(rdl_10);
                if (data10 >= 120){
                    data10 = 120
                }
                var add_rdl_10 =  data10;
                $('.rdl_10_inner').css('height', add_rdl_10+'px');
////////////////////////////////////
                var rdl_11 = $('#rdl_11').text();
                var data11 = (120/207)*parseInt(rdl_11);
                if (data11 >= 120){
                    data11 = 120
                }
                var add_rdl_11 =  data11;
                $('.rdl_11_inner').css('height', add_rdl_11+'px');
//////////////////////////////////
                var rdl_5 = $('#rdl_5').text();
                var data5 = (120/207)*parseInt(rdl_5);
                if (data5 >= 120){
                    data5 = 120
                }
                var add_rdl_5 =  data5;
                $('.rdl_5_inner').css('height', add_rdl_5+'px');
//////////////////////////////////
                var dpl_2 = $('#dpl_2').text();
                var dpldata2 = (99/40)*parseInt(dpl_2);
                if (dpldata2 >= 99){
                    dpldata2 = 99
                }
                var add_dpl_2 =  dpldata2;
                $('.dpl_2_inner').css('height', add_dpl_2+'px');

/////////////////////////////////
                var rdl_20 = $('#rdl_20').text();
                var data20 = (100/128)*parseInt(rdl_20);
                if (data20 >= 100){
                    data20 = 100
                }
                var add_rdl_20 =  data20;
                $('.rdl_20_inner').css('height', add_rdl_20+'px');
/////////////////////////////////
                var rdl_21 = $('#rdl_21').text();
                var data21 = (100/128)*parseInt(rdl_21);
                if (data21 >= 100){
                    data21 = 100
                }
                var add_rdl_21 =  data21;
                $('.rdl_21_inner').css('height', add_rdl_21+'px');
//////////////////////////////////////
                var rdl_4 = $('#rdl_4').text();
                var data4 = (120/207)*parseInt(rdl_4);
                if (data4 >= 100){
                    data4 = 100
                }
                var add_rdl_4 =  data4;
                $('.rdl_4_inner').css('height', add_rdl_4+'px');
/////////////////////////////////////////////////
                var rdl_3 = $('#rdl_3').text();
                var data3 = (120/207)*parseInt(rdl_3);
                if (data3 >= 100){
                    data3 = 100
                }
                var add_rdl_3 =  data3;
                $('.rdl_3_inner').css('height', add_rdl_3+'px');
            })

        }
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
            return this.$store.getters.currentUser;
        }
    },
    watch: {
        //        rtd_1: function(val, oldval){
        // alert(val);
        //            var data = (92/100)*val;
        //
        //            if (data >= 100){
        //                data = 100
        //            }
        //            var detailHeight = $('.inner').css('height');
        //            detailHeight = 0;
        //            var columnHeight = parseInt(detailHeight) + data;
        //            //console.log(columnHeight);
        //            $('.inner').css('height', columnHeight+'px');
        //        }
    }
}
</script>
<style scoped>
/*///////// RDL 3 bar////////*/
.rdl_21_inner, .rdl_21_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_21_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_21_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 3 bar////////*/
.dpl_2_inner, .dpl_2_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.dpl_2_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.dpl_2_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 23 bar////////*/
.rdl_23_inner, .rdl_23_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_23_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_23_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 22 bar////////*/
.rdl_22_inner, .rdl_22_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_22_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_22_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 6 bar////////*/
.rdl_6_inner, .rdl_6_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_6_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_6_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 27 bar////////*/
.rdl_27_inner, .rdl_27_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_27_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_27_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 7 bar////////*/
.rdl_7_inner, .rdl_7_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_7_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_7_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 26 bar////////*/
.rdl_26_inner, .rdl_26_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_26_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_26_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 28 bar////////*/
.rdl_8_inner, .rdl_8_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_8_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_8_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 9 bar////////*/
.rdl_9_inner, .rdl_9_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_9_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_9_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 10 bar////////*/
.rdl_10_inner, .rdl_10_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_10_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_10_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 11 bar////////*/
.rdl_11_inner, .rdl_11_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_11_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_11_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 5 bar////////*/
.rdl_5_inner, .rdl_5_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_5_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_5_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 4 bar////////*/
.rdl_4_inner, .rdl_4_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_4_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_4_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 4 bar////////*/
.rdl_3_inner, .rdl_3_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_3_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_3_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 4 bar////////*/
.rdl_20_inner, .rdl_20_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_20_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_20_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/


p{
    color: white;
    margin: 0px;
    font-size: 15px;
}
span{
    color:#BFFF00 !important;
    font-size: 15px;
}
.skill{
    position: absolute;
    color: white;
}
.outer {
    border: 1px solid #ccc;
    overflow: hidden;
    background: darkslategrey !important;
    position: relative;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}

</style>
