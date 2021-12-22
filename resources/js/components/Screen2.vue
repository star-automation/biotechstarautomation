
<template>
    <div class="col-md-12" style="padding: 0px;">
        <!--    <img :src="backgroundImageUrl" />-->
        {{getData()}}
        <img src="images/screen2new.png" :style="{'width':'100%','height':'100%'}"/>
        <div style="position: absolute;top: 70px;left: 51px;">
            <p style="font-size: 22px;">{{dt_aio.timing}}</p>
        </div>
        <div :style="{'position': 'absolute','top': '151px','left': '1130px','display':'inline-table'}">
            <!-- <p :style="{'color': 'white','margin-bottom':'-5px'}">PT-4</p> -->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.pt_4 <= 0">0.00 Bar</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.pt_4}} Bar</span>
        </div>
 <div :style="{'position': 'absolute','top': '276px','left': '65px','display':'inline-table'}">
            <!-- <p :style="{'color': 'white','margin-bottom':'-5px'}">PT-2</p> -->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.pt_2 <= 0">0.00 Bar</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.pt_2}} Bar</span>
        </div>
<table class="table col-md-2"  style="position: absolute;top: 36px;left: 1287px;border: 1px solid;width: 214px;color: white;">
    <tr>
        <th colspan="2" class="text-center">Recovery</th>
    </tr>
    <tr>
        <td>IN</td>
        <td>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_14 <= -0.06">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.fm_14 }}</span>
            <span :style="{'color': 'white !important'}"> &#13221;/hr </span>
        </td>
    </tr>
    <tr>
        <td>Reflux</td>
        <td>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_16 <= -0.06">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_16}}</span>
            <span :style="{'color': 'white !important'}"> &#13221;/hr </span>
        </td>
    </tr>
    <tr>
        <td>Out</td>
        <td>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_15 <= -0.06">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_15}}</span>
            <span :style="{'color': 'white !important'}"> &#13221;/hr </span>
        </td>
    </tr>
    <tr>
        <td>Transfer</td>
        <td>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_7 <= -0.06">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_7}}</span>
            <span :style="{'color': 'white !important'}"> &#13221;/hr </span>
        </td>
    </tr>
    <tr>
        <td>Drain</td>
        <td>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_17 <= -0.06">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_17}}</span>
            <span :style="{'color': 'white !important'}"> &#13221;/hr </span>
        </td>
    </tr>
</table>

        <div class="skill" :style="{'display': 'inline-flex','left': '1617px','top': '564px'}">
            <div class="outer" :style="{'width': '20px','height': '100px'}">
                <div class="rdl_16_inner" data-progress="" v-if="parseInt(dt_aio.rdl_16) > parseInt(setpoint.rdl16_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_16_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_16) < parseInt(setpoint.rdl16_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_16_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="rdl_16" style="margin: auto; display: none;" > {{dt_aio.rdl_16}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '612px','left': '1511px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">RDL-16</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_16 <= -0.12">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_16 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">VR-16</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_16}} &#13221;</p>
        </div>
        <div :style="{'position': 'absolute','top': '547px','left': '1516px','display':'inline-table'}">

        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '1696px','top': '364px'}">
            <div class="outer" :style="{'width': '20px','height': '92px'}">
                <div class="rdl_19_inner" data-progress="" v-if="parseInt(dt_aio.rdl_19) > parseInt(setpoint.rdl19_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_19_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_19) < parseInt(setpoint.rdl19_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_19_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="rdl_19" style="margin: auto; display: none;" > {{dt_aio.rdl_19}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '399px','left': '1594px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">RDL-19</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_19 <= -0.12">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_19 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">VR-19</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_19}} &#13221;</p>
        </div>
        <div :style="{'position': 'absolute','top': '347px','left': '1577px','display':'inline-table'}">

        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '670px','top': '468px'}">
            <div class="outer" :style="{'width': '16px','height': '99px'}">
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
        <div :style="{'position': 'absolute','top': '515px','left': '597px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">DPL-2</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.dpl_2 <= -1.23">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.dpl_2}} in</span>
            <p :style="{'color': '#BFFF00','background-color':'black','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vd_2}} m³</p>
        </div>
        <div :style="{'position': 'absolute','top': '461px','left': '598px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white','margin-bottom':'-5px'}">rtd-17</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.rtd_17}} &#8451;</p>
        </div>
        <!-- <div :style="{'position': 'absolute','top': '416px','left': '649px','display':'inline-table'}">
            <p :style="{'color': 'white','margin-bottom':'-5px'}">PT-2</p>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA</span>
        </div> -->
        <div :style="{'position': 'absolute','top': '701px','left': '44px','display':'inline-table'}">
            <p :style="{'color': 'white','margin-bottom':'5px'}">FM-14</p>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_14 <= -0.62">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.fm_14 }}</span>
            <p :style="{'color': 'white !important','margin-left': '8px'}"> &#13221;/hr </p>
