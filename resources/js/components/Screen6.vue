
<template>
    <div class="col-md-12" style="padding: 0px;">
        <!--    <img :src="backgroundImageUrl" />-->
        {{getData()}}
        <img src="images/screen6new.png" :style="{'width':'100%','height':'100%'}"/>
        <div style="position: absolute;top: 80px;left: 51px;">
            <p style="font-size: 22px;">{{dt_aio.timing}}</p>
        </div>
        <div :style="{'position': 'absolute','top': '747px','left': '989px','display':'inline-table'}">
            <!-- <p :style="{'color': 'white','margin-bottom':'-5px'}">PT-5</p> -->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.pt_5 <= 0">0.00 Bar</span>
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.pt_5}} Bar</span>
        </div>
        <div :style="{'position': 'absolute','top':'309px','left':'1217px','padding':'2px','border':'1px solid white','display':'inline-table'}">
            <p :style="{'color': 'white !important','margin-right':'20px','font-size':'15px'}">Flow</p>
            <!--            <p :style="{'background-color':'black','color':'#BFFF00 !important','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px'}" v-if="fm.fm_1 <= -0.21">Error</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px','font-size':'15px'}">{{ dt_aio.st_fm2_flow }} t/hr</p>

            <p :style="{'color': 'white !important','margin-right':'20px','font-size':'15px'}">Total Flow</p>
<!--            <p :style="{'background-color':'black','color':'#BFFF00 !important','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px','font-size':'15px'}" v-if="fm.fm_1 <= -0.21">Error</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px','font-size':'15px'}" >{{ dt_aio.stfm2_flow_tot }} ton</p>

            <p :style="{'color': 'white !important','margin-right':'20px','font-size':'15px'}">Temp</p>
<!--            <p :style="{'background-color':'black','color':'#BFFF00 !important','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px','font-size':'15px'}" v-if="fm.fm_1 <= -0.21">Error</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px','font-size':'15px'}" >{{ dt_aio.stfm2_temp }} &#8451;</p>

            <p :style="{'color': 'white !important','margin-right':'20px','font-size':'15px'}">Pressure</p>
<!--            <p :style="{'background-color':'black','color':'#BFFF00 !important','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px','font-size':'15px'}" v-if="fm.fm_1 <= -0.21">Error</p>-->
            <p :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','border-radius':'4px','padding':'0px 3px','font-size':'15px'}" >{{ dt_aio.stfm2_pressure }} MPa</p>
        </div>
        <div :style="{'position': 'absolute','top': '27px','left': '1041px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-104</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '65px','left': '1080px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-106</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '67px','left': '712px','display':'inline-table'}">
            <!--            <p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-109</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '27px','left': '587px','display':'inline-table'}">
            <!--           <p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-105</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '49px','left': '330px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','font-size':'10px'}">RTD-107</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '81px','left': '765px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-111</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '98px','left': '715px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-113</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '64px','left': '962px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-108</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '82px','left': '920px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-110</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '99px','left': '960px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-112</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '138px','left': '960px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-114</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '240px','left': '1168px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-115</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '261px','left': '825px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-116</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '281px','left': '770px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-118</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '275px','left': '1167px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-117</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '320px','left': '1100px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-115</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '426px','left': '815px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-121</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '429px','left': '874px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-120</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '429px','left': '937px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-119</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '478px','left': '864px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-124</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '478px','left': '924px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-123</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '478px','left': '989px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-122</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '604px','left': '717px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-125</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '633px','left': '717px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-126</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '666px','left': '717px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-127</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '673px','left': '648px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px','background-color':'black'}">RTD-128</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '595px','left': '488px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-129</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '624px','left': '488px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-130</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '653px','left': '488px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-131</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '684px','left': '488px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-132</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '716px','left': '487px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-134</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '724px','left': '635px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-136</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '689px','left': '826px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-133</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '723px','left': '797px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-135</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '786px','left':'470px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-138</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '808px','left': '430px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-140</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '843px','left': '560px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-142</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '862px','left': '630px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-144</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '788px','left': '828px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-137</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '807px','left': '748px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-139</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '828px','left': '903px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-141</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '790px','left': '1045px','display':'inline-table'}">
            <!--<p :style="{'color': 'white','font-size':'10px','margin-bottom':'-5px'}">RTD-143</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px'}"> &#8451;</span>
        </div>

        <!--////////////////////// PT /////////////////////////-->
        <div :style="{'position': 'absolute','top': '38px','left': '970px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-8</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '70px','left': '1010px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-10</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '15px','left': '648px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-9</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '39px','left': '388px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-11</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '70px','left': '640px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-15</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '94px','left': '640px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-16</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '112px','left': '639px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-17</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '86px','left': '1010px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-12</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '101px','left': '1010px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-13</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '116px','left': '1010px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-14</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '131px','left': '1010px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-18</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '128px','left': '763px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-19</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '250px','left': '725px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-21</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '271px','left': '655px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-23</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '252px','left': '1070px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-20</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '272px','left': '1070px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-22</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '404px','left': '800px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-25</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '404px','left': '873px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-24</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '404px','left': '946px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-23</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '506px','left': '838px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-28</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '505px','left': '910px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-27</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '505px','left': '982px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-26</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '610px','left': '760px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-29</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '635px','left': '760px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-30</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '663px','left': '760px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-31</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '683px','left': '760px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-32</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '600px','left': '414px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-33</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '627px','left': '415px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-34</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '655px','left': '415px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-35</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '685px','left': '415px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-36</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '713px','left': '543px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-38</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '681px','left': '866px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-37</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '745px','left': '456px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-40</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '702px','left': '928px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-39</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '779px','left': '393px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-42</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '817px','left': '473px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-44</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '816px','left': '600px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-46</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '854px','left': '675px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-48</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '779px','left': '756px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-41</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '799px','left': '877px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-43</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '844px','left': '832px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-45</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>
        <div :style="{'position': 'absolute','top': '852px','left': '932px','display':'inline-table'}">
            <!--<span :style="{'color': 'white','background-color':'black','color':'white !important','font-size':'10px','margin-right':'5px'}">PT-47</span>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'10px !important','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'white !important','font-size':'10px !important'}">bar</span>
        </div>

        <div :style="{'position': 'absolute','top': '821px','left': '986px','display':'inline-table'}">
            <p :style="{'color': 'white','font-size':'10px','margin-bottom':'-8px'}">FM-28</p>
            <span :style="{'background-color':'black','color':'#BFFF00','font-size':'10px !important','padding':'0px 3px'}">NA</span>
            <p :style="{'color': 'white !important','font-size':'13px','margin-top':'5px'}"> &#13221;/hr</p>
        </div>

        <!--////////////////////////////////////////////////////////-->
        <div :style="{'position': 'absolute','top': '406px','left': '1747px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <img src="images/h11.png" width="40" v-if="pump.p705a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>

            <p :style="{'color': 'white','position':'absolute','top':'53px','left':'6px'}">P-804</p>
        </div>
        <div :style="{'position': 'absolute','top': '487px','left': '1747px','display':'inline-table'}" v-for="pump in pump_interval">

            <img src="images/h11.png" width="40" v-if="pump.p705b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>
        <div :style="{'position': 'absolute','top': '525px','left': '1747px','display':'inline-table'}" v-for="pump in pump_interval">
            <img src="images/h11.png" width="40" v-if="pump.p705a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <p :style="{'color': 'white','position':'absolute','top':'45px','left':'6px'}">P-805</p>
        </div>
        <div :style="{'position': 'absolute','top': '590px','left': '1747px','display':'inline-table'}" v-for="pump in pump_interval">

            <img src="images/h11.png" width="40" v-if="pump.p705b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">B</p>
        </div>
        <div :style="{'position': 'absolute','top': '573px','left': '151px','display':'inline-table'}" v-for="pump in pump_interval">
            <p :style="{'color': 'white'}">CT Pump A</p>
            <img src="images/h11.png" width="40" v-if="pump.p705a_status == '1' ">
            <img src="images/h22.png" width="40" v-else>

        </div>
        <div :style="{'position': 'absolute','top': '653px','left': '151px','display':'inline-table'}" v-for="pump in pump_interval">

            <img src="images/h11.png" width="40" v-if="pump.p705b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white'}">CT Pump B</p>
        </div>

    </div>
