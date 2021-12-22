<template>
    <div class="login row justify-content-center" style="width: 100%">

        <div class="col-md-10" style="margin-top: 35px;margin-bottom: 35px; ">
            <h3 class="text-center">TRANSESTERIFICATION CATALYST CALCULATIONS</h3>
            <div class="row">
                <form @submit.prevent="" class="col-md-6">
                <table class="table table-dark  float-left" style="color: white !important;">
                    <thead>
                    <tr class="bg-info">
                        <th colspan="2">ACID OIL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-md-11">Initital AV </td>
                        <td ><input type="number" v-model="form1.acid_val1" v-on:keyup="fun1" style="width: 100px;" /></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">AV after final Pre Drain</td>
                        <td ><input type="number" v-model="form1.acid_val2" v-on:keyup="fun1" style="width: 100px;"/></td>

                    </tr>
                    <tr>
                        <td class="col-md-10">Catalyst Concentration </td>
                        <td ><div style="display: flex"><input type="number" v-model="form1.acid_val3" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Specific Gravity of Oil</td>
                        <td ><input type="number" v-on:keyup="fun1" v-model="form1.acid_val4" style="width: 100px;"/></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">NAOH required for Neutralization <span class="formula_span">{{form1.acid_val2}}/<input type="number" class="custom_formula" v-on:keyup="fun1" v-model="form1.for_1">*<input type="number" v-on:keyup="fun1" class="custom_formula" v-model="form1.for_2"></span></td>
                        <td ><div style="display: flex"><input v-model="form1.acid_val5" type="number" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">NAOH required for Triglycerides conversion <span class="formula_span"><input type="number" v-on:keyup="fun1" class="custom_formula" v-model="form1.for_3">-{{form1.acid_val1}}/<input type="number" class="custom_formula" v-on:keyup="fun1" v-model="form1.for_4">*<input type="number" v-on:keyup="fun1" class="custom_formula" v-model="form1.for_5"></span></td>
                        <td ><div style="display: flex"><input type="number" v-model="form1.acid_val6" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Total NAOH required <span class="formula_span">{{form1.acid_val5}}+{{form1.acid_val6}}</span></td>
                        <td ><div style="display: flex"><input type="number" v-model="form1.acid_val7" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">If Methanol to be added to Trans is @ the rate of :::</td>
                        <td ><div style="display: flex"><input type="number" v-on:keyup="fun1" v-model="form1.acid_val8" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Then IDEAL Catalyst Solution Concentration
                            <span class="formula_span">
                                (<input type="number" class="custom_formula" v-on:keyup="fun1" v-model="form1.for_6">
                                ({{form1.acid_val6}}/<input type="number" v-on:keyup="fun1" class="custom_formula" v-model="form1.for_7">)/(
                                <input type="number" class="custom_formula" v-on:keyup="fun1" v-model="form1.for_8">*({{form1.acid_val8}}/
                                <input type="number" class="custom_formula" v-on:keyup="fun1" v-model="form1.for_9">)))
                                <input type="number" class="custom_formula" v-on:keyup="fun1" v-model="form1.for_10"></span></td>
                        <td ><div style="display: flex"><input type="number" v-model="form1.acid_val9" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr style="font-weight: 600;font-size: 17px;">
                        <td class="col-md-11" >Basis for OIL Flow Rate to Trans Reactor</td>
                        <td ><div style="display: flex"><input type="number" v-on:keyup="fun1" v-model="form1.acid_val10" style="width: 100px;"/> <span class="custom-add-sign">M3/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Weight of Oil going to reactor / Hour   <span class="formula_span">{{form1.acid_val10}}*{{form1.acid_val4}}</span></td>
                        <td ><div style="display: flex"><input type="number" v-model="form1.acid_val11" style="width: 100px;" readonly/> <span class="custom-add-sign">Tons/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Catalyst (Pure KOH) required / Hour  <span class="formula_span">({{form1.acid_val11}}*{{form1.acid_val7}})/<input type="number" class="custom_formula" v-on:keyup="fun1" v-model="form1.for_11"></span></td>
                        <td ><div style="display: flex"><input type="number" v-model="form1.acid_val12" style="width: 100px;"/> <span class="custom-add-sign">Tons/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11" colspan="2">2 Tons of Pure NAOH is contained in 100 M3 of Catalyst Solution</td>


                    </tr>
                    <tr style="font-weight: 600;font-size: 17px;background-color: #b79a0b">
                        <td class="col-md-11">Therefore Catalyst Flow Rate Required <span class="formula_span">((<input type="number" class="custom_formula" v-on:keyup="fun1" v-model="form1.for_12">/{{form1.acid_val3}})*{{form1.acid_val12}})<input type="number" class="custom_formula" v-on:keyup="fun1" v-model="form1.for_13"></span></td>
                        <td ><div style="display: flex"><input type="number" v-model="form1.acid_val13" style="width: 100px;" readonly/> <span class="custom-add-sign">M3/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Methanol Concentration in 100 M3 of Catalyst Solution is <span class="formula_span">{{form1.acid_val3}}-<input type="number" class="custom_formula" v-on:keyup="fun1" v-model="form1.for_14"></span></td>
                        <td ><div style="display: flex"><input type="number" v-model="form1.acid_val14" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Therefore Methanol going to Trans Reactor with Catalyst solution <span class="formula_span">({{form1.acid_val14}}*{{form1.acid_val13}})/<input type="number" class="custom_formula" v-on:keyup="fun1" v-model="form1.for_15"></span></td>
                        <td ><div style="display: flex"><input type="number" v-model="form1.acid_val15" style="width: 100px;"/> <span class="custom-add-sign">M3/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Therefore Methanol %age (Volume / Weight) <span class="formula_span">({{form1.acid_val15}}/{{form1.acid_val11}})*<input type="number" class="custom_formula" v-on:keyup="fun1" v-model="form1.for_16"></span></td>
                        <td ><div style="display: flex"><input type="number" v-model="form1.acid_val16" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">And Methanol %age (Volume / Volume) <span class="formula_span">({{form1.acid_val15}}/{{form1.acid_val10}})*<input type="number" class="custom_formula" v-on:keyup="fun1" v-model="form1.for_17"></span></td>
                        <td ><div style="display: flex"><input type="number" v-model="form1.acid_val17" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td colspan="2" class="p-0">
                            <input type="submit" class="btn btn-primary btn-block">
                        </td>
                    </tr>
                    </tbody>

                </table>
                </form>
                <form @submit.prevent="" class="col-md-6">
                <table class="table table-dark col-md-6 float-right" style="color: white !important;">
                    <thead>
                    <tr class="bg-info">
                        <th colspan="2">Refined oil  and Crude Oil R1</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-md-11">Initital AV </td>
                        <td ><input type="number" v-model="form2.r1_val1" style="width: 100px;" /></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">AV of when Roud Starts</td>
                        <td ><input type="number" v-model="form2.r1_val2" style="width: 100px;"/></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Catalyst Concentration </td>
                        <td ><div style="display: flex"><input type="number" v-model="form2.r1_val3" style="width: 100px;" /> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Specific Gravity of Oil</td>
                        <td ><input type="number" v-model="form2.r1_val4" style="width: 100px;" /></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">NAOH required for Neutralization <span class="formula_span">({{form2.r1_val2}}/<input type="number" class="custom_formula" v-model="form2.formula_1">)*<input type="number" class="custom_formula" v-on:keyup="fun2" v-model="form2.formula_2"></span></td>
                        <td ><div style="display: flex"><input type="number" v-model="form2.r1_val5" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">NAOH required for Triglycerides conversion <span class="formula_span"><input type="number" class="custom_formula" v-model="form2.formula_3">-{{form2.r1_val1}}/<input type="number" class="custom_formula" v-on:keyup="fun2" v-model="form2.formula_4">*<input type="number" class="custom_formula" v-on:keyup="fun2" v-model="form2.formula_5"></span></td>
                        <td ><div style="display: flex"><input type="number" v-model="form2.r1_val6" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Total NAOH required </td>
                        <td ><div style="display: flex"><input type="number" v-model="form2.r1_val7" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">If Methanol to be added to Trans is @ the rate of :::</td>
                        <td ><div style="display: flex"><input type="number" v-model="form2.r1_val8" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Then IDEAL Catalyst Solution Concentration</td>
                        <td ><div style="display: flex"><input type="number" v-model="form2.r1_val9" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr style="font-weight: 600;font-size: 17px;">
                        <td class="col-md-11" colspan="2">Round 1 Batch Reaction </td>


                    </tr>
                    <tr >
                        <td class="col-md-11">Enter Batch Volume here</td>
                        <td style="font-weight: 600;font-size: 17px;"><div style="display: flex"><input type="number" v-model="form2.r1_val3" style="width: 100px;"/> <span class="custom-add-sign">M3</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Weight of Oil going to reactor / Hour</td>
                        <td ><div style="display: flex"><input type="number" v-model="form2.r1_val10" style="width: 100px;"/> <span class="custom-add-sign">Tons/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Catalyst (Pure KOH) required / Hour</td>
                        <td ><div style="display: flex"><input type="number" v-model="form2.r1_val11" style="width: 100px;"/> <span class="custom-add-sign">Tons/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">2 Tons of Pure NAOH is contained in 100 M3 of Catalyst Solution</td>
                        <td ><input type="number" v-model="form2.r1_val12" style="width: 100px;"/></td>

                    </tr>
                    <tr style="font-weight: 600;font-size: 17px;background-color: #b79a0b">
                        <td class="col-md-11" >Total Alkali Addition </td>
                        <td ><div style="display: flex"><input type="number" v-model="form2.r1_val13" style="width: 100px;"/> <span class="custom-add-sign">m3 total</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Methanol Concentration in 100 M3 of Catalyst Solution is </td>
                        <td ><div style="display: flex"><input type="number" v-model="form2.r1_val14" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Therefore Methanol going to Trans Reactor with Catalyst solution</td>
                        <td ><div style="display: flex"><input type="number" v-model="form2.r1_val15" style="width: 100px;"/> <span class="custom-add-sign">M3/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Therefore Methanol %age (Volume / Weight) </td>
                        <td ><div style="display: flex"><input type="number" v-model="form2.r1_val16" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">And Methanol %age (Volume / Volume)</td>
                        <td ><div style="display: flex"><input type="number" v-model="form2.r1_val17" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>

                    <tr>
                        <td colspan="2" class="p-0">
                            <input type="submit" class="btn btn-primary btn-block">
                        </td>
                    </tr>
                    </tbody>

                </table>
                </form>
            </div>
            <div class="row">
                <form @submit.prevent="" class="col-md-6">
                <table class="table table-dark float-left" style="color: white !important;">
                    <thead>
                    <tr class="bg-info">
                        <th colspan="2">RECOVERED OIL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-md-11">AV Oil Charged to PPR </td>
                        <td ><input type="number" style="width: 100px;" value="50"/></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">AV after final Pre Drain </td>
                        <td ><input type="number" style="width: 100px;" value="50"/></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Catalyst Concentration  </td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Specific Gravity of Oil</td>
                        <td ><input type="number" style="width: 100px;" value="50"/></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">NAOH required for Neutralization </td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">NAOH required for Triglycerides conversion</td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Total NAOH required </td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">If Methanol to be added to Trans is @ the rate of :::</td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Then IDEAL Catalyst Solution Concentration</td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr style="font-weight: 600;font-size: 17px;">
                        <td class="col-md-11">Basis for OIL Flow Rate to Trans Reactor</td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">M3/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Weight of Oil going to reactor / Hour</td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Catalyst (Pure KOH) required / Hour </td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">2 Tons of Pure NAOH is contained in 100 M3 of Catalyst Solution </td>
                        <td ><input type="number" style="width: 100px;" value="50"/></td>

                    </tr>
                    <tr style="font-weight: 600;font-size: 17px;background-color: #b79a0b">
                        <td class="col-md-11">Therefore Catalyst Flow Rate Required </td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">M3/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Methanol Concentration in 100 M3 of Catalyst Solution is </td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Therefore Methanol going to Trans Reactor with Catalyst solution</td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">M3/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Therefore Methanol %age (Volume / Weight) </td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">And Methanol %age (Volume / Volume)</td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                     <tr>
                        <td colspan="2" class="p-0">
                            <input type="submit" class="btn btn-primary btn-block">
                        </td>
                    </tr>
                    </tbody>

                </table>
                </form>
                <form @submit.prevent="" class="col-md-6">
                <table class="table table-dark float-right" style="color: white !important;">
                    <thead>
                    <tr class="bg-info">
                        <th colspan="2">Refined oil round  and crude oil R2</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-md-11">Initital AV </td>
                        <td ><input type="number" style="width: 100px;"/></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">AV after final Pre Drain</td>
                        <td ><input type="number" style="width: 100px;"/></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Catalyst Concentration </td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Specific Gravity of Oil</td>
                        <td ><input type="number" style="width: 100px;"/></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">NAOH required for Neutralization</td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">NAOH required for Triglycerides conversion</td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Total NAOH required </td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">If Methanol to be added to Trans is @ the rate of :::</td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Then IDEAL Catalyst Solution Concentration</td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr style="font-weight: 600;font-size: 17px;">
                        <td class="col-md-11">Basis for OIL Flow Rate to Trans Reactor </td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">M3/Hour</span></div></td>

                    </tr>

                    <tr>
                        <td class="col-md-11">Weight of Oil going to reactor / Hour</td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">Tons/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Catalyst (Pure KOH) required / Hour</td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">Tons/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">2 Tons of Pure NAOH is contained in 100 M3 of Catalyst Solution</td>
                        <td ><input type="number" style="width: 100px;"/></td>

                    </tr>
                    <tr style="font-weight: 600;font-size: 17px;background-color: #b79a0b">
                        <td class="col-md-6">Therefore Catalyst Flow Rate Required </td>
                        <td class="col-md-4"><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign" style="width: 142px;">m3/Hour(at the End of Each Hour)</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Methanol Concentration in 100 M3 of Catalyst Solution is </td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Therefore Methanol going to Trans Reactor with Catalyst solution</td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">M3/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Therefore Methanol %age (Volume / Weight) </td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">And Methanol %age (Volume / Volume)</td>
                        <td ><div style="display: flex"><input type="number" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                     <tr>
                        <td colspan="2" class="p-0">
                            <input type="submit" class="btn btn-primary btn-block">
                        </td>
                    </tr>
                    </tbody>

                </table>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import {login} from "../helpers/auth";