<!--            <p>Total Flow</p>-->
<!--            <p :style="{'color':'#BFFF00','margin-bottom': '12px','background-color':'black'}">00.00  &#13221;</p>-->
        </div>
        <div :style="{'position': 'absolute','top': '600px','left': '1073px','display':'inline-table'}">
            <p :style="{'color': 'white','margin-bottom':'5px'}">FM-17</p>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_17 <= -0.15">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_17}}</span>
            <p :style="{'color': 'white !important','margin-left': '8px'}"> &#13221;/hr </p>
<!--            <p>Total Flow</p>-->
<!--            <p :style="{'color':'#BFFF00','margin-bottom': '12px','background-color':'black'}">00.00  &#13221;</p>-->
        </div>
        <div :style="{'position': 'absolute','top': '601px','left': '1446px','display':'inline-table'}">
<!--            <p>Total Flow</p>-->
<!--            <p :style="{'color':'#BFFF00','background-color':'black'}">00.00  &#13221;</p>-->
            <p :style="{'color': 'white'}">FM-7</p>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_7 <= -0.15">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_7}}</span>
            <p :style="{'color': 'white !important','text-align':'center'}"> &#13221;/hr </p>

        </div>
        <div :style="{'position': 'absolute','top': '570px','left': '1014px','display':'inline-table'}">
            <p :style="{'color': 'white','margin-bottom':'5px','text-align':'center'}">DM-1</p>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA</span>
        </div>
        <div :style="{'position': 'absolute','top': '619px','left': '976px','display':'inline-table'}">
           <img src="images/indicator-off.gif" style="width:35px;">
           <!-- <img src="images/green2.gif" style="width:35px;"> -->
        </div>
        <div :style="{'position': 'absolute','top': '640px','left': '1231px','display':'inline-table'}">
            <p :style="{'color': 'white'}">FM-16</p>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_16 <= -0.15">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_16}}</span>
            <p :style="{'color': 'white !important','margin-left': '8px','margin-top':'-5px'}"> &#13221;/hr </p>
<!--            <p>Total Flow</p>-->
<!--            <p :style="{'color':'#BFFF00','margin-bottom': '12px','background-color':'black'}">00.00  &#13221;</p>-->
        </div>
        <div :style="{'position': 'absolute','top': '670px','left': '1312px','display':'inline-table'}">
            <p :style="{'color': 'white'}">FM-15</p>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_15 <= -0.31">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_15}}</span>
            <p :style="{'color': 'white !important','margin-left': '8px'}"> &#13221;/hr </p>
<!--            <p>Total Flow</p>-->
<!--            <p :style="{'color':'#BFFF00','margin-bottom': '12px','background-color':'black'}">00.00  &#13221;</p>-->
        </div>
        <div :style="{'position': 'absolute','top': '570px','left': '1306px','display':'inline-table'}">
            <p :style="{'color': 'white','margin-bottom':'-5px','text-align':'center'}">DM-2</p>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA</span>
        </div>
        <div :style="{'position': 'absolute','top': '220px','left': '1687px','display':'inline-table'}">
<!--            <p>Total Flow: <span :style="{'color':'#BFFF00','background-color':'black'}">00.00  &#13221;</span></p>-->

            <p :style="{'color': 'white'}">FM-18</p>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_18 <= -0.93">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_18}}</span>
            <span :style="{'color': 'white !important','margin-left': '15px'}"> &#13221;/hr </span>

        </div>
        <div :style="{'position': 'absolute','top': '151px','left': '1685px','display':'inline-table'}">
<!--            <p style="margin-bottom: -8px;">Total Flow: <span :style="{'color':'#BFFF00','background-color':'black'}">00.00  &#13221;</span></p>-->
            <p :style="{'color': 'white'}">FM-19</p>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_19 <= -0.93">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_19}}</span>
            <span :style="{'color': 'white !important','margin-left': '15px'}"> &#13221;/hr </span>

        </div>
        <div :style="{'position': 'absolute','top': '11px','left': '1692px','display':'inline-table'}">
<!--            <p>Total Flow: <span :style="{'color':'#BFFF00','background-color':'black'  }">00.00  &#13221;</span></p>-->
            <p :style="{'color': 'white'}">FM-20</p>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_20 <= -0.06">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.fm_20 }}</span>
            <span :style="{'color': 'white !important','margin-left': '15px'}"> &#13221;/hr </span>

        </div>
        <div :style="{'position': 'absolute','top': '92px','left': '1691px','display':'inline-table'}">
