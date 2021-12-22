<template>
    <div class="col-md-12" style="padding: 0px;">
        <!--    <img :src="backgroundImageUrl" />-->
        {{getData()}}
        <img src="images/latestScreen1.png" :style="{'width':'100%','height':'100%'}"/>
        <div style="position: absolute;top: 80px;left: 51px;">
            <p style="font-size: 22px;">{{dt_aio.timing}} test</p>
              
        </div>
        <div :style="{'position': 'absolute','top': '197px','left': '1417px','display':'inline-table'}">
           
            <!-- <p :style="{'color': 'white','text-center':'center'}">PT-1</p> -->
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.pt_1 <= 0">0.00 Bar</span>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.pt_1}} Bar</span>
        </div>
         <div :style="{'position': 'absolute','top': '733px','left': '110px','display':'inline-table'}">
           <!-- <p :style="{'color': 'white'}">VG-3</p> -->
            <span :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.pit_level <= 0">0.00 in</span>
            <span :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.pit_level}} in</span>
        </div>

        <div class="skill" :style="{'display': 'inline-flex','left': '398px','top': '126px'}">
            <div class="outer" :style="{'width': '17px','height': '121px'}">
                <div class="rdl_13_inner" data-progress="" v-if="parseInt(dt_aio.rdl_13) > parseInt(setpoint.rdl13_h)" style="background-color: #1C96C5 !important;">
                    <div></div>
                </div>
                <div class="rdl_13_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_13) < parseInt(setpoint.rdl13_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_13_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="rdl_13" style="margin: auto; display: none;" > {{dt_aio.rdl_13}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '199px','left': '324px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white','background-color':'black','text-align':'center'}">RDL-13</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_13 <= -0.19">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_13 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','text-align':'center'}">VR-13</p>-->
            <p><span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_13}} m³</span></p>
        </div>
        <div :style="{'position': 'absolute','top': '130px','left': '324px','display':'inline-table'}">
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_9 > 600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rtd_9 }} &#8451;</p>
        </div>

        <div class="skill" :style="{'display': 'inline-flex','left': '546px','top': '126px'}">
            <div class="outer" :style="{'width': '17px','height': '121px'}">
                <div class="rdl_14_inner" data-progress="" v-if="parseInt(dt_aio.rdl_14) > parseInt(setpoint.rdl14_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_14_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_14) < parseInt(setpoint.rdl14_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_14_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="rdl_14" style="margin: auto; display: none;" > {{dt_aio.rdl_14}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '197px','left': '472px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white','background-color':'black','text-align':'center'}">RDL-14</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_14 <= -0.19">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_14 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','text-align':'center'}">VR-14</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_14}} m³</p>

        </div>
        <div :style="{'position': 'absolute','top': '128px','left': '472px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white'}">RTD-10</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_10 > 600 ">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rtd_10 }} &#8451;</p>

        </div>

        <div class="skill" :style="{'display': 'inline-flex','left': '693px','top': '126px'}">
            <div class="outer" :style="{'width': '17px','height': '121px'}">
                <div class="rdl_15_inner" data-progress="" v-if="parseInt(dt_aio.rdl_15) > parseInt(setpoint.rdl15_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_15_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_15) < parseInt(setpoint.rdl15_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_15_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="rdl_15" style="margin: auto; display: none;" > {{dt_aio.rdl_15}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '195px','left': '619px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white','background-color':'black','text-align':'center'}">RDL-15</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_15 <= -0.19">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_15 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','text-align':'center'}">VR-15</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_15}} m³</p>
        </div>

        <div :style="{'position': 'absolute','top': '127px','left': '619px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white'}">RTD-11</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_11 > 600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rtd_11 }} &#8451;</p>


        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '1296px','top': '78px'}">
            <div class="outer" :style="{'width': '15px','height': '66px'}">
                <div class="rdl_25_inner" data-progress="" v-if="parseInt(dt_aio.rdl_25) > parseInt(setpoint.rdl25_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_25_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_25) < parseInt(setpoint.rdl25_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_25_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="rdl_25" style="margin: auto; display: none;" > {{dt_aio.rdl_25}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '90px','left': '1215px','display':'inline-table'}">
