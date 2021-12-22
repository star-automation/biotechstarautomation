<?php

namespace App\Http\Controllers;

use App\fm_ft;
use App\RDL;
use App\RTD;
use App\Fm;
use App\Setpoint;
use App\Volume_dpl;
use App\dt_aio;
use DB;
use Illuminate\Http\Request;

class Screen2Controller extends Controller
{
    public function index(Request $request) {
        $dt_aio = dt_aio::orderBy("dt_id", "DESC")->first();
        $set_point = Setpoint::orderBy("sp_id")->first();
        $pump_interval = DB::SELECT("SELECT
       MAX(IF(pump_name='p501a' , pump_status, 0)) AS p501a_status,
       MAX(IF(pump_name='p501b' , pump_status, 0)) AS p501b_status,
       MAX(IF(pump_name='p502a' , pump_status, 0)) AS p502a_status,
       MAX(IF(pump_name='p502b' , pump_status, 0)) AS p502b_status,
       MAX(IF(pump_name='p503a' , pump_status, 0)) AS p503a_status,
       MAX(IF(pump_name='p503b' , pump_status, 0)) AS p503b_status,
       MAX(IF(pump_name='p505a' , pump_status, 0)) AS p505a_status,
       MAX(IF(pump_name='p505b' , pump_status, 0)) AS p505b_status,
       MAX(IF(pump_name='p401a' , pump_status, 0)) AS p401a_status,
       MAX(IF(pump_name='p401b' , pump_status, 0)) AS p401b_status,
       MAX(IF(pump_name='p402a' , pump_status, 0)) AS p402a_status,
       MAX(IF(pump_name='p402b' , pump_status, 0)) AS p402b_status,
       MAX(IF(pump_name='p402c' , pump_status, 0)) AS p402c_status,
       MAX(IF(pump_name='p403a' , pump_status, 0)) AS p403a_status,
       MAX(IF(pump_name='p403b' , pump_status, 0)) AS p403b_status,
       MAX(IF(pump_name='p404a' , pump_status, 0)) AS p404a_status,
       MAX(IF(pump_name='p404b' , pump_status, 0)) AS p404b_status,
       MAX(IF(pump_name='p405a' , pump_status, 0)) AS p405a_status,
       MAX(IF(pump_name='p405b' , pump_status, 0)) AS p405b_status,
       MAX(IF(pump_name='p702a' , pump_status, 0)) AS p702a_status,
       MAX(IF(pump_name='p702b' , pump_status, 0)) AS p702b_status,
       MAX(IF(pump_name='p705a' , pump_status, 0)) AS p705a_status,
       MAX(IF(pump_name='p705b' , pump_status, 0)) AS p705b_status,
       MAX(IF(pump_name='p102a' , pump_status, 0)) AS p102a_status,
       MAX(IF(pump_name='p102b' , pump_status, 0)) AS p102b_status,
       MAX(IF(pump_name='p103a' , pump_status, 0)) AS p103a_status,
       MAX(IF(pump_name='p103b' , pump_status, 0)) AS p103b_status,
       MAX(IF(pump_name='p202b' , pump_status, 0)) AS p202b_status,
       MAX(IF(pump_name='p203a' , pump_status, 0)) AS p203a_status,
       MAX(IF(pump_name='p203b' , pump_status, 0)) AS p203b_status,
       MAX(IF(pump_name='p601a' , pump_status, 0)) AS p601a_status,
       MAX(IF(pump_name='p601b' , pump_status, 0)) AS p601b_status,
       MAX(IF(pump_name='p602a' , pump_status, 0)) AS p602a_status,
       MAX(IF(pump_name='p602b' , pump_status, 0)) AS p602b_status,
       MAX(IF(pump_name='p603a' , pump_status, 0)) AS p603a_status,
       MAX(IF(pump_name='p603b' , pump_status, 0)) AS p603b_status,
       MAX(IF(pump_name='p204a' , pump_status, 0)) AS p204a_status,
       MAX(IF(pump_name='p204b' , pump_status, 0)) AS p204b_status,
       MAX(IF(pump_name='p204c' , pump_status, 0)) AS p204c_status,
       MAX(IF(pump_name='p407a' , pump_status, 0)) AS p407a_status,
       MAX(IF(pump_name='p407b' , pump_status, 0)) AS p407b_status,
       MAX(IF(pump_name='p406a' , pump_status, 0)) AS p406a_status,
       MAX(IF(pump_name='p406b' , pump_status, 0)) AS p406b_status
       FROM pump_interval");
//        $res = json_encode($res);
        $response = [
          
            'pump_interval'=>$pump_interval,
            'setpoint'=>$set_point,
            'dt_aio' => $dt_aio,
            'status_code'=>200
        ];
        return response()->json($response);

    }
}
