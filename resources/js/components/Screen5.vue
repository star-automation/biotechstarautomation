<template>
    <div class="col-md-12" style="padding: 0px;">
        <!--    <img :src="backgroundImageUrl" />-->
        {{getData()}}
        <img src="images/screen5new.png" :style="{'width':'100%','height':'100%'}"/>
        <div style="position: absolute;top: 30px;left: 1082px;">
            <p style="font-size: 22px;">{{dt_aio.timing}}</p>
        </div>


        <div :style="{'position': 'absolute','top': '54px','left': '194px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-40</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '104px','left': '336px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-42</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '104px','left': '408px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-44</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '90px','left': '545px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-46</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '103px','left': '610px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-48</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '105px','left': '680px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-50</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '103px','left': '745px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-52</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '102px','left': '815px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-54</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '103px','left': '937px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-56</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '198px','left': '995px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-58</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '213px','left': '1081px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-60</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '105px','left': '1188px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-62</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '96px','left': '1419px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-64</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '85px','left': '1485px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-66</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '188px','left': '1683px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-68</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '212px','left': '1755px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-70</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '173px','left': '1816px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-72</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '210px','left': '1880px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-74</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
<!--        /////////// Bottom Rtds ///////////////////         -->

        <div :style="{'position': 'absolute','top': '438px','left': '170px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-39</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '380px','left': '336px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-41</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '373px','left': '408px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-43</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '368px','left': '545px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-45</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '380px','left': '610px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-47</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '380px','left': '680px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-49</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '380px','left': '748px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-51</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '335px','left': '815px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-53</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '335px','left': '947px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-55</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '333px','left': '1017px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-57</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '337px','left': '1085px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-59</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '376px','left': '1202px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-61</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '343px','left': '1400px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-63</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '419px','left': '1497px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-65</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '335px','left': '1683px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-67</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '335px','left': '1744px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-69</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '336px','left': '1827px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-71</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
        <div :style="{'position': 'absolute','top': '340px','left': '1880px','display':'inline-table'}">
<!--            <p :style="{'color': 'white','background-color':'black','margin-bottom':'-5px','text-align':'center','font-size':'9px'}">RTD-73</p>-->
            <span :style="{'background-color':'black','color':'#BFFF00','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">NA</span>
            <span :style="{'color': 'green','background-color':'black','border':'0.1px solid yellow','font-size':'9px','border-radius':'4px','padding':'0px 3px'}">&#8451;</span>
        </div>
<!--//////////////// FM /////////////////////-->
        <div :style="{'position': 'absolute','top': '63px','left': '272px','display':'inline-table'}">
            <p :style="{'color': 'white','margin-bottom':'5px','font-size':'15px'}">FM-27</p>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_17 <= -0.15">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','font-size':'15px','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_27}}</span>
            <p :style="{'color': 'white !important','font-size':'15px'}"> &#13221;/hr</p>
<!--            <p :style="{'color':'white !important','font-size':'15px'}"> Total Flow: </p>-->
<!--            <span :style="{'color':'#BFFF00','margin-bottom': '12px','font-size':'15px','background-color':'black'}">00.00  &#13221;</span>-->
        </div>
        <div :style="{'position': 'absolute','top': '426px','left': '274px','display':'inline-table'}">
            <p :style="{'color': 'white','font-size':'15px'}">FM-26</p>
            <span :style="{'background-color':'black','color':'#BFFF00 !important','border-radius':'4px','padding':'0px 3px'}" v-if="dt_aio.fm_16 <= -0.15">Error</span>
            <span :style="{'background-color':'black','color':'#BFFF00','font-size':'15px','border-radius':'4px','padding':'0px 3px'}" v-else>{{dt_aio.fm_26}}</span>
            <p :style="{'color': 'white !important','font-size':'13px','margin-top':'5px'}"> &#13221;/hr
<!--                <span :style="{'color':'white !important','font-size':'15px'}"> Total Flow: </span>-->
<!--                <span :style="{'color':'#BFFF00','margin-bottom': '12px','font-size':'15px','background-color':'black'}">00.00  &#13221;</span>-->
            </p>
        </div>
        <div :style="{'position': 'absolute','top': '809px','left': '269px','display':'inline-table'}" v-for="pump in pump_interval">

            <img src="images/h11.png" width="40" v-if="pump.p407c_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">B</p>


        </div>
        <div :style="{'position': 'absolute','top': '721px','left': '268px','display':'inline-table'}" v-for="pump in pump_interval">

            <img src="images/h11.png" width="40" v-if="pump.p704b_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white','text-align':'center'}">A</p>
            <p :style="{'color': 'white','position':'absolute','top':'47px','left':'6px'}">P-801<br>11kw</p>
        </div>
        <div :style="{'position': 'absolute','top': '810px','left': '465px','display':'inline-table'}" v-for="pump in pump_interval">
            <img src="images/h11.png" width="40" v-if="pump.p704d_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white'}">B 37kw</p>
        </div>
        <div :style="{'position': 'absolute','top': '722px','left': '464px','display':'inline-table'}" v-for="pump in pump_interval">


            <img src="images/h11.png" width="40" v-if="pump.p704e_status == '1' ">
            <img src="images/h22.png" width="40" v-else>
            <p :style="{'color': 'white'}">A 55kw</p>
            <p :style="{'color': 'white','position':'absolute','top':'55px','left':'6px'}">P-802</p>
        </div>
        <footer style="background: #003749; border: none;">
            <h3 style="text-align: center; color: white; padding:6px;margin:0px !important;">Cooling Tower | BioTech Powered By Star Automation</h3>
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
            pump_interval: [],
        }
    },
    methods: {
        getData() {
            const token = "Bearer "+this.currentUser.token;
            screen2(token)
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
    font-size: 11px;
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