<!--            <p :style="{'background-color':'#BDBFC0','color':'black','padding':'0px 3px','font-weight':'700','text-align':'center'}">H2SO4</p>-->
<!--                        <p :style="{'color': 'white','background-color':'black','text-align':'center'}">RDL-25</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_25 <= -0.20">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_25 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','text-align':'center'}">VR-25</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.rdl25_volume}} m³</p>
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.rdl25_mass}} Kg</p>
            <!--            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">m³</span>-->
        </div>

        <div class="skill" :style="{'display': 'inline-flex','left': '1365px','top': '306px'}">
            <div class="outer" :style="{'width': '15px','height': '83px'}">
                <div class="rdl_24_inner" data-progress="" v-if="parseInt(dt_aio.rdl_24) > parseInt(setpoint.rdl24_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_24_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_24) < parseInt(setpoint.rdl24_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_24_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="rdl_24" style="margin: auto; display: none;" > {{dt_aio.rdl_24}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '346px','left': '1290px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','text-align':'center'}">RDL-24</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_24 <= -0.20">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_24 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','text-align':'center'}">VR-24</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_24}} m³</p>
        </div>
        <div :style="{'position': 'absolute','top': '300px','left': '1290px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-33</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_33>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_33}} &#8451;</p>

        </div>

        <div class="skill" :style="{'display': 'inline-flex','left': '1170px','top': '306px'}">
            <div class="outer" :style="{'width': '15px','height': '83px'}">
                <div class="rdl_23_inner" data-progress="" v-if="parseInt(dt_aio.rdl_23) > parseInt(setpoint.rdl23_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_23_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_23) < parseInt(setpoint.rdl23_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_23_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="rdl_23" style="margin: auto; display: none;" > {{dt_aio.rdl_23}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '346px','left': '1095px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','text-align':'center'}">RDL-23</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_23 <= -0.10">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_23 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','text-align':'center'}">VR-23</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_23}} m³</p>

        </div>
        <div :style="{'position': 'absolute','top': '300px','left': '1095px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-32</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_32 > 600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_32}} &#8451;</p>

        </div>


        <div class="skill" :style="{'display': 'inline-flex','left': '1029px','top': '602px'}">
            <div class="outer" :style="{'width': '15px','height': '73px'}">
                <div class="rdl_21_inner" data-progress="" v-if="parseInt(dt_aio.rdl_21) > parseInt(setpoint.rdl21_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_21_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_21) < parseInt(setpoint.rdl21_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_21_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="rdl_21" style="margin: auto; display: none;" > {{dt_aio.rdl_21}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '627px','left': '909px','display':'inline-table'}">
<!--            <p :style="{'background-color':'#BDBFC0','color':'black','padding':'0px 3px','font-weight':'700','text-align':'center'}">SP#2</p>-->
<!--            <p :style="{'color': 'white','background-color':'black','text-align':'center'}">RDL-21</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_21 <= -0.34">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_21 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','text-align':'center'}">VR-21</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_21}} m³</p>
        </div>

        <div class="skill" :style="{'display': 'inline-flex','left': '1168px','top': '602px'}">
            <div class="outer" :style="{'width': '15px','height': '73px'}">
                <div class="rdl_20_inner" data-progress="" v-if="parseInt(dt_aio.rdl_20) > parseInt(setpoint.rdl20_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_20_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_20) < parseInt(setpoint.rdl20_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_20_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="rdl_20" style="margin: auto; display: none;" > {{dt_aio.rdl_20}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '628px','left': '1067px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','text-align':'center'}">RDL-20</p>-->
<!--            <p :style="{'background-color':'#BDBFC0','color':'black','padding':'0px 3px','font-weight':'700','text-align':'center'}">SP#1</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_20 <= -0.34">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_20 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','text-align':'center'}">VR-20</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_20}} m³</p>

        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '1535px','top': '226px'}">
            <div class="outer" :style="{'width': '15px','height': '137px'}">
                <div class="rdl_12_inner" data-progress="" v-if="parseInt(dt_aio.rdl_12) > parseInt(setpoint.rdl12_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_12_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_12) < parseInt(setpoint.rdl12_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_12_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="rdl_12" style="margin: auto; display: none;" > {{dt_aio.rdl_12}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '305px','left': '1447px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','text-align':'center'}">RDL-12</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_12 <= -0.47">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_12 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','text-align':'center'}">VR-12</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_12}} m³</p>

        </div>
        <div :style="{'position': 'absolute','top': '230px','left': '1447px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-5</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_5>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_5}} &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '252px','left': '1457px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white'}">RTD-5</p>-->
            <p :style="{'background-color':'#D5D4D6','color':'black','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">GLV</p>
        </div>
        <div :style="{'position': 'absolute','top': '275px','left': '1447px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-6</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_6>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_6}} &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '360px','left': '1447px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-7</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_7>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_7}} &#8451;</p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '1880px','top': '464px'}">
            <div class="outer" :style="{'width': '15px','height': '80px'}">
                <div class="rdl_18_inner" data-progress="" v-if="parseInt(dt_aio.rdl_18) > parseInt(setpoint.rdl18_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_18_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_18) < parseInt(setpoint.rdl18_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_18_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="rdl_18" style="margin: auto; display: none;" > {{dt_aio.rdl_18}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '503px','left': '1765px','display':'inline-table'}">
