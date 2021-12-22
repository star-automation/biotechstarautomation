<template>
    <div class="col-md-12" style="padding: 0px;">
        {{getData()}}
        <img src="images/screen4new.png" :style="{'width':'100%','height':'100%'}"/>
        <div style="position: absolute;top: 80px;left: 235px;">
            <p style="font-size: 22px;">{{dt_aio.timing}}</p>
        </div>
        <table class="table col-md-2"  style="position: absolute;top: 6px;left: 1570px;border: 1px solid;width: 214px;color: white;">
            <tr>
                <th colspan="2" class="text-center">Distilation</th>
            </tr>
            <tr>
                <td>Feed</td>
                <td>
                    <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_8 <= -0.06">Error</span>
                    <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.fm_8 }}</span>
                    <span :style="{'color': 'white !important'}"> &#13221;/hr </span>
                </td>
            </tr>
            <tr>
                <td>BIO</td>
                <td>
                    <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_13 <= -0.06">Error</span>
                    <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_13}}</span>
                    <span :style="{'color': 'white !important'}"> &#13221;/hr </span>
                </td>
            </tr>
            <tr>
                <td>D501 Out</td>
                <td>
                    <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_9 <= -0.06">Error</span>
                    <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_9}}</span>
                    <span :style="{'color': 'white !important'}"> &#13221;/hr </span>
                </td>
            </tr>
            <tr>
                <td>Transfer</td>
                <td>
                    <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_10 <= -0.06">Error</span>
                    <span :style="{'background-color':'black','color':'#BFFF00','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_10}}</span>
                    <span :style="{'color': 'white !important'}"> &#13221;/hr </span>
                </td>
            </tr>
        </table>


        <div class="skill" :style="{'display': 'inline-flex','left': '731px','top': '48px'}">
            <div class="outer" :style="{'width': '18px','height': '84px'}">
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
            <p id="rdl_8" style="margin: auto; display: none;" > {{dt_aio.rdl_8}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '91px','left': '654px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">RDL-8</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_8 <= -0.16">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_8 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center',}">VR-8</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_8}} &#13221;</p>
        </div>
        <div :style="{'position': 'absolute','top': '42px','left': '654px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white'}">RTD-13</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_13>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_13}}  &#8451;</p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '875px','top': '48px'}">
            <div class="outer" :style="{'width': '18px','height': '84px'}">
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
            <p id="rdl_9" style="margin: auto; display: none;" > {{dt_aio.rdl_9}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '91px','left': '800px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">RDL-9</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_9 <= -0.16">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_9 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center',}">VR-9</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_9}} &#13221;</p>
        </div>
        <div :style="{'position': 'absolute','top': '42px','left': '800px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white'}">RTD-14</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_14>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_14}}  &#8451;</p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '1017px','top': '48px'}">
            <div class="outer" :style="{'width': '18px','height': '84px'}">
                <div class="rdl_10_inner" data-progress="" v-if="parseInt(dt_aio.rdl_10) > parseInt(setpoint.rdl10_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_10_inner" data-progress="" v-else-if="parseInt(dt_aio.rdl_10) < parseInt(setpoint.rdl10_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_10_inner" data-progress="">
                    <div></div>
                </div>
            </div>
            <p id="rdl_10" style="margin: auto; display: none;" > {{dt_aio.rdl_10}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '91px','left': '943px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">RDL-10</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_10 <= -0.16">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_10 }} in</span>
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center',}">VR-10</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_10}} &#13221;</p>
        </div>
        <div :style="{'position': 'absolute','top': '42px','left': '943px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white'}">RTD-15</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_15>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_15}}  &#8451;</p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '1155px','top': '48px'}">
            <div class="outer" :style="{'width': '18px','height': '84px'}">
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
            <p id="rdl_11" style="margin: auto; display: none;" > {{dt_aio.rdl_11}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '91px','left': '1083px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">RDL-11</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rdl_11 <= -0.47">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.rdl_11 }} in</span>

            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center',}">VR-11</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vr_11}} &#13221;</p>
        </div>
        <div :style="{'position': 'absolute','top': '42px','left': '1083px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white'}">RTD-16</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_16>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_16}}  &#8451;</p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '1883px','top': '567px'}">
            <div class="outer" :style="{'width': '17px','height': '140px'}">
                <div class="rdl_17_inner" data-progress="" v-if="parseInt(dt_aio.dpl_8) > parseInt(setpoint.dpl8_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="rdl_17_inner" data-progress="" v-else-if="parseInt(dt_aio.dpl_8) < parseInt(setpoint.dpl8_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="rdl_17_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="rdl_17" style="margin: auto; display: none;" >{{dt_aio.dpl_8}}</p>
        </div>
        <div :style="{'position': 'absolute','top': '650px','left': '1805px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center'}">RDL-17</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" >{{ dt_aio.dpl_8 }}</span>
<!--            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>NA in</span>-->
            <!--<p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center',}">VR-17</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vd_8}} &#13221;</p>
        </div>
        <div :style="{'position': 'absolute','top': '370px','left': '1812px','display':'inline-table'}">

        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '960px','top': '455px'}">
            <div class="outer" :style="{'width': '15px','height': '70px'}">
                <div class="dpl_5_inner" data-progress="" v-if="parseInt(dt_aio.dpl_5) > parseInt(setpoint.dpl5_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="dpl_5_inner" data-progress="" v-else-if="parseInt(dt_aio.dpl_5) < parseInt(setpoint.dpl5_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="dpl_5_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="dpl_5" style="margin: auto; display: none;" > {{dt_aio.dpl_5}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '490px','left': '880px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center',}">DPL-5</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.dpl_5 <= -0.98">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.dpl_5 }} in</span>
            <p :style="{'color': '#BFFF00','background-color':'black','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vd_5}} m³</p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '514px','top': '489px'}">
            <div class="outer" :style="{'width': '15px','height': '70px'}">
                <div class="dpl_4_inner" data-progress="" v-if="parseInt(dt_aio.dpl_4) > parseInt(setpoint.dpl4_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="dpl_4_inner" data-progress="" v-else-if="parseInt(dt_aio.dpl_4) < parseInt(setpoint.dpl4_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="dpl_4_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="dpl_4" style="margin: auto; display: none;" > {{dt_aio.dpl_4}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '524px','left': '441px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center',}">DPL-4</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.dpl_4 <= -1.04">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.dpl_4 }} in</span>
            <p :style="{'color': '#BFFF00','background-color':'black','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vd_4}} m³</p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '213px','top': '631px'}">
            <div class="outer" :style="{'width': '15px','height': '82px'}">
                <div class="dpl_1_inner" data-progress="" v-if="parseInt(dt_aio.dpl_1) > parseInt(setpoint.dpl1_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="dpl_1_inner" data-progress="" v-else-if="parseInt(dt_aio.dpl_1) < parseInt(setpoint.dpl1_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="dpl_1_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="dpl_1" style="margin: auto; display: none;" > {{dt_aio.dpl_1}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '668px','left': '129px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center',}">DPL-1</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.dpl_1 <= -0.98">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.dpl_1}} in</span>
            <p :style="{'color': '#BFFF00','background-color':'black','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vd_1}} m³</p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '640px','top': '536px'}">
            <div class="outer" :style="{'width': '17px','height': '80px'}">
                <div class="dpl_6_inner" data-progress="" v-if="parseInt(dt_aio.dpl_6) > parseInt(setpoint.dpl6_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="dpl_6_inner" data-progress="" v-else-if="parseInt(dt_aio.dpl_6) < parseInt(setpoint.dpl6_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="dpl_6_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="dpl_6" style="margin: auto; display: none;" > {{dt_aio.dpl_6}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '533px','left': '558px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center',}">DPL-6</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.dpl_6 <= -1.78">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{ dt_aio.dpl_6 }} in</span>
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" >{{dt_aio.vd_6}} m³</p>
        </div>
        <div :style="{'position': 'absolute','top': '242px','left': '558px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-27</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_27>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_27}}  &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '277px','left': '379px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-75</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '435px','left': '379px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-76</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '438px','left': '503px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-84</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '304px','left': '485px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-83</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '310px','left': '929px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-81</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '421px','left': '925px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-82</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '566px','left': '503px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-77</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '691px','left': '504px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-78</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '768px','left': '1066px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-37</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.rtd_37}} &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '634px','left': '1025px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-80</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '520px','left': '802px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-79</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '580px','left': '1805px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-36</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.rtd_36}} &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '437px','left': '558px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-28</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_28>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_28}} &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '589px','left': '558px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-29</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_29>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_29}} &#8451;</p>
        </div>
        <div class="skill" :style="{'display': 'inline-flex','left': '1150px','top': '415px'}">
            <div class="outer" :style="{'width': '17px','height': '80px'}">
                <div class="dpl_7_inner" data-progress="" v-if="parseInt(dt_aio.dpl_7) > parseInt(setpoint.dpl7_h)" style="background-color: #B70B0D !important;">
                    <div></div>
                </div>
                <div class="dpl_7_inner" data-progress="" v-else-if="parseInt(dt_aio.dpl_7) < parseInt(setpoint.dpl7_l)" style="background-color: #F4C103 !important;">
                    <div></div>
                </div>
                <div class="dpl_7_inner" data-progress="" v-else>
                    <div></div>
                </div>
            </div>
            <p id="dpl_7" style="margin: auto; display: none;" > {{dt_aio.dpl_7}} </p>
        </div>
        <div :style="{'position': 'absolute','top': '420px','left': '1068px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center',}">DPL-7</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.dpl_7 <= -1.63">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.dpl_7}} in</span>
            <p :style="{'color': '#BFFF00','background-color':'black','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vd_7}} m³</p>
        </div>
        <div :style="{'position': 'absolute','top': '348px','left': '1068px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-30</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_30>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_30}}  &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '470px','left': '1069px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-31</p>-->
            <p :style="{'background-color':'bflack','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_31>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_31}}  &#8451;</p>
        </div>


        <div :style="{'position': 'absolute','top': '493px','left': '143px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-25</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_25>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_25}}  &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '625px','left': '128px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">RTD-26</p>-->
            <p :style="{'background-color':'black','color':'white','font-weight':'600','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.rtd_26>600">Error</p>
            <p :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.rtd_26}}  &#8451;</p>
        </div>
        <div :style="{'position': 'absolute','top': '340px','left': '183px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">VG-1</p>-->
            <span :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">{{dt_aio.vg_1}} tor</span>
        </div>
       
        <div :style="{'position': 'absolute','top': '396px','left': '558px','display':'inline-table'}">
<!--            <p :style="{'color': 'white'}">VG-2</p>-->
            <span :style="{'background-color':'black','color':'white','font-weight':'600','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">NA</span>
        </div>

        <div :style="{'position': 'absolute','bottom': '41px','left': '142px','display':'inline-table'}">
            <p :style="{'color': 'white'}">FM-9</p>
            <span :style="{'background-color':'black','border':'0.1px solid yellow','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_9 <= -0.21">Error</span>
            <span :style="{'background-color':'black','border':'0.1px solid yellow','color':'green','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_9}}</span>
            <p :style="{'color': 'white !important','margin-left': '8px'}"> &#13221;/hr </p>
            <!--            <p style="margin-top: 5px;">Total Flow</p>-->
            <!--            <p :style="{'color':'#BFFF00','background-color':'black'}">00.00  &#13221;</p>-->
        </div>
        <div :style="{'position': 'absolute','bottom': '38px','left': '506px','display':'inline-table'}">
            <p :style="{'color': 'white'}">FM-12</p>
<!--            <span :style="{'background-color':'black','border':'0.1px solid yellow','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="fm.fm_12 <= -0.15">Error</span>-->
            <span :style="{'background-color':'black','border':'0.1px solid yellow','color':'green','border-radius':'4px','padding':'0px 3px'}" >0.00</span>
            <p :style="{'color': 'white !important','margin-left': '8px'}"> &#13221;/hr </p>
            <!--            <p>Total Flow</p>-->
            <!--            <p :style="{'color':'#BFFF00','background-color':'black'}">00.00  &#13221;</p>-->
        </div>
        <div :style="{'position': 'absolute','bottom': '98px','left': '979px','display':'inline-table'}">
            <p :style="{'color': 'white','margin-bottom':'6px'}">FM-13</p>
            <span :style="{'background-color':'black','border':'0.1px solid yellow','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_1 <= -0.37">Error</span>
            <span :style="{'background-color':'black','border':'0.1px solid yellow','color':'green','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_13}}</span>
            <p :style="{'color': 'white !important','margin-left': '8px'}"> &#13221;/hr </p>
            <!--            <p>Total Flow</p>-->
            <!--            <p :style="{'color':'#BFFF00','background-color':'black'}">00.00  &#13221;</p>-->

            <!--            <span :style="{'color': 'white',}">%</span>-->
        </div>
        <div :style="{'position': 'absolute','top': '436px','left': '1422px','display':'inline-table'}">
            <p :style="{'color': 'white',}">FM-11</p>
<!--            <span :style="{'background-color':'black','border':'0.1px solid yellow','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="fm.fm_11 <= -0.15">Error</span>-->
            <span :style="{'background-color':'black','border':'0.1px solid yellow','color':'green','border-radius':'4px','padding':'0px 3px'}" >0.00</span>
            <p :style="{'color': 'white !important','margin-left': '8px'}"> &#13221;/hr </p>
            <!--            <p>Total Flow</p>-->
            <!--            <p :style="{'color':'#BFFF00','background-color':'black'}">00.00  &#13221;</p>-->
            <!--            <span :style="{'color': 'white',}">%</span>-->
        </div>
        <div :style="{'position': 'absolute','top': '725px','left': '1860px','display':'inline-table'}">
            <!--            <p>Total Flow</p>-->
            <!--            <p :style="{'color':'#BFFF00','background-color':'black'}">00.00  &#13221;</p>-->
            <p :style="{'color': 'white'}">FM-22</p>
            <span :style="{'background-color':'black','border':'0.1px solid yellow','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_22 <= -1.87">Error</span>
            <span :style="{'background-color':'black','border':'0.1px solid yellow','color':'green','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_22}}</span>
            <span :style="{'color': 'white !important',}"> &#13221;/hr </span>
            <!--            <span :style="{'color': 'white',}">%</span>-->
        </div>
        <div :style="{'position': 'absolute','bottom': '239px','left': '936px','display':'inline-table'}">
            <p :style="{'color': 'white','margin-bottom':'6px'}">FM-10</p>
            <span :style="{'background-color':'black','border':'0.1px solid yellow','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_10 <= -0.09">Error</span>
            <span :style="{'background-color':'black','border':'0.1px solid yellow','color':'green','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_10}}</span>
            <p :style="{'color': 'white !important','margin-left': '8px'}"> &#13221;/hr </p>
            <!--            <p>Total Flow</p>-->
            <!--            <p :style="{'color':'#BFFF00','background-color':'black'}">00.00  &#13221;</p>-->
        </div>
        <div :style="{'position': 'absolute','top': '170px','left': '1064px','display':'inline-table'}">
            <p :style="{'color': 'white'}">FM-8</p>
            <span :style="{'background-color':'black','border':'0.1px solid yellow','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_8 <= -0.21">Error</span>
            <span :style="{'background-color':'black','border':'0.1px solid yellow','color':'green','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_8}}</span>
            <span :style="{'color': 'white !important','margin-left': '8px'}">&#13221;/hr </span>
            <div class="cl-fm-8" style="position: relative; top:-40px; left: 33px;">

                <!--                <span :style="{'color':'white !important',}"> Total Flow: </span>-->
                <!--                <span :style="{'color':'#BFFF00','margin-bottom': '12px','background-color':'black'}">00.00  &#13221;</span>-->
            </div>
        </div>
        <div :style="{'position': 'absolute','top': '670px','left': '596px','display':'inline-table'}">
            <span :style="{'background-color':'black','color':'green','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">00.00</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">%</span><br>
            <img src="images/vg2.png" width="40" v-if="valves_status.bvo_12 == 1 ">
            <img src="images/vg12.png" width="40" v-else>
            <p :style="{'color': 'white'}">BVO-12</p>
        </div>
        <div :style="{'position': 'absolute','top': '578px','left': '851px','display':'inline-table'}">
            <span :style="{'background-color':'black','color':'green','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">00.00</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">%</span><br>
            <img src="images/vg12.png" width="40">
            <p :style="{'color': 'white'}">BVM-6</p>
        </div>
        <div :style="{'position': 'absolute','top': '694px','left': '898px','display':'inline-table'}">
            <img src="images/vg2.png" width="40" v-if="valves_status.bvo_13 == 1 ">
            <img src="images/vg12.png" width="40" v-else>
            <p :style="{'color': 'white'}">BVO-13</p>
        </div>
        <div :style="{'position': 'absolute','top': '178px','left': '834px','display':'inline-table'}">
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">00.00</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">%</span>
            <img src="images/vg1.png" width="30">
            <p :style="{'color': 'white !important','position':'absolute','top':'-11px'}">BVM-3</p>

        </div>
        <div :style="{'position': 'absolute','bottom': '313px','left': '1405px','display':'inline-table'}">
            <img src="images/vg1.png" width="30">
            <p :style="{'color': 'white !important','position':'absolute','top':'-11px','left':'18px'}">BVM-5</p>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">00.00</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}">%</span>
        </div>
        <div :style="{'position': 'absolute','top': '5px','left': '640px','display':'inline-table'}">
            <span :style="{'color': 'white !important',}">  BOV-1</span>

            <img src="images/vg22.png" width="30" v-if="valves_status.bvo_1 == 1 ">
            <img src="images/vg1.png" width="30" v-else>
        </div>
        <div :style="{'position': 'absolute','top': '5px','left': '785px','display':'inline-table'}">
            <span :style="{'color': 'white !important',}">  BOV-2</span>

            <img src="images/vg22.png" width="30" v-if="valves_status.bvo_2 == 1 ">
            <img src="images/vg1.png" width="30" v-else>
        </div>
        <div :style="{'position': 'absolute','top': '5px','left': '929px','display':'inline-table'}">
            <span :style="{'color': 'white !important',}">  BOV-3</span>

            <img src="images/vg22.png" width="30" v-if="valves_status.bvo_3 == 1 ">
            <img src="images/vg1.png" width="30" v-else>
        </div>
        <div :style="{'position': 'absolute','top': '5px','left': '1069px','display':'inline-table'}">
            <span :style="{'color': 'white !important',}">  BVO-4</span>

            <img src="images/vg22.png" width="30" v-if="valves_status.bvo_4 == 1 ">
            <img src="images/vg1.png" width="30" v-else>
        </div>
        <div :style="{'position': 'absolute','top': '694px','left': '217px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <img src="images/h11.png" width="40" v-if="pump.p501a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <!--            <img src="images/h22.png" width="30">-->
            <p :style="{'color': 'white','position':'absolute','top':'70px'}">P-501</p>
        </div>
        <div :style="{'position': 'absolute','top': '804px','left': '217px','display':'inline-table'}" v-for="pump in pump_interval">

            <!--            <img src="images/h11.png" width="40" v-if="pump.p501b_status == '1' ">-->
            <img src="images/h22.png" width="40">
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>
        <div :style="{'position': 'absolute','top': '751px','left': '415px','display':'inline-table'}" v-for="pump in pump_interval">

            <!--            <img src="images/h11.png" width="40" v-if="pump.p502a_status == '1' ">-->
            <img src="images/h22.png" width="40" >
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <p :style="{'color': 'white','margin-top':'-5px'}">P-502</p>
        </div>
        <div :style="{'position': 'absolute','top': '817px','left': '415px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">B</p>
            <img src="images/h11.png" width="40" v-if="pump.p502b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>

        </div>
        <div :style="{'position': 'absolute','top': '750px','left': '748px','display':'inline-table'}" v-for="pump in pump_interval">
            <img src="images/h11.png" width="40" v-if="pump.p503a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <p :style="{'color': 'white','margin-top':'-5px'}">P-503</p>
        </div>
        <div :style="{'position': 'absolute','top': '816px','left': '748px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">B</p>
            <img src="images/h11.png" width="40" v-if="pump.p503b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
        </div>
        <div :style="{'position': 'absolute','top': '750px','left': '1232px','display':'inline-table'}">
            <img src="images/h22.png" width="40">
            <p :style="{'color': 'white'}"></p>
        </div>
        <div :style="{'position': 'absolute','top': '837px','left': '1232px','display':'inline-table'}">
            <p :style="{'color': 'white'}"></p>
            <img src="images/h22.png" width="40">
        </div>
        <div :style="{'position': 'absolute','top': '563px','left': '1307px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <img src="images/h11.png" width="40" v-if="pump.p505a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','position':'absolute','top':'70px'}">P-505</p>
        </div>
        <div :style="{'position': 'absolute','top': '670px','left': '1307px','display':'inline-table'}" v-for="pump in pump_interval">

            <img src="images/h11.png" width="40" v-if="pump.p505b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>
        <div :style="{'position': 'absolute','top': '584px','left': '690px','display':'inline-table'}" v-for="pump in pump_interval">
            <img src="images/h11.png" width="40" v-if="pump.p504a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <p :style="{'color': 'white','margin-top':'-5px'}">P-504</p>
        </div>
        <div :style="{'position': 'absolute','top': '649px','left': '690px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">B</p>
            <img src="images/h11.png" width="40" v-if="pump.p504b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
        </div>
        <footer style="background: #003749; border: none;">
            <h3 style="text-align: center; color: white; padding:6px;margin:0px !important;">Distillation Section | BioTech Powered By Star Automation</h3>
        </footer>
    </div>
</template>
<script>
import {logout} from "../helpers/auth";
import {screen1} from "../helpers/api";

export default {

    data() {
        return {
            dt_aio: [],
            rdl: [],
            valves_status: [],
            pump_interval: [],
            fm: [],
            setpoint:[],
            vr:[],
            dpl_volume:[]
        }
    },
    methods: {
        getData() {
            const token = "Bearer " + this.currentUser.token;
            screen1(token)
                .then((res) => {
                   
                    this.valves_status = res.valves_status
                    this.pump_interval = res.pump_interval
                   
                    this.dt_aio = res.dt_aio
                    this.setpoint = res.setpoint
                    this.showbar();
                })
                .catch((err) => {
                    console.log(err)
                });
        },
        showbar() {
            $(document).ready(function () {
                var rdl_8 = $("#rdl_8").text();
                var data8 = (84 / 207) * parseInt(rdl_8);
                if (data8 >= 84) {
                    data8 = 84
                }
                var add_rld_8 = data8;
                $('.rdl_8_inner').css('height', add_rld_8 + 'px');
                ////////////////////
                var rdl_9 = $("#rdl_9").text();
                var data9 = (84 / 207) * parseInt(rdl_9);
                if (data9 >= 84) {
                    data9 = 84
                }
                var add_rld_9 = data9;
                $('.rdl_9_inner').css('height', add_rld_9 + 'px');
                ////////////////////
                var rdl_10 = $("#rdl_10").text();
                var data10 = (84 / 207) * parseInt(rdl_10);
                if (data10 >= 84) {
                    data10 = 84
                }
                var add_rld_10 = data10;
                $('.rdl_10_inner').css('height', add_rld_10 + 'px');
                ////////////////////
                var rdl_11 = $("#rdl_11").text();
                var data11 = (84 / 207) * parseInt(rdl_11);
                if (data11 >= 84) {
                    data11 = 84
                }
                var add_rld_11 = data11;
                $('.rdl_11_inner').css('height', add_rld_11 + 'px');
                ////////////////////
                var rdl_17 = $("#rdl_17").text();
                var data17 = (140 / 420) * parseInt(rdl_17);
                if (data17 >= 140) {
                    data17 = 140
                }
                var add_rld_17 = data17;
                $('.rdl_17_inner').css('height', add_rld_17 + 'px');
                ////////////////////
                var rdl_20 = $("#rdl_20").text();
                var data20 = (125 / 433) * parseInt(rdl_20);
                if (data20 >= 125) {
                    data20 = 125
                }
                var add_rld_20 = data20;
                $('.rdl_20_inner').css('height', add_rld_20 + 'px');
                ////////////////////
                var dpl_5 = $("#dpl_5").text();
                var dpldata5 = (70 / 33) * parseInt(dpl_5);
                if (dpldata5 >= 70) {
                    dpldata5 = 70
                }
                var add_dpl_5 = dpldata5;
                $('.dpl_5_inner').css('height', add_dpl_5 + 'px');
                ///////////dpl-6/////////
                var dpl_6 = $("#dpl_6").text();
                var dpldata6 = (80 / 58) * parseInt(dpl_6);
                if (dpldata6 >= 80) {
                    dpldata6 = 80
                }
                var add_dpl_6 = dpldata6;
                $('.dpl_6_inner').css('height', add_dpl_6 + 'px');
                ////////////////////
                var dpl_4 = $("#dpl_4").text();
                var dpldata4 = (70 / 33) * parseInt(dpl_4);
                if (dpldata4 >= 70) {
                    dpldata4 = 70
                }
                var add_dpl_4 = dpldata4;
                $('.dpl_4_inner').css('height', add_dpl_4 + 'px');
                //////////dpl-1//////////
                var dpl_1 = $("#dpl_1").text();
                var dpldata1 = (82 / 31) * parseInt(dpl_1);
                if (dpldata1 >= 82) {
                    dpldata1 = 82
                }
                var add_dpl_1 = dpldata1;
                $('.dpl_1_inner').css('height', add_dpl_1 + 'px');
                ////////////////////
                var dpl_7 = $("#dpl_7").text();
                var dpldata7 = (80 / 52) * parseInt(dpl_7);
                if (dpldata7 >= 80) {
                    dpldata7 = 80
                }
                var add_dpl_7 = dpldata7;
                $('.dpl_7_inner').css('height', add_dpl_7 + 'px');
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
/*///////// RDL 8 bar////////*/
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
/*///////// RDL 9 bar////////*/
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
/*///////// RDL 9 bar////////*/
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
/*///////// RDL 9 bar////////*/
.rdl_17_inner, .rdl_17_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_17_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_17_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 9 bar////////*/
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
/*///////// RDL 9 bar////////*/
.dpl_5_inner, .dpl_5_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.dpl_5_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.dpl_5_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 9 bar////////*/
.dpl_6_inner, .dpl_6_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.dpl_6_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.dpl_6_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/

/*///////// RDL 9 bar////////*/
.dpl_4_inner, .dpl_4_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.dpl_4_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.dpl_4_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 9 bar////////*/
.dpl_1_inner, .dpl_1_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.dpl_1_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.dpl_1_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
/*///////// RDL 9 bar////////*/
.dpl_7_inner, .dpl_7_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.dpl_7_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.dpl_7_inner div {
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
    background: darkslategrey !important;
    overflow: hidden;
    position: relative;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}
</style>