<!--            <p>Total Flow: <span :style="{'color':'#BFFF00','background-color':'black'}">00.00  &#13221;</span></p>-->
            <p :style="{'color': 'white'}">FM-21</p>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_21 <= -0.93">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_21}}</span>
            <span :style="{'color': 'white !important','margin-left': '15px'}"> &#13221;/hr </span>

        </div>
        <div :style="{'position': 'absolute','top': '290px','left': '455px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-20</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_20>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_20}} &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '290px','left': '574px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-18</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_18>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_18}} &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '290px','left': '693px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-19</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_19>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_19}} &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '364px','left': '977px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-21</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_21>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_21}} &#8451;</p>
        </div>
        <!-- <div :style="{'position': 'absolute','top': '389px','left': '944px','display':'inline-table'}">
            <span :style="{'color': 'white'}">PT-3</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA</span>
        </div> -->
        <!-- <div :style="{'position': 'absolute','top': '445px','left': '1213px','display':'inline-table'}">
            <p :style="{'color': 'white'}">PT-4</p>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA</span>
        </div> -->
        <div class="skill" :style="{'display': 'inline-flex','left': '1183px','top': '435px'}">
            <div class="outer" :style="{'width': '17px','height': '170px'}">
                <div class="dpl_3_inner" data-progress="" v-if="parseInt(dt_aio.dpl_3) > parseInt(setpoint.dpl3_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="dpl_3_inner" data-progress="" v-else-if="parseInt(dt_aio.dpl_3) < parseInt(setpoint.dpl3_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="dpl_3_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="dpl_3" style="margin: auto; display: none;" > {{dt_aio.dpl_3}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '520px','left': '1111px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">DPL-3</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.dpl_3 <= -1.23">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.dpl_3 }} in</span>
            <p :style="{'color': '#BFFF00','background-color':'black','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vd_3}} m³</p>
        </div>
        <div :style="{'position': 'absolute','top': '209px','left': '1115px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-22</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_22>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_22}} &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '385px','left': '1115px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-23</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_23>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_23}} &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '448px','left': '1283px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-95</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_95>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>NA  &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '459px','left': '1367px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-96</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_96>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '270px','left': '810px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-93</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_93>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '403px','left': '810px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','margin-bottom':'-7px'}">RTD-91</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_91>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '345px','left': '810px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','margin-bottom':'-7px'}">RTD-94</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_94>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '468px','left': '810px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-92</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_92>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '485px','left': '534px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-90</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_90>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '409px','left': '480px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-89</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_89>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '415px','left': '407px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-87</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_87>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '509px','left': '407px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-88</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_88>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '393px','left': '203px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-85</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_85>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '481px','left': '212px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-86</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_86>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '425px','left': '124px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-100</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_100>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '454px','left': '50px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-101</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_101>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '526px','left': '50px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-102</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '276px','left': '155px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-99</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA &#8451;</p>
        </div>


        <div :style="{'position': 'absolute','top': '581px','left': '1111px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-24</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_24>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_24}} &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '645px','left': '118px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <!--            <img src="images/h11.png" width="40" v-if="pump.p406a_status == '1' ">-->
            <img src="images/h22.png" width="40" >
            <p :style="{'color': 'white','position':'absolute','top':'70px'}">P-406</p>
        </div>
        <div :style="{'position': 'absolute','top': '755px','left': '118px','display':'inline-table'}" v-for="pump in pump_interval">

            <!--            <img src="images/h11.png" width="40" v-if="pump.p406b_status == '1' ">-->
            <img src="images/h22.png" width="40" >
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>
        <div :style="{'position': 'absolute','top': '645px','left': '323px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <img src="images/h11.png" width="40" v-if="pump.p603a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>

            <p :style="{'color': 'white','position':'absolute','top':'70px'}">P-603</p>
        </div>
        <div :style="{'position': 'absolute','top': '755px','left': '323px','display':'inline-table'}" v-for="pump in pump_interval">

            <img src="images/h11.png" width="40" v-if="pump.p603b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>
        <div :style="{'position': 'absolute','top': '645px','left': '571px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <!--            <img src="images/h11.png" width="40" v-if="pump.p407a_status == '1' ">-->
            <img src="images/h22.png" width="40" >
            <p :style="{'color': 'white','position':'absolute','top':'70px'}">P-407</p>
        </div>
        <div :style="{'position': 'absolute','top': '755px','left': '571px','display':'inline-table'}" v-for="pump in pump_interval">

            <!--            <img src="images/h11.png" width="40" v-if="pump.p407b_status == '1' ">-->
            <img src="images/h22.png" width="40" >
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>
        <div :style="{'position': 'absolute','top': '647px','left': '940px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <img src="images/h11.png" width="40" v-if="pump.p601a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>

            <p :style="{'color': 'white','position':'absolute','top':'70px'}">P-601</p>
        </div>
        <div :style="{'position': 'absolute','top': '753px','left': '940px','display':'inline-table'}" v-for="pump in pump_interval">

            <img src="images/h11.png" width="40" v-if="pump.p601b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>
        <div :style="{'position': 'absolute','top': '647px','left': '1415px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <img src="images/h11.png" width="40" v-if="pump.p602a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>

            <p :style="{'color': 'white','position':'absolute','top':'70px'}">P-602</p>
        </div>
        <div :style="{'position': 'absolute','top': '753px','left': '1416px','display':'inline-table'}" v-for="pump in pump_interval">

            <img src="images/h11.png" width="40" v-if="pump.p602b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>
        <div :style="{'position': 'absolute','top': '735px','left': '1765px','display':'inline-table'}">
            <p :style="{'color': 'white'}">P-704</p>
        </div>
        <div :style="{'position': 'absolute','top': '647px','left': '1692px','display':'inline-table'}" v-for="pump in pump_interval">

            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <img src="images/h11.png" width="40" v-if="pump.p704a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>

        </div>
        <div :style="{'position': 'absolute','top': '731px','left': '1691px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">C</p>
            <img src="images/h11.png" width="40" v-if="pump.p407c_status == '1' ">
            <img src="images/h22.png" width="40" v-else>

        </div>
        <div :style="{'position': 'absolute','top': '689px','left': '1691px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">B</p>
            <img src="images/h11.png" width="40" v-if="pump.p704b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
        </div>
        <div :style="{'position': 'absolute','top': '648px','left': '1843px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">D</p>
            <img src="images/h11.png" width="40" v-if="pump.p704d_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
        </div>
        <div :style="{'position': 'absolute','top': '752px','left': '1843px','display':'inline-table'}" v-for="pump in pump_interval">

            <img src="images/h11.png" width="40" v-if="pump.p704e_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">E</p>
        </div>
        <footer style="background: #003749; border: none; margin-top:-3px;">
            <h3 style="text-align: center; color: white; padding:6px;margin:0px !important;">Methanol Recovery | BioTech Powered By Star Automation</h3>
        </footer>
    </div>