<!--            <p :style="{'background-color':'#BDBFC0','color':'black','padding':'0px 3px','font-weight':'700','text-align':'center'}">GST#1</p>-->
<!--            <p :style="{'color': 'white','background-color':'black','text-align':'center'}">RDL-18</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_18 <= -0.12">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_18 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','text-align':'center'}">VR-18</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_18}} m³</p>
        </div>
        <div :style="{'position': 'absolute','top': '460px','left': '1765px','display':'inline-table'}">
<!--                <p :style="{'color': 'white','text-align':'center'}">RTD-34</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_34>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_34}} &#8451;</p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '682px','top': '517px'}">
            <div class="outer" :style="{'width': '15px','height': '120px'}">
                <div class="rdl_1_inner" data-progress="" v-if="parseInt(dt_aio.rdl_1) > parseInt(setpoint.rdl1_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_1_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_1) < parseInt(setpoint.rdl1_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_1_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="rdl_1" style="margin: auto; display: none;" > {{dt_aio.rdl_1}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '592px','left': '600px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white','background-color':'black','text-align':'center'}">RDL-1</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_1 <= -0.16">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_1 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','text-align':'center'}">VR-1</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_1}} m³</p>
        </div>

        <div :style="{'position': 'absolute','top': '515px','left': '600px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white'}">RTD-2</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_2>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rtd_2 }} &#8451;</p>

        </div>

        <div class="skill" :style="{'display': 'inline-flex','left': '810px','top': '517px'}">
            <div class="outer" :style="{'width': '15px','height': '120px'}">
                <div class="rdl_2_inner" data-progress="" v-if="parseInt(dt_aio.rdl_2) > parseInt(setpoint.rdl2_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_2_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_2) < parseInt(setpoint.rdl2_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_2_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="rdl_2" style="margin: auto; display: none;" > {{dt_aio.rdl_2}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '590px','left': '729px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','text-align':'center'}">RDL-2</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_2 <= -0.16">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_2 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','text-align':'center'}">VR-2</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_2}} m³</p>
        </div>

        <div :style="{'position': 'absolute','top': '515px','left': '729px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white'}">RTD-3</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_3>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rtd_3 }} &#8451;</p>

        </div>



        <div class="skill" :style="{'display': 'inline-flex','left': '1335px','top': '635px'}">
            <div class="outer" :style="{'width': '15px','height':'76px'}">
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
            <p id="rdl_3" style="margin: auto; display: none;" > {{dt_aio.rdl_3}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '665px','left': '1253px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','text-align':'center','background':'black'}">RDL-3</p>-->
