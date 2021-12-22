<?php

namespace App\Http\Controllers;

use App\RDL;
use App\RTD;
use App\Valves_status;
use Illuminate\Http\Request;

class Screen3Controller extends Controller
{
    //
//    public function index(Request $request) {
//        $rtd = DB::select("SELECT timing, rtd_1
//FROM rtd WHERE timing BETWEEN '2021-04-29 14:22:31' AND '2021-05-29 14:22:31' AND rtd_id MOD '1' = 0 ORDER BY rtd_id ASC");
//
//
////        $res = json_encode($res);
//        $response = [
//            'rtd'=>$rtd,
//
////            'message'=>"Saved Successfully!",
//            'status_code'=>200
//        ];
//        return response()->json($response);
//
//    }
    public function ShowGraph(){
        return view('graph');
    }
}
