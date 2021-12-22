<?php

namespace App\Http\Controllers;

use App\RDL;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RDLController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request) {
        $rdl = new RDL();
        $rdl->rdl_1 = $request->get("rdl_1");
        $rdl->rdl1_status = $request->get("rdl1_status");
        $rdl->rdl_2 = $request->get("rdl_2");
        $rdl->rdl2_status = $request->get("rdl2_status");
        $rdl->rdl_3 = $request->get("rdl_3");
        $rdl->rdl3_status = $request->get("rdl3_status");
        $rdl->rdl_4 = $request->get("rdl_4");
        $rdl->rdl4_status = $request->get("rdl4_status");
        $rdl->rdl_5 = $request->get("rdl_5");
        $rdl->rdl5_status = $request->get("rdl5_status");
        $rdl->rdl_6 = $request->get("rdl_6");
        $rdl->rdl6_status = $request->get("rdl6_status");
        $rdl->rdl_7 = $request->get("rdl_7");
        $rdl->rdl7_status = $request->get("rdl7_status");
        $rdl->rdl_8 = $request->get("rdl_8");
        $rdl->rdl8_status = $request->get("rdl8_status");
        $rdl->rdl_9 = $request->get("rdl_9");
        $rdl->rdl9_status = $request->get("rdl9_status");
        $rdl->rdl_10 = $request->get("rdl_10");
        $rdl->rdl10_status = $request->get("rdl10_status");
        $rdl->rdl_11 = $request->get("rdl_11");
        $rdl->rdl11_status = $request->get("rdl11_status");
        $rdl->rdl_12 = $request->get("rdl_12");
        $rdl->rdl12_status = $request->get("rdl12_status");
        $rdl->rdl_13 = $request->get("rdl_13");
        $rdl->rdl13_status = $request->get("rdl13_status");
        $rdl->rdl_14 = $request->get("rdl_14");
        $rdl->rdl14_status = $request->get("rdl14_status");
        $rdl->rdl_15 = $request->get("rdl_15");
        $rdl->rdl15_status = $request->get("rdl15_status");
        $rdl->rdl_16 = $request->get("rdl_16");
        $rdl->rdl16_status = $request->get("rdl16_status");
        $rdl->rdl_17 = $request->get("rdl_17");
        $rdl->rdl17_status = $request->get("rdl17_status");
        $rdl->rdl_18 = $request->get("rdl_18");
        $rdl->rdl18_status = $request->get("rdl18_status");
        $rdl->rdl_19 = $request->get("rdl_19");
        $rdl->rdl19_status = $request->get("rdl19_status");
        $rdl->rdl_20 = $request->get("rdl_20");
        $rdl->rdl20_status = $request->get("rdl20_status");
        $rdl->rdl_21 = $request->get("rdl_21");
        $rdl->rdl21_status = $request->get("rdl21_status");
        $rdl->rdl_22 = $request->get("rdl_22");
        $rdl->rdl22_status = $request->get("rdl22_status");
        $rdl->rdl_23 = $request->get("rdl_23");
        $rdl->rdl23_status = $request->get("rdl23_status");
        $rdl->rdl_24 = $request->get("rdl_24");
        $rdl->rdl24_status = $request->get("rdl24_status");
        $rdl->rdl_25 = $request->get("rdl_25");
        $rdl->rdl25_status = $request->get("rdl25_status");
        $rdl->dpl_1 = $request->get("dpl_1");
        $rdl->dpl1_status = $request->get("dpl1_status");
        $rdl->dpl_2 = $request->get("dpl_2");
        $rdl->dpl2_status = $request->get("dpl2_status");
        $rdl->dpl_3 = $request->get("dpl_3");
        $rdl->dpl3_status = $request->get("dpl3_status");
        $rdl->dpl_4 = $request->get("dpl_4");
        $rdl->dpl4_status = $request->get("dpl4_status");
        $rdl->dpl_5 = $request->get("dpl_5");
        $rdl->dpl5_status = $request->get("dpl5_status");
        $rdl->dpl_6 = $request->get("dpl_6");
        $rdl->dpl6_status = $request->get("dpl6_status");
        $rdl->dpl_7 = $request->get("dpl_7");
        $rdl->dpl7_status = $request->get("dpl7_status");
        $res = $rdl->save();
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