<!--            <p :style="{'background-color':'#BDBFC0','color':'black','padding':'0px 3px','font-weight':'700','text-align':'center'}">D405A</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_3 <= -0.16">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_3 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','text-align':'center'}">VR-3</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_3}} m³</p>

        </div>

        <div class="skill" :style="{'display': 'inline-flex','left': '1490px','top': '635px'}">
            <div class="outer" :style="{'width': '15px','height': '76px'}">
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
            <p id="rdl_4" style="margin: auto; display: none;" > {{dt_aio.rdl_4}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '665px','left': '1409px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','text-align':'center','background':'black'}">RDL-4</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_4 <= -0.16">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_4 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','text-align':'center'}">VR-4</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_4}} m³</p>
        </div>

        <div class="skill" :style="{'display': 'inline-flex','left': '1647px','top': '635px'}">
            <div class="outer" :style="{'width': '15px','height': '76px'}">
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
            <p id="rdl_5" style="margin: auto; display: none;" > {{dt_aio.rdl_5}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '665px','left': '1566px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','text-align':'center','background':'black'}">RDL-5</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_5 <= -0.16">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_5 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','text-align':'center'}">VR-5</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_5}} m³</p>
        </div>

        <div :style="{'position': 'absolute','top': '268px','left': '1873px','display':'inline-table'}">
            <!--<p>Total Flow</p>
            <p :style="{'color':'#BFFF00','margin-bottom': '12px','background-color':'black'}">00.00 m³</p>-->
            <p :style="{'color': 'white','margin-bottom': '-3px'}">FM-18</p>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_18 <= -0.93">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_18}}</span>
            <p :style="{'color': 'white !important'}"> m³/hr</p>
        </div>
        <div :style="{'position': 'absolute','top': '181px','left': '1703px','display':'inline-table'}">
            <!--<p>Total Flow</p>
            <p :style="{'color':'#BFFF00','background-color':'black'}">00.00 m³</p>-->
            <p :style="{'color': 'white'}">FM-20</p>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_20 <= -0.06">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.fm_20 }}</span>
            <p :style="{'color': 'white !important','margin-top':'5px'}">m³/hr</p>
        </div>

        <div :style="{'position': 'absolute','top': '258px','left': '1583px','display':'inline-table'}">
<!--            <p :style="{'color': 'black','font-weight':'800','margin-bottom': '-5px'}">RTD-8</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_8>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_8}} &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '20px','left': '791px','display':'inline-table'}">
            <p :style="{'color': 'white'}">FM-23</p>
<!--            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="fm.fm_23 <= -1.56">Error</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}">0.00</span>
            <p :style="{'color': 'white !important','margin-top':'5px'}">m³/hr</p>
            <!--<p>Total Flow</p>
            <p :style="{'color':'#BFFF00','background-color':'black'}">00.00 m³</p>-->
        </div>
        <div :style="{'position': 'absolute','top': '37px','left': '615px','display':'inline-table'}">
            <div class="fm-changes-1" style="float: left">
                <!--<p>Total Flow</p>
                <p :style="{'color':'#BFFF00','margin-top':'-5px','background-color':'black '}">00.00 m³</p>-->
            </div>
            <div style="float:right;margin-left:8px">
                <span :style="{'color': 'white !important'}">FM-24</span>
<!--                <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="fm.fm_24 <= -1.56">Error</span>-->
                <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" >0.00</span>
                <span :style="{'color': 'white !important','margin-left':'5px'}">m³/hr</span>
            </div>

        </div>
        <div :style="{'position': 'absolute','top': '281px','left': '1195px','display':'inline-table'}">
            <p :style="{'color': 'white',}">FM-19</p>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_19 <= -0.93">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_19}}</span>
            <p :style="{'color': 'white !important'}">m³/hr</p>
            <!--<p>Total Flow</p>
            <p :style="{'color':'#BFFF00','background-color':'black'}">00.00 m³</p>-->
        </div>
        <div :style="{'position': 'absolute','top': '421px','left': '130px','display':'inline-table'}">
            <p :style="{'color': 'white'}">FM-25</p>
