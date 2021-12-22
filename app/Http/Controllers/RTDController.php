<?php

namespace App\Http\Controllers;

use App\RTD;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RTDController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request) {
        $rtd = new RTD();
        $rtd->rtd_1 = $request->get("rtd_1");
        $rtd->rtd1_status = $request->get("rtd1_status");
        $rtd->rtd_2 = $request->get("rtd_2");
        $rtd->rtd2_status = $request->get("rtd2_status");
        $rtd->rtd_3 = $request->get("rtd_3");
        $rtd->rtd3_status = $request->get("rtd3_status");
        $rtd->rtd_4 = $request->get("rtd_4");
        $rtd->rtd4_status = $request->get("rtd4_status");
        $rtd->rtd_5 = $request->get("rtd_5");
        $rtd->rtd5_status = $request->get("rtd5_status");
        $rtd->rtd_6 = $request->get("rtd_6");
        $rtd->rtd6_status = $request->get("rtd6_status");
        $rtd->rtd_7 = $request->get("rtd_7");
        $rtd->rtd7_status = $request->get("rtd7_status");
        $rtd->rtd_8 = $request->get("rtd_8");
        $rtd->rtd8_status = $request->get("rtd8_status");
        $rtd->rtd_9 = $request->get("rtd_9");
        $rtd->rtd9_status = $request->get("rtd9_status");
        $rtd->rtd_10 = $request->get("rtd_10");
        $rtd->rtd10_status = $request->get("rtd10_status");
        $rtd->rtd_11 = $request->get("rtd_11");
        $rtd->rtd11_status = $request->get("rtd11_status");
        $rtd->rtd_12 = $request->get("rtd_12");
        $rtd->rtd12_status = $request->get("rtd12_status");
        $rtd->rtd_13 = $request->get("rtd_13");
        $rtd->rtd13_status = $request->get("rtd13_status");
        $rtd->rtd_14 = $request->get("rtd_14");
        $rtd->rtd14_status = $request->get("rtd14_status");
        $rtd->rtd_15 = $request->get("rtd_15");
        $rtd->rtd15_status = $request->get("rtd15_status");
        $rtd->rtd_16 = $request->get("rtd_16");
        $rtd->rtd16_status = $request->get("rtd16_status");
        $rtd->rtd_17 = $request->get("rtd_17");
        $rtd->rtd17_status = $request->get("rtd17_status");
        $rtd->rtd_18 = $request->get("rtd_18");
        $rtd->rtd18_status = $request->get("rtd18_status");
        $rtd->rtd_19 = $request->get("rtd_19");
        $rtd->rtd19_status = $request->get("rtd19_status");
        $rtd->rtd_20 = $request->get("rtd_20");
        $rtd->rtd20_status = $request->get("rtd20_status");
        $rtd->rtd_21 = $request->get("rtd_21");
        $rtd->rtd21_status = $request->get("rtd21_status");
        $rtd->rtd_22 = $request->get("rtd_22");
        $rtd->rtd22_status = $request->get("rtd22_status");
        $rtd->rtd_23 = $request->get("rtd_23");
        $rtd->rtd23_status = $request->get("rtd23_status");
        $rtd->rtd_24 = $request->get("rtd_24");
        $rtd->rtd24_status = $request->get("rtd24_status");
        $rtd->rtd_25 = $request->get("rtd_25");
        $rtd->rtd25_status = $request->get("rtd25_status");
        $rtd->rtd_26 = $request->get("rtd_26");
        $rtd->rtd26_status = $request->get("rtd26_status");
        $rtd->rtd_27 = $request->get("rtd_27");
        $rtd->rtd27_status = $request->get("rtd27_status");
        $rtd->rtd_28 = $request->get("rtd_28");
        $rtd->rtd28_status = $request->get("rtd28_status");
        $rtd->rtd_29 = $request->get("rtd_29");
        $rtd->rtd29_status = $request->get("rtd29_status");
        $rtd->rtd_30 = $request->get("rtd_30");
        $rtd->rtd30_status = $request->get("rtd30_status");
        $rtd->rtd_31 = $request->get("rtd_31");
        $rtd->rtd31_status = $request->get("rtd31_status");
        $res = $rtd->save();
        if ($res){
            $response = [
                'message'=>"Saved Successfully!",
                'status_code'=>200
            ];
            return response()->json($response);
        } else {
            $response = [
//                'user'=>$user,
//                'token'=>$token,
                'message'=>"Unable to Save",
                'status_code'=>400
            ];
            return response()->json($response);
        }
    }
}