import {screen1} from "../helpers/api";
import {Viewallusers} from "../helpers/api";

export default {
    name: "Login",
    data() {
        return {
            form1:{
                acid_val1:50.00,acid_val2:6.00,acid_val3:2.00,acid_val4:2.00,acid_val5:2.00,acid_val6:0.00,acid_val7:0.00,acid_val8:10.00,acid_val9:0.00,acid_val10:5.5,acid_val11:0.00,
                acid_val12:0.00,acid_val13:0.00,acid_val14:0.00,acid_val15:0.00, acid_val16:0.00,acid_val17:0.00,
                for_1:2,for_2:0.13,for_3:100,for_4:2,for_5:0.007,for_6:1,for_7:100,for_8:1,for_9:100,for_10:100,for_11:100,for_12:100,for_13:1.1,for_14:100,
                for_15:100,for_16:100,for_17:100
            },
            form2:{
                r1_val1:12,r1_val2:6,r1_val3:0.00,r1_val4:0.00,r1_val5:0.00,r1_val6:0.00,r1_val7:0.00,r1_val8:0.00,r1_val9:0,r1_val10:0,r1_val11:0,
                r1_val12:0,r1_val13:0,r1_val14:0,r1_val15:0,r1_val16:0,r1_val16:0,

                formula_1:2,formula_2:0.13,formula_3:100,formula_4:2,formula_5:0.007,formula_6:2,formula_7:2,formula_8:2,formula_9:2,formula_10:2,
                formula_11:2,formula_12:2,formula_13:2,formula_14:2,formula_15:2,formula_16:2,
            }

        }
    },
    created() {
        this.fun1();
        this.fun2();

    },
    methods: {
        fun1(){
            // For Form 1
            this.form1.acid_val5 = (this.form1.acid_val2/this.form1.for_1)*this.form1.for_2;
            this.form1.acid_val6 = (this.form1.for_3-(this.form1.acid_val1/this.form1.for_4))*this.form1.for_5;
            this.form1.acid_val7 = this.form1.acid_val6+this.form1.acid_val5;
            this.form1.acid_val9 =  ((this.form1.for_6*(this.form1.acid_val7/this.form1.for_7))/(this.form1.for_8*(this.form1.acid_val8/this.form1.for_9)))*this.form1.for_10;
            this.form1.acid_val11 = (this.form1.acid_val4*this.form1.acid_val10);

            this.form1.acid_val12 = (this.form1.acid_val11*this.form1.acid_val7)/this.form1.for_11;
            this.form1.acid_val13 = ((this.form1.for_12/this.form1.acid_val3)*this.form1.acid_val12)*this.form1.for_13;
            this.form1.acid_val14 = this.form1.for_14-this.form1.acid_val3;
            this.form1.acid_val15 = (this.form1.acid_val13*this.form1.acid_val14)/this.form1.for_15;
            this.form1.acid_val16 = (this.form1.acid_val15/this.form1.acid_val11)*this.form1.for_16;
            this.form1.acid_val17 = (this.form1.acid_val15/this.form1.acid_val10)*this.form1.for_17;

        },
         fun2(){
             this.form2.r1_val5 = (this.form2.r1_val2/this.form2.formula_1)*this.form2.formula_2;
             this.form2.r1_val6 = (this.form2.formula_3-(this.form2.r1_val1/this.form2.formula_4))*this.form2.formula_5;
         }
    },
    beforeCreate: function() {
        document.querySelector('body').style.maxWidth = "100%";
        document.querySelector('body').style.minWidth = "100%";

        // document.getElementById("main").style.overflow = "hidden";
    },
    mounted() {
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
//////////////////////
        if(this.$store.getters.currentUser.role == 2){
            // window.location.replace('/');
            alert('Frist Login As Admin!')
            window.location = "http://localhost:8000";
        }else if(this.$store.getters.currentUser.role == 3){
            alert('Frist Login As Admin!')
            window.location = "http://localhost:8000";
        }
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
.formula_span{
    float: right;
}
.custom_formula{
    width: 50px;
}
.table{
    max-width: 100%;
    border: 2px solid;
    font-size: 12px;
}
.table th{
    font-size: 17px;
}
.table td{
    padding: 0px 0px 0px 15px;
}
@media only screen and (max-width: 965px) {
    .table{
        width: 83%!important;
        margin: 0px auto;
    }
}

</style>