<!--            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="fm.fm_25 <= -0.93">Error</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" >0.00</span>
            <p :style="{'color': 'white !important'}">m³/hr</p>
            <!--<p>Total Flow</p>
            <p :style="{'color':'#BFFF00','background-color':'black'}">00.00 m³</p>-->
        </div>

        <div :style="{'position': 'absolute','top': '225px','left': '171px','display':'inline-table'}" v-for="pump in pump_interval">
            <p style="position: absolute;top:47px">P-707</p>
            <img src="images/h11.png" width="40" v-if="pump.p707a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','position': 'absolute',
    'top': '-20px',
    'left': '12px'}">A</p>
        </div>
        <div :style="{'position': 'absolute','top': '312px','left': '170px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','position': 'absolute',
    'top': '25px',
    'left': '12px'}">B</p>
            <img src="images/h11.png" width="40" v-if="pump.p707b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
        </div>
        <div :style="{'position': 'absolute','top': '337px','left': '242px','display':'inline-table'}" v-for="pump in pump_interval">
            <p style="position: absolute;top:70px">P-705</p>
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <img src="images/h11.png" width="40" v-if="pump.p705a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
        </div>

        <div :style="{'position': 'absolute','top': '447px','left': '241px','display':'inline-table'}" v-for="pump in pump_interval">

            <img src="images/h11.png" width="40" v-if="pump.p705b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>
        <div :style="{'position': 'absolute','top': '534px','left': '443px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white'}">RTD-1</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_1>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rtd_1 }} &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '534px','left': '323px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white'}">RTD-4</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_4>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_4}} &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '658px','left': '494px','display':'inline-table'}" v-for="pump in pump_interval">
            <p style="position: absolute;top:70px">P-102</p>
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <img src="images/h11.png" width="40" v-if="pump.p102a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>

        </div>
        <div :style="{'position': 'absolute','top': '769px','left': '494px','display':'inline-table'}" v-for="pump in pump_interval">

            <img src="images/h11.png" width="40" v-if="pump.p102b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>

        <div :style="{'position': 'absolute','top': '674px','left': '753px','display':'inline-table'}" v-for="pump in pump_interval">
            <p style="position: absolute;top:70px">P-103</p>
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <img src="images/h11.png" width="40" v-if="pump.p103a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>

        </div>
        <div :style="{'position': 'absolute','top': '783px','left': '753px','display':'inline-table'}" v-for="pump in pump_interval">

            <img src="images/h11.png" width="40" v-if="pump.p103b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>
        <div :style="{'position': 'absolute','top': '319px','left': '810px','display':'inline-table'}" v-for="pump in pump_interval">
            <p style="position: absolute;top:70px">P-702</p>
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <img src="images/h11.png" width="40" v-if="pump.p702a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>

        </div>
        <div :style="{'position': 'absolute','top': '429px','left': '810px','display':'inline-table'}" v-for="pump in pump_interval">

            <img src="images/h11.png" width="40" v-if="pump.p702b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>
        <div :style="{'position': 'absolute','top': '406px','left': '1179px','display':'inline-table'}" v-for="pump in pump_interval">
            <p style="position: absolute;top:57px">P-202</p>
            <img src="images/h11.png" width="40" v-if="pump.p202a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">A</p>
        </div>
        <div :style="{'position': 'absolute','top': '493px','left': '1179px','display':'inline-table'}" v-for="pump in pump_interval">

            <img src="images/h11.png" width="40" v-if="pump.p202b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>
        <div :style="{'position': 'absolute','top': '406px','left': '1375px','display':'inline-table'}" v-for="pump in pump_interval">
            <p style="position: absolute;top:57px">P-203</p>
            <img src="images/h11.png" width="40" v-if="pump.p203a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">A</p>
        </div>
        <div :style="{'position': 'absolute','top': '493px','left': '1375px','display':'inline-table'}" v-for="pump in pump_interval">

            <img src="images/h11.png" width="40" v-if="pump.p203b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>
        <div :style="{'position': 'absolute','top': '406px','left': '1549px','display':'inline-table'}" v-for="pump in pump_interval">
            <p style="position: absolute;top:57px">P-405</p>
            <img src="images/h11.png" width="40" v-if="pump.p405a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">A</p>
        </div>
        <div :style="{'position': 'absolute','top': '493px','left': '1548px','display':'inline-table'}" v-for="pump in pump_interval">

            <img src="images/h11.png" width="40" v-if="pump.p405b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>
        <div :style="{'position': 'absolute','top': '177px','left': '1199px','display':'inline-table'}" v-for="pump in pump_interval">
            <img src="images/h11.png" width="40" v-if="pump.p812b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white'}">P-812 B</p>
        </div>
        <div :style="{'position': 'absolute','top': '93px','left': '1470px','display':'inline-table'}" v-for="pump in pump_interval">
            <img src="images/h11.png" width="40" v-if="pump.p812a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white'}">P-812 A</p>
        </div>
        <div :style="{'position': 'absolute','top': '581px','left': '1720px','display':'inline-table'}" v-for="pump in pump_interval">
            <img src="images/h22.png" width="40">
            <p :style="{'color': 'white'}">GST Circulation Pump</p>
        </div>
        <div :style="{'position': 'absolute','top': '798px','left': '137px','display':'inline-table'}" v-for="pump in pump_interval">
            <img src="images/h111.png" width="25" v-if="pump.p810a_status == '1' ">
            <img src="images/h221.png" width="25" v-else>
        </div>
        <div :style="{'position': 'absolute','top': '798px','left': '163px','display':'inline-table'}" v-for="pump in pump_interval">
            <img src="images/h111.png" width="25" v-if="pump.p810b_status == '1' ">
            <img src="images/h221.png" width="25" v-else>
        </div>
        <div :style="{'position': 'absolute','top': '798px','left': '192px','display':'inline-table'}" v-for="pump in pump_interval">
            <img src="images/h111.png" width="25" v-if="pump.p810c_status == '1' ">
            <img src="images/h221.png" width="25" v-else>
        </div>
        <div :style="{'position': 'absolute','top': '798px','left': '230px','display':'inline-table'}" v-for="pump in pump_interval">
            <img src="images/h111.png" width="25" v-if="pump.sp_status == '1' ">
            <img src="images/h221.png" width="25" v-else>
        </div>
        <footer style="background: #003749; border: none; margin-top:-3px;">
            <h3 style="text-align: center; color: white; padding:6px;margin:0px !important;">Pre Esterification | BioTech Powered By Star Automation</h3>
        </footer>
    </div>