</template>

<script>

import {screen2} from "../helpers/api";

export default {
    name: "Screen2",
    data() {
        return {
            dt_aio: [],
            setpoint: [],
            pump_interval: [],
            
        }
    },
    methods: {
        getData() {
            const token = "Bearer "+this.currentUser.token;
            screen2(token)
                .then((res)=>{
                    this.dt_aio = res.dt_aio
                    this.setpoint = res.setpoint
                    this.pump_interval = res.pump_interval
                   
                    this.showbar();
                })
                .catch((err)=>{
                    console.log(err)
                });
        },
        showbar(){
            $(document).ready(function() {
                var dpl_2 = $("#dpl_2").text();
                var datad2 = (99 / 40) * parseInt(dpl_2);
                if (datad2 >= 99) {
                    datad2 = 99
                }
                var add_dpl_2 = datad2;
                $('.dpl_2_inner').css('height', add_dpl_2 + 'px');
                //////////////////////
                var dpl_3 = $("#dpl_3").text();
                var data3 = (170 / 40) * parseInt(dpl_3);
                if (data3 >= 170) {
                    data3 = 170
                }
                var add_dpl_3 = data3;
                $('.dpl_3_inner').css('height', add_dpl_3 + 'px');
                //////////////////////
                var rdl_16 = $("#rdl_16").text();
                var data16 = (100 / 160) * parseInt(rdl_16);
                if (data16 >= 100) {
                    data16 = 100
                }
                var add_rld_16 = data16;
                $('.rdl_16_inner').css('height', add_rld_16 + 'px');
                //////////////////////
                var rdl_19 = $("#rdl_19").text();
                var data19 = (92 / 315) * parseInt(rdl_19);
                if (data19 >= 92) {
                    data19 = 92
                }
                var add_rld_19 = data19;
                $('.rdl_19_inner').css('height', add_rld_19 + 'px');

            })
        }
    },
    computed: {
        currentUser(){
            return this.$store.getters.currentUser
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
    watch: {}

}
</script>

<style scoped>
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
/*///////// RDL 3 bar////////*/
.dpl_3_inner, .dpl_3_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.dpl_3_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.dpl_3_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 3 bar////////*/
.rdl_16_inner, .rdl_16_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_16_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_16_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 3 bar////////*/
.rdl_19_inner, .rdl_19_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_19_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_19_inner div {
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