</template>

<script>

import {screen3} from "../helpers/api";

export default {
    name: "Screen3",
    data() {
        return {
            dt_aio: [],
            pump_interval: [],
           
        }
    },
    methods: {
        getData() {
            const token = "Bearer "+this.currentUser.token;
            screen3(token)
                .then((res)=>{
                    this.dt_aio = res.dt_aio
                    this.pump_interval = res.pump_interval        
                    this.showbar();
                })
                .catch((err)=>{
                    console.log(err)
                });
        },
        showbar(){
            $(document).ready(function() {
                var rdl_3 = $("#rdl_3").text();
                var data3 = (350 / 100) * parseInt(rdl_3);
                if (data3 >= 100) {
                    data3 = 100
                }
                var add_rld_3 = data3;
                $('.rdl_3_inner').css('height', add_rld_3 + 'px');
                //////////////////////
                var rdl_16 = $("#rdl_16").text();
                var data16 = (68 / 100) * parseInt(rdl_16);
                if (data16 >= 100) {
                    data16 = 100
                }
                var add_rld_16 = data16;
                $('.rdl_16_inner').css('height', add_rld_16 + 'px');
                //////////////////////
                var rdl_30 = $("#rdl_30").text();
                var data30 = (68 / 100) * parseInt(rdl_30);
                if (data30 >= 100) {
                    data30 = 100
                }
                var add_rld_30 = data30;
                $('.rdl_30_inner').css('height', add_rld_30 + 'px');

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
        currentUser(){
            return this.$store.getters.currentUser
        }
    },
    watch: {}

}
</script>

<style scoped>
/*///////// RDL 3 bar////////*/
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
.rdl_30_inner, .rdl_30_inner div {
    width: 100%;
    overflow: hidden;
    /* left: -2px; */
    position: absolute;
}
.rdl_30_inner {
    /*border: 2px solid #999;*/
    border-top-width: 0;
    background-color: #1C96C5;
    bottom: 0;
    height: 0%;
}
.rdl_30_inner div {
    top: 0;
    width: 100%;
    height: 5px;
}
/*//////////////end////////////*/
p{
    color: white;
    margin: 0px;
    font-size: 10px;
}
span{
    color:#BFFF00 !important;
    font-size: 10px !important;
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