</template>

<script>
import {logout} from "../helpers/auth";
import {screen1} from "../helpers/api";


export default {
    name: "Screen1",
     
    data() {
        return {
             
          
            dt_aio: [],
            fm: [],
            pump_interval: [],
            setpoint:[],
            vr:[],
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
    methods: {
        getData() {
            // var aaa =1;

            const token = "Bearer "+this.currentUser.token;
            screen1(token)
                .then((res)=>{
                    this.dt_aio = res.dt_aio
                    this.pump_interval = res.pump_interval
                    this.setpoint = res.setpoint
                    this.showbar();

                })
                .catch((err)=>{
                    console.log(err)
                });
        },
        showbar(){
            $(document).ready(function() {
                var rdl_13 = $("#rdl_13").text();
                var data13 = (121 / 240) * parseInt(rdl_13);
                if (data13 >= 100) {
                    data13 = 100
                }
                var add_rld_13 = data13;
                $('.rdl_13_inner').css('height', add_rld_13 + 'px');
                ////////////////////////
                var rdl_20 = $("#rdl_20").text();
                var data20 = (73 / 128) * parseInt(rdl_20);
                if (data20 >= 73) {
                    data20 = 73
                }
                var add_rld_20 = data20;
                $('.rdl_20_inner').css('height', add_rld_20 + 'px');
                ////////////////////////////
                var rdl_14 = $("#rdl_14").text();
                var data14 = (121 / 240) * parseInt(rdl_14);
                if (data14 >= 121) {
                    data14 = 121
                }
                var add_rld_14 = data14;
                $('.rdl_14_inner').css('height', add_rld_14 + 'px');
                ////////////////////////////
                var rdl_15 = $("#rdl_15").text();
                var data15 = (121 / 240) * parseInt(rdl_15);
                if (data15 >= 121) {
                    data15 = 121
                }
                var add_rld_15 = data15;
                $('.rdl_15_inner').css('height', add_rld_15 + 'px');
                ////////////////////////
                var rdl_21 = $("#rdl_21").text();
                var data21 = (73 / 128) * parseInt(rdl_21);
                if (data21 >= 73) {
                    data21 = 73
                }
                var add_rld_21 = data21;
                $('.rdl_21_inner').css('height', add_rld_21 + 'px');
                ////////////////////////
                var rdl_24 = $("#rdl_24").text();
                var data24 = (83 / 240) * parseInt(rdl_24);
                if (data24 >= 83) {
                    data24 = 83
                }
                var add_rld_24 = data24;
                $('.rdl_24_inner').css('height', add_rld_24 + 'px');
                ////////////////////////
                var rdl_25 = $("#rdl_25").text();
                var data25 = (66 / 79) * parseInt(rdl_25);
                if (data25 >= 66) {
                    data25 = 66
                }
                var add_rld_25 = data25;
                $('.rdl_25_inner').css('height', add_rld_25 + 'px');
                ////////////////////////
                var rdl_12 = $("#rdl_12").text();
                var data12 = (137 / 595) * parseInt(rdl_12);
                if (data12 >= 137) {
                    data12 = 137
                }
                var add_rld_12 = data12;
                $('.rdl_12_inner').css('height', add_rld_12 + 'px');
                ////////////////////////
                var rdl_18 = $("#rdl_18").text();
                var data18 = (80 / 160) * parseInt(rdl_18);
                if (data18 >= 80) {
                    data18 = 80
                }
                var add_rld_18 = data18;
                $('.rdl_18_inner').css('height', add_rld_18 + 'px');
                ////////////////////////
                var rdl_3 = $("#rdl_3").text();
                var data3 = (76 / 207) * parseInt(rdl_3);
                if (data3 >= 76) {
                    data3 = 76
                }
                var add_rld_3 = data3;
                $('.rdl_3_inner').css('height', add_rld_3 + 'px');
                ////////////////////////
                var rdl_4 = $("#rdl_4").text();
                var data4 = (76 / 207) * parseInt(rdl_4);
                if (data4 >= 76) {
                    data4 = 76
                }
                var add_rld_4 = data4;
                $('.rdl_4_inner').css('height', add_rld_4 + 'px');
                ////////////////////////
                var rdl_5 = $("#rdl_5").text();
                var data5 = (76 / 207) * parseInt(rdl_5);
                if (data5 >= 76) {
                    data5 = 76
                }
                var add_rld_5 = data5;
                $('.rdl_5_inner').css('height', add_rld_5 + 'px');
                ////////////////////////
                var rdl_22 = $("#rdl_22").text();
                var data22 = (73 / 126) * parseInt(rdl_22);
                if (data22 >= 73) {
                    data22 = 73
                }
                var add_rld_22 = data22;
                $('.rdl_22_inner').css('height', add_rld_22 + 'px');
                ////////////////////////
                var rdl_23 = $("#rdl_23").text();
                var data23 = (83 / 240) * parseInt(rdl_23);
                if (data23 >= 83) {
                    data23 = 83
                }
                var add_rld_23 = data23;
                $('.rdl_23_inner').css('height', add_rld_23 + 'px');
                ////////////////////////
                var rdl_1 = $("#rdl_1").text();
                var data1 = (120 / 207) * parseInt(rdl_1);
                if (data1 >= 120) {
                    data1 = 120
                }
                var add_rld_1 = data1;
                $('.rdl_1_inner').css('height', add_rld_1 + 'px');
                ////////////////////////
                var rdl_2 = $("#rdl_2").text();
                var data2 = (120 / 207) * parseInt(rdl_2);
                if (data2 >= 100) {
                    data2 = 100
                }
                var add_rld_2 = data2;
                $('.rdl_2_inner').css('height', add_rld_2 + 'px');
                ////////////////////////
                var rdl_27 = $("#rdl_27").text();
                var data27 = (67 / 5.25) * parseInt(rdl_27);
                if (data27 >= 100) {
                    data27 = 100
                }
                var add_rld_27 = data27;
                $('.rdl_27_inner').css('height', add_rld_27 + 'px');
                console.log(parseInt(rdl_2))
            })
        }
    },
    computed: {
        currentUser(){
            return this.$store.getters.currentUser
        }
    },
    watch: {}
}
</script>

<style scoped>
/*///////// RDL 13 bar////////*/
.rdl_13_inner, .rdl_13_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_13_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_13_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 14 bar////////*/
.rdl_14_inner, .rdl_14_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_14_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_14_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 15 bar////////*/
.rdl_15_inner, .rdl_15_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_15_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_15_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 21 bar////////*/
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
/*///////// RDL 24 bar////////*/
.rdl_24_inner, .rdl_24_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_24_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_24_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 24 bar////////*/
.rdl_25_inner, .rdl_25_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_25_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_25_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 12 bar////////*/
.rdl_12_inner, .rdl_12_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_12_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_12_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 12 bar////////*/
.rdl_18_inner, .rdl_18_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_18_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_18_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 12 bar////////*/
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
/*///////// RDL 12 bar////////*/
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
/*///////// RDL 12 bar////////*/
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
/*///////// RDL 12 bar////////*/
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
/*///////// RDL 12 bar////////*/
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
/*///////// RDL 12 bar////////*/
.rdl_1_inner, .rdl_1_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_1_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_1_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 12 bar////////*/
.rdl_2_inner, .rdl_2_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_2_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_2_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 12 bar////////*/
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
/*///////// RDL 12 bar////////*/
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
    font-size: 15px ;
}
span{
    font-size: 15px ;
}
span{
    color:#BFFF00 !important;
}
.skill{
    position: absolute;
    color: white;
}
.outer {
    /*border: 1px solid #ccc;*/
    background: darkslategrey !important;
    overflow: hidden;
    position: relative;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}



</style>
