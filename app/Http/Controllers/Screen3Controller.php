<?php

namespace App\Http\Controllers;

use App\RDL;
use App\RTD;
use App\Fm;
use App\fm_ft;
use App\selection_record;
use App\Setpoint;
use App\Valves_status;
use App\Vg;
use App\Volume_dpl;
use App\Volume_rdl;
use App\Upload_report;
use App\dt_aio;
use Illuminate\Http\Request;
use DB;
use PhpOffice\PhpSpreadsheet\Calculation\LookupRef\Selection;

class Screen3Controller extends Controller
{
    public function SaveSelection(Request $req){
        $val_1='';$val_2='';$val_3='';$val_4='';$val_5='';$val_6='';$val_7  = '';$val_8  = '';
        $val_9  = '';$val_10 = '';$val_11='';$val_12='';$val_13='';$val_14='';$val_15='';$val_16='';

        $interval = $req->all()[1];
        $timing = $req->all()[2];
        $startdata = $req->all()[3];
        $enddata = $req->all()[4];
        $filter_range = $req->all()[5];
        $date1 = strtotime($startdata);
        $date2 = strtotime($enddata);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);
        if(sizeof($req->all()[0]) ==1){
            $val_1 =$req->all()[0][0];
        }if(sizeof($req->all()[0]) ==2){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
        }if(sizeof($req->all()[0]) ==3){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
        }if(sizeof($req->all()[0]) ==4){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
        }if(sizeof($req->all()[0]) ==5){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
        }if(sizeof($req->all()[0]) ==6){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
        }if(sizeof($req->all()[0]) ==7){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
        }if(sizeof($req->all()[0]) ==8){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
        }if(sizeof($req->all()[0]) ==9){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
        }if(sizeof($req->all()[0]) ==10){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
        }if(sizeof($req->all()[0]) ==11){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
        }if(sizeof($req->all()[0]) ==12){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
        }if(sizeof($req->all()[0]) ==13){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
        }if(sizeof($req->all()[0]) ==14){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
        }if(sizeof($req->all()[0]) ==15){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
        }if(sizeof($req->all()[0]) ==16){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
            $val_16 = $req->all()[0][15];
        }
        $yesterday_date = date("Y-m-d", strtotime("yesterday"));
        $today_date = date("Y-m-d", strtotime("-1 month"));
        $sub_date = "10:00";
        $con_date = $yesterday_date." ".$sub_date;
        $con_date2 = $today_date." ".$sub_date;
        $get_range = DB::select("SELECT * FROM multi_ranges ORDER BY range_id DESC LIMIT 1");
        $get_range1='';$get_range2='';$get_range3='';$get_range4='';$get_range5='';$get_range6='';$get_range7='';$get_range8='';$get_range9='';$get_range10='';
        $get_range11='';$get_range12='';$get_range13='';$get_range14='';$get_range15='';$get_range16='';
        if($val_1){
            $get_range1 = $get_range[0]->$val_1;
        }if($val_2){
            $get_range2 = $get_range[0]->$val_2;
        }if($val_3){
            $get_range3 = $get_range[0]->$val_3;
        }if($val_4){
            $get_range4 = $get_range[0]->$val_4;
        }if($val_5){
            $get_range5 = $get_range[0]->$val_5;
        }if($val_6){
            $get_range6 = $get_range[0]->$val_6;
        }if($val_7){
            $get_range7 = $get_range[0]->$val_7;
        }if($val_8){
            $get_range8 = $get_range[0]->$val_8;
        }if($val_9){
            $get_range9 = $get_range[0]->$val_9;
        }if($val_10){
            $get_range10 = $get_range[0]->$val_10;
        }if($val_11){
            $get_range11 = $get_range[0]->$val_11;
        }if($val_12){
            $get_range12 = $get_range[0]->$val_12;
        }if($val_13){
            $get_range13 = $get_range[0]->$val_13;
        }if($val_14){
            $get_range14 = $get_range[0]->$val_14;
        }if($val_15){
            $get_range15 = $get_range[0]->$val_15;
        }if($val_16){
            $get_range16 = $get_range[0]->$val_16;
        }    
       
        if($filter_range == 'n'){
            if ($timing == '1') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }
            }
            elseif ($timing == '2') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }
            }
            elseif ($timing == '3') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }
            }
            elseif ($timing == '4') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }
            }
            elseif ($timing == '5') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }
            }
        }
        else{
          
            if ($timing == '1') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '-' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '-' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '-' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '-' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '-' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '-' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }
            }
            elseif ($timing == '2') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '-' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '-' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '-' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '-' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '-' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '-' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }
            }
            elseif ($timing == '3') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '-' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '-' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '-' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '-' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '-' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '-' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }
            }
            elseif ($timing == '4') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '-' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '-' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '-' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '-' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '-' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '-' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }
            }
            elseif ($timing == '5') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '-' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '-' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '-' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '-' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '-' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '-' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '-' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '-' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '-' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '-' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '-' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '-' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '-' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '-' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '-' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '-' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '-' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '-' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }
            }
    
        }

         

        $response = [
            'val_1'=>$val_1,
            'get_range'=>$get_range,
            'status_code' => 200
        ];
        return response()->json($response);

    }
    public function ShowAverage(Request $req){
        $val_1='';$val_2='';$val_3='';$val_4='';$val_5='';$val_6='';$val_7  = '';$val_8  = '';
        $val_9  = '';$val_10 = '';$val_11='';$val_12='';$val_13='';$val_14='';$val_15='';$val_16='';

        $interval = $req->all()[1];
        $timing = $req->all()[2];
        $startdata = $req->all()[3];
        $enddata = $req->all()[4];
        $filter_range = $req->all()[5];
        $date1 = strtotime($startdata);
        $date2 = strtotime($enddata);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);
        if(sizeof($req->all()[0]) ==1){
            $val_1 =$req->all()[0][0];
        }if(sizeof($req->all()[0]) ==2){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
        }if(sizeof($req->all()[0]) ==3){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
        }if(sizeof($req->all()[0]) ==4){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
        }if(sizeof($req->all()[0]) ==5){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
        }if(sizeof($req->all()[0]) ==6){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
        }if(sizeof($req->all()[0]) ==7){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
        }if(sizeof($req->all()[0]) ==8){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
        }if(sizeof($req->all()[0]) ==9){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
        }if(sizeof($req->all()[0]) ==10){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
        }if(sizeof($req->all()[0]) ==11){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
        }if(sizeof($req->all()[0]) ==12){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
        }if(sizeof($req->all()[0]) ==13){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
        }if(sizeof($req->all()[0]) ==14){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
        }if(sizeof($req->all()[0]) ==15){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
        }if(sizeof($req->all()[0]) ==16){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
            $val_16 = $req->all()[0][15];
        }
        $yesterday_date = date("Y-m-d", strtotime("yesterday"));
        $today_date = date("Y-m-d", strtotime("-1 month"));
        $sub_date = "10:00";
        $con_date = $yesterday_date." ".$sub_date;
        $con_date2 = $today_date." ".$sub_date;
        $get_range = DB::select("SELECT * FROM multi_ranges ORDER BY range_id DESC LIMIT 1");
        $get_range1='';$get_range2='';$get_range3='';$get_range4='';$get_range5='';$get_range6='';$get_range7='';$get_range8='';$get_range9='';$get_range10='';
        $get_range11='';$get_range12='';$get_range13='';$get_range14='';$get_range15='';$get_range16='';
        if($val_1){
            $get_range1 = $get_range[0]->$val_1;
        }if($val_2){
            $get_range2 = $get_range[0]->$val_2;
        }if($val_3){
            $get_range3 = $get_range[0]->$val_3;
        }if($val_4){
            $get_range4 = $get_range[0]->$val_4;
        }if($val_5){
            $get_range5 = $get_range[0]->$val_5;
        }if($val_6){
            $get_range6 = $get_range[0]->$val_6;
        }if($val_7){
            $get_range7 = $get_range[0]->$val_7;
        }if($val_8){
            $get_range8 = $get_range[0]->$val_8;
        }if($val_9){
            $get_range9 = $get_range[0]->$val_9;
        }if($val_10){
            $get_range10 = $get_range[0]->$val_10;
        }if($val_11){
            $get_range11 = $get_range[0]->$val_11;
        }if($val_12){
            $get_range12 = $get_range[0]->$val_12;
        }if($val_13){
            $get_range13 = $get_range[0]->$val_13;
        }if($val_14){
            $get_range14 = $get_range[0]->$val_14;
        }if($val_15){
            $get_range15 = $get_range[0]->$val_15;
        }if($val_16){
            $get_range16 = $get_range[0]->$val_16;
        }    

        if($filter_range == 'n'){
            if ($timing == '1') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }
            }
            elseif ($timing == '2') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }
            }
            elseif ($timing == '3') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }
            }
            elseif ($timing == '4') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }
            }
            elseif ($timing == '5') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }
            }
        }
        else{
          
            if ($timing == '1') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '0' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }
            }
            elseif ($timing == '2') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '0' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }
            }
            elseif ($timing == '3') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '0' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }
            }
            elseif ($timing == '4') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '0' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }
            }
            elseif ($timing == '5') {
                if(sizeof($req->all()[0]) ==1){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if(sizeof($req->all()[0]) ==2){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==3){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==4){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==5){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==6){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==7){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==8){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==9){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==10){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==11){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==12){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==13){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==14){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==15){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }else if (sizeof($req->all()[0]) ==16){
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '0' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }
            }
    
        }

        $response = [
            'val_1'=>$val_1,
            'get_range'=>$get_range,
            'status_code' => 200
        ];
        return response()->json($response);

    }

    public function index(Request $request)
    {
        $dt_aio = dt_aio::orderBy("dt_id", "DESC")->first();
       
        $valves_status = Valves_status::orderBy("tag_id", "DESC")->first();
      
        $set_point = Setpoint::orderBy("sp_id", "DESC")->first();
       
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
            'dt_aio' => $dt_aio,
            
            'valves_status' => $valves_status,
            'pump_interval' => $pump_interval,
            'setpoint' => $set_point,
            'status_code' => 200
        ];
        return response()->json($response);

    }





    //////////////////////////////////
    public function PTpdfreport(Request $req)
    {
        $fromdate = $req->startdate;
        $todate = $req->enddate;
        $interval = $req->setInterval;
        $s_pt = $req->select_pt;

        $date1 = strtotime($fromdate);
        $date2 = strtotime($todate);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);

        $db_data = DB::select("SELECT *
FROM pt WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND pt_id MOD '$interval' = 0 ORDER BY pt_id ASC");

        /*
         *         $db_data = DB::select("SELECT *
FROM fm WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND fm_id MOD '$interval' = 0 ORDER BY fm_id ASC");
         * */

        $response = [
//        'rtd'=>$rtd,
            'db_data' => $db_data,
            'status_code' => 200
        ];
        return response()->json($response);
    }

    //////////////////////////////////////

    //////////////////////////////////
    public function VGpdfreport(Request $req)
    {
        $fromdate = $req->startdate;
        $todate = $req->enddate;
        $interval = $req->setInterval;
        $s_vg = $req->select_vg;

        $date1 = strtotime($fromdate);
        $date2 = strtotime($todate);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);

        $db_data = DB::select("SELECT *
FROM vg WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND vg_id MOD '$interval' = 0 ORDER BY vg_id ASC");

        /*
         *         $db_data = DB::select("SELECT *
FROM fm WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND fm_id MOD '$interval' = 0 ORDER BY fm_id ASC");
         * */

        $response = [
//        'rtd'=>$rtd,
            'db_data' => $db_data,
            'status_code' => 200
        ];
        return response()->json($response);
    }

    //////////////////////////////////////

    //////////////////////////////////
    public function flowTotall_pdfreport(Request $req)
    {
        $fromdate = $req->startdate;
        $todate = $req->enddate;
        $setInterval = $req->setInterval;
        $s_vg = $req->select_FM;

        $date1 = strtotime($fromdate);
        $date2 = strtotime($todate);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);
        if($s_vg == 'FM-all'){
            $db_data = DB::select("SELECT * FROM ft_log WHERE reset_time BETWEEN '$new_date1' AND '$new_date2' ORDER BY ft_log_id ASC");
        }else{
            $db_data = DB::select("SELECT * FROM ft_log WHERE reset_time BETWEEN '$new_date1' AND '$new_date2' AND fm_name = '$s_vg' ORDER BY ft_log_id ASC");
        }


        /*
         *         $db_data = DB::select("SELECT *
FROM fm WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND fm_id MOD '$interval' = 0 ORDER BY fm_id ASC");
         * */

        $response = [
//        'rtd'=>$rtd,
            'db_data' => $db_data,
            'status_code' => 200
        ];
        return response()->json($response);
    }

    //////////////////////////////////////
    public function VGgraphReport(Request $req)
    {

        $fromdate = $req->startdate;
        $todate = $req->enddate;
        $interval = $req->setInterval;
        $s_vg = $req->select_vg;

        $date1 = strtotime($fromdate);
        $date2 = strtotime($todate);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);

        $db_data = DB::select("SELECT timing, $s_vg
FROM vg WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND vg_id MOD '$interval' = 0 AND $s_vg>0 ORDER BY vg_id ASC");
        $vg = array();
        $timing = array();
        if ($s_vg === 'vg_1') {
            foreach ($db_data as $item) {
                array_push($vg, $item->vg_1);
                array_push($timing, $item->timing);
            }
        } elseif ($s_vg === 'vg_2') {
            foreach ($db_data as $item) {
                array_push($vg, $item->vg_2);
                array_push($timing, $item->timing);
            }
        } elseif ($s_vg === 'vg_3') {
            foreach ($db_data as $item) {
                array_push($vg, $item->vg_3);
                array_push($timing, $item->timing);
            }
        }

        $response = [
            'vg' => $vg,
            'timing' => $timing,
            'status_code' => 200
        ];
        return response()->json($response);
    }
    ///////////////////////////////////////////////
    //////////////////////////////////////
    public function PumpReport(Request $req)
    {
        $fromdate = $req->startdate;
        $todate = $req->enddate;
        $pump_name = $req->pumpname;

        $date1 = strtotime($fromdate);
        $date2 = strtotime($todate);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);

        $db_data = DB::select("SELECT pump_name,on_timing,off_timing,operator FROM pump_interval WHERE pump_name='$pump_name' And on_timing BETWEEN '$new_date1' AND '$new_date2'");

        return response()->json([
            'pump_data' => $db_data,
        ], 200);
    }
    //////////////////////////////////////
    public function PtgraphReporting(Request $req)
    {

        $fromdate = $req->startdate;
        $todate = $req->enddate;
        $interval = $req->setInterval;
        $s_pt = $req->select_pt;

        $date1 = strtotime($fromdate);
        $date2 = strtotime($todate);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);

        $db_data = DB::select("SELECT timing, $s_pt FROM pt WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND pt_id MOD '$interval' = 0 AND $s_pt > 0 ORDER BY pt_id ASC");
        $pt = array();
        $timing = array();
        if ($s_pt === 'pt_1') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_1);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_2') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_2);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_3') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_3);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_4') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_4);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_5') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_5);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_6') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_6);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_7') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_7);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_8') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_8);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_9') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_9);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_10') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_10);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_11') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_11);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_12') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_12);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_13') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_13);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_14') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_14);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_15') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_15);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_16') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_16);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_17') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_17);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_18') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_18);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_19') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_19);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_20') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_20);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_21') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_21);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_22') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_22);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_23') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_23);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_24') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_24);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_25') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_25);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_26') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_26);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_27') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_27);
                array_push($timing, $item->timing);
            }
        }

        $response = [
            'pt' => $pt,
            'timing' => $timing,
            'status_code' => 200
        ];
        return response()->json($response);
    }



    public function MultiGraph(Request $req){
        // For Level
        $val_1='';$val_2='';$val_3='';$val_4='';$val_5='';$val_6='';$val_7  = '';$val_8  = '';
        $val_9  = '';$val_10 = '';$val_11='';$val_12='';$val_13='';$val_14='';$val_15='';$val_16='';$timing=[];

        $value_1=[];$value_2=[];$value_3=[];$value_4=[];$value_5=[];$value_6=[];$value_7  = [];$value_8  = [];
        $value_9  = [];$value_10 = [];$value_11=[];$value_12=[];$value_13=[];$value_14=[];$value_15=[];$value_16=[];

        $db_data_1=[];$db_data_2=[];$db_data_3=[];$db_data_4=[];$db_data_5=[];$db_data_6=[];$db_data_7  = [];$db_data_8  = [];
        $db_data_9  = [];$db_data_10 = [];$db_data_11=[];$db_data_12=[];$db_data_13=[];$db_data_14=[];$db_data_15=[];$db_data_16=[];$timing=[];
        $rdl25_volume=[];$rdl25_mass=[];
        // For Volume
        $volume_1='';$volume_2='';$volume_3='';$volume_4='';$volume_5='';$volume_6='';$volume_7  = '';$volume_8  = '';
        $volume_9  = '';$volume_10 = '';$volume_11='';$volume_12='';$volume_13='';$volume_14='';$volume_15='';$volume_16=''; $Volume_timing=[];

        $vol_data_1=[];$vol_data_2=[];$vol_data_3=[];$vol_data_4=[];$vol_data_5=[];$vol_data_6=[];$vol_data_7  = [];$vol_data_8  = [];
        $vol_data_9  = [];$vol_data_10 = [];$vol_data_11=[];$vol_data_12=[];$vol_data_13=[];$vol_data_14=[];$vol_data_15=[];$vol_data_16=[];

        $vol_value_1=[];$vol_value_2=[];$vol_value_3=[];$vol_value_4=[];$vol_value_5=[];$vol_value_6=[];$vol_value_7  = [];$vol_value_8  = [];
        $vol_value_9  = [];$vol_value_10 = [];$vol_value_11=[];$vol_value_12=[];$vol_value_13=[];$vol_value_14=[];$vol_value_15=[];$vol_value_16=[];

        

        
        

        $interval = $req->all()[1];
        $timeCondition = $req->all()[2];
        $startdata = $req->all()[3];
        $enddata = $req->all()[4];
        $date1 = strtotime($startdata);
        $date2 = strtotime($enddata);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);
        if(sizeof($req->all()[0]) ==1){
            $val_1 =$req->all()[0][0];
        }if(sizeof($req->all()[0]) ==2){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
        }if(sizeof($req->all()[0]) ==3){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
        }if(sizeof($req->all()[0]) ==4){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
        }if(sizeof($req->all()[0]) ==5){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
        }if(sizeof($req->all()[0]) ==6){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
        }if(sizeof($req->all()[0]) ==7){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
        }if(sizeof($req->all()[0]) ==8){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
        }if(sizeof($req->all()[0]) ==9){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
        }if(sizeof($req->all()[0]) ==10){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
        }if(sizeof($req->all()[0]) ==11){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
        }if(sizeof($req->all()[0]) ==12){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
        }if(sizeof($req->all()[0]) ==13){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
        }if(sizeof($req->all()[0]) ==14){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
        }if(sizeof($req->all()[0]) ==15){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
        }if(sizeof($req->all()[0]) ==16){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
            $val_16 = $req->all()[0][15];
        }
        $array = $req->all()[0];
        $for_volumes = str_replace('rdl', 'vr', $array);
       
        if(sizeof($for_volumes) ==1){
            $volume_1 =$for_volumes[0];
        }if(sizeof($for_volumes) ==2){
            $volume_1 =$for_volumes[0];
            $volume_2 = $for_volumes[1];
        }if(sizeof($for_volumes) ==3){
            $volume_1 =$for_volumes[0];
            $volume_2 = $for_volumes[1];
            $volume_3 = $for_volumes[2];
        }if(sizeof($for_volumes) ==4){
            $volume_1 =$for_volumes[0];
            $volume_2 = $for_volumes[1];
            $volume_3 = $for_volumes[2];
            $volume_4 = $for_volumes[3];
        }if(sizeof($for_volumes) ==5){
            $volume_1 =$for_volumes[0];
            $volume_2 = $for_volumes[1];
            $volume_3 = $for_volumes[2];
            $volume_4 = $for_volumes[3];
            $volume_5 = $for_volumes[4];
        }if(sizeof($for_volumes) ==6){
            $volume_1 =$for_volumes[0];
            $volume_2 = $for_volumes[1];
            $volume_3 = $for_volumes[2];
            $volume_4 = $for_volumes[3];
            $volume_5 = $for_volumes[4];
            $volume_6 = $for_volumes[5];
        }if(sizeof($for_volumes) ==7){
            $volume_1 =$for_volumes[0];
            $volume_2 = $for_volumes[1];
            $volume_3 = $for_volumes[2];
            $volume_4 = $for_volumes[3];
            $volume_5 = $for_volumes[4];
            $volume_6 = $for_volumes[5];
            $volume_7 = $for_volumes[6];
        }if(sizeof($for_volumes) ==8){
            $volume_1 =$for_volumes[0];
            $volume_2 = $for_volumes[1];
            $volume_3 = $for_volumes[2];
            $volume_4 = $for_volumes[3];
            $volume_5 = $for_volumes[4];
            $volume_6 = $for_volumes[5];
            $volume_7 = $for_volumes[6];
            $volume_8 = $for_volumes[7];
        }if(sizeof($for_volumes) ==9){
            $volume_1 =$for_volumes[0];
            $volume_2 = $for_volumes[1];
            $volume_3 = $for_volumes[2];
            $volume_4 = $for_volumes[3];
            $volume_5 = $for_volumes[4];
            $volume_6 = $for_volumes[5];
            $volume_7 = $for_volumes[6];
            $volume_8 = $for_volumes[7];
            $volume_9 = $for_volumes[8];
        }if(sizeof($for_volumes) ==10){
            $volume_1 =$for_volumes[0];
            $volume_2 = $for_volumes[1];
            $volume_3 = $for_volumes[2];
            $volume_4 = $for_volumes[3];
            $volume_5 = $for_volumes[4];
            $volume_6 = $for_volumes[5];
            $volume_7 = $for_volumes[6];
            $volume_8 = $for_volumes[7];
            $volume_9 = $for_volumes[8];
            $volume_10 = $for_volumes[9];
        }if(sizeof($for_volumes) ==11){
            $volume_1 =$for_volumes[0];
            $volume_2 = $for_volumes[1];
            $volume_3 = $for_volumes[2];
            $volume_4 = $for_volumes[3];
            $volume_5 = $for_volumes[4];
            $volume_6 = $for_volumes[5];
            $volume_7 = $for_volumes[6];
            $volume_8 = $for_volumes[7];
            $volume_9 = $for_volumes[8];
            $volume_10 = $for_volumes[9];
            $volume_11 = $for_volumes[10];
        }if(sizeof($for_volumes) ==12){
            $volume_1 = $for_volumes[0];
            $volume_2 = $for_volumes[1];
            $volume_3 = $for_volumes[2];
            $volume_4 = $for_volumes[3];
            $volume_5 = $for_volumes[4];
            $volume_6 = $for_volumes[5];
            $volume_7 = $for_volumes[6];
            $volume_8 = $for_volumes[7];
            $volume_9 = $for_volumes[8];
            $volume_10 = $for_volumes[9];
            $volume_11 = $for_volumes[10];
            $volume_12 = $for_volumes[11];
        }if(sizeof($for_volumes) ==13){
            $volume_1 =$for_volumes[0];
            $volume_2 = $for_volumes[1];
            $volume_3 = $for_volumes[2];
            $volume_4 = $for_volumes[3];
            $volume_5 = $for_volumes[4];
            $volume_6 = $for_volumes[5];
            $volume_7 = $for_volumes[6];
            $volume_8 = $for_volumes[7];
            $volume_9 = $for_volumes[8];
            $volume_10 = $for_volumes[9];
            $volume_11 = $for_volumes[10];
            $volume_12 = $for_volumes[11];
            $volume_13 = $for_volumes[12];
        }if(sizeof($for_volumes) ==14){
            $volume_1 =$for_volumes[0];
            $volume_2 = $for_volumes[1];
            $volume_3 = $for_volumes[2];
            $volume_4 = $for_volumes[3];
            $volume_5 = $for_volumes[4];
            $volume_6 = $for_volumes[5];
            $volume_7 = $for_volumes[6];
            $volume_8 = $for_volumes[7];
            $volume_9 = $for_volumes[8];
            $volume_10 = $for_volumes[9];
            $volume_11 = $for_volumes[10];
            $volume_12 = $for_volumes[11];
            $volume_13 = $for_volumes[12];
            $volume_14 = $for_volumes[13];
        }if(sizeof($for_volumes) ==15){
            $volume_1 =$for_volumes[0];
            $volume_2 = $for_volumes[1];
            $volume_3 = $for_volumes[2];
            $volume_4 = $for_volumes[3];
            $volume_5 = $for_volumes[4];
            $volume_6 = $for_volumes[5];
            $volume_7 = $for_volumes[6];
            $volume_8 = $for_volumes[7];
            $volume_9 = $for_volumes[8];
            $volume_10 = $for_volumes[9];
            $volume_11 = $for_volumes[10];
            $volume_12 = $for_volumes[11];
            $volume_13 = $for_volumes[12];
            $volume_14 = $for_volumes[13];
            $volume_15 = $for_volumes[14];
        }if(sizeof($for_volumes) ==16){
            $volume_1 =$for_volumes[0];
            $volume_2 = $for_volumes[1];
            $volume_3 = $for_volumes[2];
            $volume_4 = $for_volumes[3];
            $volume_5 = $for_volumes[4];
            $volume_6 = $for_volumes[5];
            $volume_7 = $for_volumes[6];
            $volume_8 = $for_volumes[7];
            $volume_9 = $for_volumes[8];
            $volume_10 = $for_volumes[9];
            $volume_11 = $for_volumes[10];
            $volume_12 = $for_volumes[11];
            $volume_13 = $for_volumes[12];
            $volume_14 = $for_volumes[13];
            $volume_15 = $for_volumes[14];
            $volume_16 = $for_volumes[15];
        }
        // For Level Queries
        if ($timeCondition == '1') {
            if(sizeof($req->all()[0]) ==1){
                $db_data_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if(sizeof($req->all()[0]) ==2){
                $db_data_2 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==3){
                $db_data_3 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==4){
                $db_data_4 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==5){
                $db_data_5 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==6){
                $db_data_6 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==7){
                $db_data_7 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==8){
                $db_data_8 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==9){
                $db_data_9 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==10){
                $db_data_10 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==11){
                $db_data_11 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==12){
                $db_data_12 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==13){
                $db_data13 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==14){
                $db_data_14 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==15){
                $db_data_15 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==16){
                $db_data_16 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }
        }
        elseif ($timeCondition == '2') {
            if(sizeof($req->all()[0]) ==1){
                $db_data_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if(sizeof($req->all()[0]) ==2){
                $db_data_2 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==3){
                $db_data_3 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==4){
                $db_data_4 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==5){
                $db_data_5 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==6){
                $db_data_6 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==7){
                $db_data_7 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==8){
                $db_data_8 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==9){
                $db_data_9 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==10){
                $db_data_10 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==11){
                $db_data_11 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==12){
                $db_data_12 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==13){
                $db_data13 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==14){
                $db_data_14 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==15){
                $db_data_15 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==16){
                $db_data_16 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }
        }
        elseif ($timeCondition == '3') {
            if(sizeof($req->all()[0]) ==1){
                $db_data_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
           
            }else if(sizeof($req->all()[0]) ==2){
                $db_data_2 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==3){
                $db_data_3 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==4){
                $db_data_4 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==5){
                $db_data_5 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==6){
                $db_data_6 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==7){
                $db_data_7 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==8){
                $db_data_8 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==9){
                $db_data_9 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==10){
                $db_data_10 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==11){
                $db_data_11 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==12){
                $db_data_12 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==13){
                $db_data13 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==14){
                $db_data_14 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==15){
                $db_data_15 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==16){
                $db_data_16 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }
        }
        elseif ($timeCondition == '4') {
            if(sizeof($req->all()[0]) ==1){
                $db_data_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if(sizeof($req->all()[0]) ==2){
                $db_data_2 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==3){
                $db_data_3 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==4){
                $db_data_4 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==5){
                $db_data_5 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==6){
                $db_data_6 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==7){
                $db_data_7 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==8){
                $db_data_8 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==9){
                $db_data_9 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==10){
                $db_data_10 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==11){
                $db_data_11 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==12){
                $db_data_12 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==13){
                $db_data13 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==14){
                $db_data_14 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==15){
                $db_data_15 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==16){
                $db_data_16 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }
        }
        elseif ($timeCondition == '5') {
            if(sizeof($req->all()[0]) ==1){
                $db_data_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if(sizeof($req->all()[0]) ==2){
                $db_data_2 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==3){
                $db_data_3 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==4){
                $db_data_4 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==5){
                $db_data_5 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==6){
                $db_data_6 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==7){
                $db_data_7 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==8){
                $db_data_8 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==9){
                $db_data_9 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==10){
                $db_data_10 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==11){
                $db_data_11 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==12){
                $db_data_12 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==13){
                $db_data13 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==14){
                $db_data_14 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==15){
                $db_data_15 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==16){
                $db_data_16 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }
        }
        // For Volume Queries
        if ($timeCondition == '1') {
            if(sizeof($req->all()[0]) ==1){
                $vol_data_1 = DB::select("SELECT timing, $volume_1 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if(sizeof($req->all()[0]) ==2){
                $vol_data_2 = DB::select("SELECT timing, $volume_1, $volume_2 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==3){
                $vol_data_3 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==4){
                $vol_data_4 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==5){
                $vol_data_5 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==6){
                $vol_data_6 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==7){
                $vol_data_7 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==8){
                $vol_data_8 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==9){
                $vol_data_9 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==10){
                $vol_data_10 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==11){
                $vol_data_11 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==12){
                $vol_data_12 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==13){
                $db_data13 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==14){
                $vol_data_14 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==15){
                $vol_data_15 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==16){
                $vol_data_16 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15,$volume_16 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }
        }
        elseif ($timeCondition == '2') {
            if(sizeof($req->all()[0]) ==1){
                $vol_data_1 = DB::select("SELECT timing, $volume_1 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if(sizeof($req->all()[0]) ==2){
                $vol_data_2 = DB::select("SELECT timing, $volume_1, $volume_2 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==3){
                $vol_data_3 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==4){
                $vol_data_4 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==5){
                $vol_data_5 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==6){
                $vol_data_6 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==7){
                $vol_data_7 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==8){
                $vol_data_8 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==9){
                $vol_data_9 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==10){
                $vol_data_10 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==11){
                $vol_data_11 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==12){
                $vol_data_12 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==13){
                $db_data13 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==14){
                $vol_data_14 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==15){
                $vol_data_15 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==16){
                $vol_data_16 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15,$volume_16 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
            }
        }
        elseif ($timeCondition == '3') {
            if(sizeof($req->all()[0]) ==1){
                $vol_data_1 = DB::select("SELECT timing, $volume_1 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
           
            }else if(sizeof($req->all()[0]) ==2){
                $vol_data_2 = DB::select("SELECT timing, $volume_1, $volume_2 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==3){
                $vol_data_3 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==4){
                $vol_data_4 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==5){
                $vol_data_5 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==6){
                $vol_data_6 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==7){
                $vol_data_7 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==8){
                $vol_data_8 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==9){
                $vol_data_9 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==10){
                $vol_data_10 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==11){
                $vol_data_11 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==12){
                $vol_data_12 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==13){
                $db_data13 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==14){
                $vol_data_14 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==15){
                $vol_data_15 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==16){
                $vol_data_16 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15,$volume_16 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
            }
        }
        elseif ($timeCondition == '4') {
            if(sizeof($req->all()[0]) ==1){
                $vol_data_1 = DB::select("SELECT timing, $volume_1 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if(sizeof($req->all()[0]) ==2){
                $vol_data_2 = DB::select("SELECT timing, $volume_1, $volume_2 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==3){
                $vol_data_3 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==4){
                $vol_data_4 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==5){
                $vol_data_5 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==6){
                $vol_data_6 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==7){
                $vol_data_7 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==8){
                $vol_data_8 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==9){
                $vol_data_9 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==10){
                $vol_data_10 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==11){
                $vol_data_11 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==12){
                $vol_data_12 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==13){
                $db_data13 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==14){
                $vol_data_14 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==15){
                $vol_data_15 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }else if (sizeof($req->all()[0]) ==16){
                $vol_data_16 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15,$volume_16 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
            }
        }
        elseif ($timeCondition == '5') {
            if(sizeof($req->all()[0]) ==1){
                $vol_data_1 = DB::select("SELECT timing, $volume_1 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if(sizeof($req->all()[0]) ==2){
                $vol_data_2 = DB::select("SELECT timing, $volume_1, $volume_2 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==3){
                $vol_data_3 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==4){
                $vol_data_4 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==5){
                $vol_data_5 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==6){
                $vol_data_6 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==7){
                $vol_data_7 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==8){
                $vol_data_8 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==9){
                $vol_data_9 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==10){
                $vol_data_10 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==11){
                $vol_data_11 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==12){
                $vol_data_12 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==13){
                $db_data13 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==14){
                $vol_data_14 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==15){
                $vol_data_15 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }else if (sizeof($req->all()[0]) ==16){
                $vol_data_16 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15,$volume_16 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }
        }
       
            if(sizeof($req->all()[0]) ==1){
                foreach ($db_data_1 as $item) {
                    array_push($timing, $item->timing);
                    array_push($value_1, $item->$val_1);
                }
            }
            if(sizeof($req->all()[0]) ==2){
                foreach ($db_data_2 as $item) {
                    array_push($timing, $item->timing);
                    array_push($value_1, $item->$val_1);
                    array_push($value_2, $item->$val_2);
                }
            }
            if(sizeof($req->all()[0]) ==3){
                foreach ($db_data_3 as $item) {
                    array_push($timing, $item->timing);
                    array_push($value_1, $item->$val_1);
                    array_push($value_2, $item->$val_2);
                    array_push($value_3, $item->$val_3);
                }
            }
            if(sizeof($req->all()[0]) ==4){
                foreach ($db_data_4 as $item) {
                    array_push($timing, $item->timing);
                    array_push($value_1, $item->$val_1);
                    array_push($value_2, $item->$val_2);
                    array_push($value_3, $item->$val_3);
                    array_push($value_4, $item->$val_4);
                }
            }
            if(sizeof($req->all()[0]) ==5){
                foreach ($db_data_5 as $item) {
                    array_push($timing, $item->timing);
                    array_push($value_1, $item->$val_1);
                    array_push($value_2, $item->$val_2);
                    array_push($value_3, $item->$val_3);
                    array_push($value_4, $item->$val_4);
                    array_push($value_5, $item->$val_5);
                }
            }
            if(sizeof($req->all()[0]) ==6){
                foreach ($db_data_6 as $item) {
                    array_push($timing, $item->timing);
                    array_push($value_1, $item->$val_1);
                    array_push($value_2, $item->$val_2);
                    array_push($value_3, $item->$val_3);
                    array_push($value_4, $item->$val_4);
                    array_push($value_5, $item->$val_5);
                    array_push($value_6, $item->$val_6);
                }
            }
            if(sizeof($req->all()[0]) ==7){
                foreach ($db_data_7 as $item) {
                    array_push($timing, $item->timing);
                    array_push($value_1, $item->$val_1);
                    array_push($value_2, $item->$val_2);
                    array_push($value_3, $item->$val_3);
                    array_push($value_4, $item->$val_4);
                    array_push($value_5, $item->$val_5);
                    array_push($value_6, $item->$val_6);
                    array_push($value_7, $item->$val_7);
                }
            }
            if(sizeof($req->all()[0]) ==8){
                foreach ($db_data_8 as $item) {
                    array_push($timing, $item->timing);
                    array_push($value_1, $item->$val_1);
                    array_push($value_2, $item->$val_2);
                    array_push($value_3, $item->$val_3);
                    array_push($value_4, $item->$val_4);
                    array_push($value_5, $item->$val_5);
                    array_push($value_6, $item->$val_6);
                    array_push($value_7, $item->$val_7);
                    array_push($value_8, $item->$val_8);
                }
            }
            if(sizeof($req->all()[0]) ==9){
                foreach ($db_data_9 as $item) {
                    array_push($timing, $item->timing);
                    array_push($value_1, $item->$val_1);
                    array_push($value_2, $item->$val_2);
                    array_push($value_3, $item->$val_3);
                    array_push($value_4, $item->$val_4);
                    array_push($value_5, $item->$val_5);
                    array_push($value_6, $item->$val_6);
                    array_push($value_7, $item->$val_7);
                    array_push($value_8, $item->$val_8);
                    array_push($value_9, $item->$val_9);
                }
            }
            if(sizeof($req->all()[0]) ==10){
                foreach ($db_data_10 as $item) {
                    array_push($timing, $item->timing);
                    array_push($value_1, $item->$val_1);
                    array_push($value_2, $item->$val_2);
                    array_push($value_3, $item->$val_3);
                    array_push($value_4, $item->$val_4);
                    array_push($value_5, $item->$val_5);
                    array_push($value_6, $item->$val_6);
                    array_push($value_7, $item->$val_7);
                    array_push($value_8, $item->$val_8);
                    array_push($value_9, $item->$val_9);
                    array_push($value_10, $item->$val_10);
                }
            }
            if(sizeof($req->all()[0]) ==11){
                foreach ($db_data_11 as $item) {
                    array_push($timing, $item->timing);
                    array_push($value_1, $item->$val_1);
                    array_push($value_2, $item->$val_2);
                    array_push($value_3, $item->$val_3);
                    array_push($value_4, $item->$val_4);
                    array_push($value_5, $item->$val_5);
                    array_push($value_6, $item->$val_6);
                    array_push($value_7, $item->$val_7);
                    array_push($value_8, $item->$val_8);
                    array_push($value_9, $item->$val_9);
                    array_push($value_10, $item->$val_10);
                    array_push($value_11, $item->$val_11);
                }
            }
            if(sizeof($req->all()[0]) ==12){
                foreach ($db_data_12 as $item) {
                    array_push($timing, $item->timing);
                    array_push($value_1, $item->$val_1);
                    array_push($value_2, $item->$val_2);
                    array_push($value_3, $item->$val_3);
                    array_push($value_4, $item->$val_4);
                    array_push($value_5, $item->$val_5);
                    array_push($value_6, $item->$val_6);
                    array_push($value_7, $item->$val_7);
                    array_push($value_8, $item->$val_8);
                    array_push($value_9, $item->$val_9);
                    array_push($value_10, $item->$val_10);
                    array_push($value_11, $item->$val_11);
                    array_push($value_12, $item->$val_12);
                }
            }
            if(sizeof($req->all()[0]) ==13){
                foreach ($db_data_13 as $item) {
                    array_push($timing, $item->timing);
                    array_push($value_1, $item->$val_1);
                    array_push($value_2, $item->$val_2);
                    array_push($value_3, $item->$val_3);
                    array_push($value_4, $item->$val_4);
                    array_push($value_5, $item->$val_5);
                    array_push($value_6, $item->$val_6);
                    array_push($value_7, $item->$val_7);
                    array_push($value_8, $item->$val_8);
                    array_push($value_9, $item->$val_9);
                    array_push($value_10, $item->$val_10);
                    array_push($value_11, $item->$val_11);
                    array_push($value_12, $item->$val_12);
                    array_push($value_13, $item->$val_13);
                }
            }
            if(sizeof($req->all()[0]) ==14){
                foreach ($db_data_14 as $item) {
                    array_push($timing, $item->timing);
                    array_push($value_1, $item->$val_1);
                    array_push($value_2, $item->$val_2);
                    array_push($value_3, $item->$val_3);
                    array_push($value_4, $item->$val_4);
                    array_push($value_5, $item->$val_5);
                    array_push($value_6, $item->$val_6);
                    array_push($value_7, $item->$val_7);
                    array_push($value_8, $item->$val_8);
                    array_push($value_9, $item->$val_9);
                    array_push($value_10, $item->$val_10);
                    array_push($value_11, $item->$val_11);
                    array_push($value_12, $item->$val_12);
                    array_push($value_13, $item->$val_13);
                    array_push($value_14, $item->$val_14);
                }
            }
            if(sizeof($req->all()[0]) ==15){
                foreach ($db_data_15 as $item) {
                    array_push($timing, $item->timing);
                    array_push($value_1, $item->$val_1);
                    array_push($value_2, $item->$val_2);
                    array_push($value_3, $item->$val_3);
                    array_push($value_4, $item->$val_4);
                    array_push($value_5, $item->$val_5);
                    array_push($value_6, $item->$val_6);
                    array_push($value_7, $item->$val_7);
                    array_push($value_8, $item->$val_8);
                    array_push($value_9, $item->$val_9);
                    array_push($value_10, $item->$val_10);
                    array_push($value_11, $item->$val_11);
                    array_push($value_12, $item->$val_12);
                    array_push($value_13, $item->$val_13);
                    array_push($value_14, $item->$val_14);
                    array_push($value_15, $item->$val_15);
                }
            }
            if(sizeof($req->all()[0]) ==16){
                foreach ($db_data_16 as $item) {
                    array_push($timing, $item->timing);
                    array_push($value_1, $item->$val_1);
                    array_push($value_2, $item->$val_2);
                    array_push($value_3, $item->$val_3);
                    array_push($value_4, $item->$val_4);
                    array_push($value_5, $item->$val_5);
                    array_push($value_6, $item->$val_6);
                    array_push($value_7, $item->$val_7);
                    array_push($value_8, $item->$val_8);
                    array_push($value_9, $item->$val_9);
                    array_push($value_10, $item->$val_10);
                    array_push($value_11, $item->$val_11);
                    array_push($value_12, $item->$val_12);
                    array_push($value_13, $item->$val_13);
                    array_push($value_14, $item->$val_14);
                    array_push($value_15, $item->$val_15);
                    array_push($value_16, $item->$val_16);
                }
            }
            if(sizeof($for_volumes) ==1){
                foreach ($vol_data_1 as $item) {
                    array_push($Volume_timing, $item->timing);
                    array_push($vol_value_1, $item->$volume_1);
                }
            }
            if(sizeof($for_volumes) ==2){
                foreach ($vol_data_2 as $item) {
                    array_push($Volume_timing, $item->timing);
                    array_push($vol_value_1, $item->$volume_1);
                    array_push($vol_value_2, $item->$volume_2);
                }
            }
            if(sizeof($for_volumes) ==3){
                foreach ($vol_data_3 as $item) {
                    array_push($Volume_timing, $item->timing);
                    array_push($vol_value_1, $item->$volume_1);
                    array_push($vol_value_2, $item->$volume_2);
                    array_push($vol_value_3, $item->$volume_3);
                }
            }
            if(sizeof($for_volumes) ==4){
                foreach ($vol_data_4 as $item) {
                    array_push($Volume_timing, $item->timing);
                    array_push($vol_value_1, $item->$volume_1);
                    array_push($vol_value_2, $item->$volume_2);
                    array_push($vol_value_3, $item->$volume_3);
                    array_push($vol_value_4, $item->$volume_4);
                }
            }
            if(sizeof($for_volumes) ==5){
                foreach ($vol_data_5 as $item) {
                    array_push($Volume_timing, $item->timing);
                    array_push($vol_value_1, $item->$volume_1);
                    array_push($vol_value_2, $item->$volume_2);
                    array_push($vol_value_3, $item->$volume_3);
                    array_push($vol_value_4, $item->$volume_4);
                    array_push($vol_value_5, $item->$volume_5);
                }
            }
            if(sizeof($for_volumes) ==6){
                foreach ($vol_data_6 as $item) {
                    array_push($Volume_timing, $item->timing);
                    array_push($vol_value_1, $item->$volume_1);
                    array_push($vol_value_2, $item->$volume_2);
                    array_push($vol_value_3, $item->$volume_3);
                    array_push($vol_value_4, $item->$volume_4);
                    array_push($vol_value_5, $item->$volume_5);
                    array_push($vol_value_6, $item->$volume_6);
                }
            }
            if(sizeof($for_volumes) ==7){
                foreach ($vol_data_7 as $item) {
                    array_push($Volume_timing, $item->timing);
                    array_push($vol_value_1, $item->$volume_1);
                    array_push($vol_value_2, $item->$volume_2);
                    array_push($vol_value_3, $item->$volume_3);
                    array_push($vol_value_4, $item->$volume_4);
                    array_push($vol_value_5, $item->$volume_5);
                    array_push($vol_value_6, $item->$volume_6);
                    array_push($vol_value_7, $item->$volume_7);
                }
            }
            if(sizeof($for_volumes) ==8){
                foreach ($vol_data_8 as $item) {
                    array_push($Volume_timing, $item->timing);
                    array_push($vol_value_1, $item->$volume_1);
                    array_push($vol_value_2, $item->$volume_2);
                    array_push($vol_value_3, $item->$volume_3);
                    array_push($vol_value_4, $item->$volume_4);
                    array_push($vol_value_5, $item->$volume_5);
                    array_push($vol_value_6, $item->$volume_6);
                    array_push($vol_value_7, $item->$volume_7);
                    array_push($vol_value_8, $item->$volume_8);
                }
            }
            if(sizeof($for_volumes) ==9){
                foreach ($vol_data_9 as $item) {
                    array_push($Volume_timing, $item->timing);
                    array_push($vol_value_1, $item->$volume_1);
                    array_push($vol_value_2, $item->$volume_2);
                    array_push($vol_value_3, $item->$volume_3);
                    array_push($vol_value_4, $item->$volume_4);
                    array_push($vol_value_5, $item->$volume_5);
                    array_push($vol_value_6, $item->$volume_6);
                    array_push($vol_value_7, $item->$volume_7);
                    array_push($vol_value_8, $item->$volume_8);
                    array_push($vol_value_9, $item->$volume_9);
                }
            }
            if(sizeof($for_volumes) ==10){
                foreach ($vol_data_10 as $item) {
                    array_push($Volume_timing, $item->timing);
                    array_push($vol_value_1, $item->$volume_1);
                    array_push($vol_value_2, $item->$volume_2);
                    array_push($vol_value_3, $item->$volume_3);
                    array_push($vol_value_4, $item->$volume_4);
                    array_push($vol_value_5, $item->$volume_5);
                    array_push($vol_value_6, $item->$volume_6);
                    array_push($vol_value_7, $item->$volume_7);
                    array_push($vol_value_8, $item->$volume_8);
                    array_push($vol_value_9, $item->$volume_9);
                    array_push($vol_value_10, $item->$volume_10);
                }
            }
            if(sizeof($for_volumes) ==11){
                foreach ($vol_data_11 as $item) {
                    array_push($Volume_timing, $item->timing);
                    array_push($vol_value_1, $item->$volume_1);
                    array_push($vol_value_2, $item->$volume_2);
                    array_push($vol_value_3, $item->$volume_3);
                    array_push($vol_value_4, $item->$volume_4);
                    array_push($vol_value_5, $item->$volume_5);
                    array_push($vol_value_6, $item->$volume_6);
                    array_push($vol_value_7, $item->$volume_7);
                    array_push($vol_value_8, $item->$volume_8);
                    array_push($vol_value_9, $item->$volume_9);
                    array_push($vol_value_10, $item->$volume_10);
                    array_push($vol_value_11, $item->$volume_11);
                }
            }
            if(sizeof($for_volumes) ==12){
                foreach ($vol_data_12 as $item) {
                    array_push($Volume_timing, $item->timing);
                    array_push($vol_value_1, $item->$volume_1);
                    array_push($vol_value_2, $item->$volume_2);
                    array_push($vol_value_3, $item->$volume_3);
                    array_push($vol_value_4, $item->$volume_4);
                    array_push($vol_value_5, $item->$volume_5);
                    array_push($vol_value_6, $item->$volume_6);
                    array_push($vol_value_7, $item->$volume_7);
                    array_push($vol_value_8, $item->$volume_8);
                    array_push($vol_value_9, $item->$volume_9);
                    array_push($vol_value_10, $item->$volume_10);
                    array_push($vol_value_11, $item->$volume_11);
                    array_push($vol_value_12, $item->$volume_12);
                }
            }
            if(sizeof($for_volumes) ==13){
                foreach ($vol_data_13 as $item) {
                    array_push($Volume_timing, $item->timing);
                    array_push($vol_value_1, $item->$volume_1);
                    array_push($vol_value_2, $item->$volume_2);
                    array_push($vol_value_3, $item->$volume_3);
                    array_push($vol_value_4, $item->$volume_4);
                    array_push($vol_value_5, $item->$volume_5);
                    array_push($vol_value_6, $item->$volume_6);
                    array_push($vol_value_7, $item->$volume_7);
                    array_push($vol_value_8, $item->$volume_8);
                    array_push($vol_value_9, $item->$volume_9);
                    array_push($vol_value_10, $item->$volume_10);
                    array_push($vol_value_11, $item->$volume_11);
                    array_push($vol_value_12, $item->$volume_12);
                    array_push($vol_value_13, $item->$volume_13);
                }
            }
            if(sizeof($for_volumes) ==14){
                foreach ($vol_data_14 as $item) {
                    array_push($Volume_timing, $item->timing);
                    array_push($vol_value_1, $item->$volume_1);
                    array_push($vol_value_2, $item->$volume_2);
                    array_push($vol_value_3, $item->$volume_3);
                    array_push($vol_value_4, $item->$volume_4);
                    array_push($vol_value_5, $item->$volume_5);
                    array_push($vol_value_6, $item->$volume_6);
                    array_push($vol_value_7, $item->$volume_7);
                    array_push($vol_value_8, $item->$volume_8);
                    array_push($vol_value_9, $item->$volume_9);
                    array_push($vol_value_10, $item->$volume_10);
                    array_push($vol_value_11, $item->$volume_11);
                    array_push($vol_value_12, $item->$volume_12);
                    array_push($vol_value_13, $item->$volume_13);
                    array_push($vol_value_14, $item->$volume_14);
                }
            }
            if(sizeof($for_volumes) ==15){
                foreach ($vol_data_15 as $item) {
                    array_push($Volume_timing, $item->timing);
                    array_push($vol_value_1, $item->$volume_1);
                    array_push($vol_value_2, $item->$volume_2);
                    array_push($vol_value_3, $item->$volume_3);
                    array_push($vol_value_4, $item->$volume_4);
                    array_push($vol_value_5, $item->$volume_5);
                    array_push($vol_value_6, $item->$volume_6);
                    array_push($vol_value_7, $item->$volume_7);
                    array_push($vol_value_8, $item->$volume_8);
                    array_push($vol_value_9, $item->$volume_9);
                    array_push($vol_value_10, $item->$volume_10);
                    array_push($vol_value_11, $item->$volume_11);
                    array_push($vol_value_12, $item->$volume_12);
                    array_push($vol_value_13, $item->$volume_13);
                    array_push($vol_value_14, $item->$volume_14);
                    array_push($vol_value_15, $item->$volume_15);
                }
            }
            if(sizeof($for_volumes) ==16){
                foreach ($vol_data_16 as $item) {
                    array_push($Volume_timing, $item->timing);
                    array_push($vol_value_1, $item->$volume_1);
                    array_push($vol_value_2, $item->$volume_2);
                    array_push($vol_value_3, $item->$volume_3);
                    array_push($vol_value_4, $item->$volume_4);
                    array_push($vol_value_5, $item->$volume_5);
                    array_push($vol_value_6, $item->$volume_6);
                    array_push($vol_value_7, $item->$volume_7);
                    array_push($vol_value_8, $item->$volume_8);
                    array_push($vol_value_9, $item->$volume_9);
                    array_push($vol_value_10, $item->$volume_10);
                    array_push($vol_value_11, $item->$volume_11);
                    array_push($vol_value_12, $item->$volume_12);
                    array_push($vol_value_13, $item->$volume_13);
                    array_push($vol_value_14, $item->$volume_14);
                    array_push($vol_value_15, $item->$volume_15);
                    array_push($vol_value_16, $item->$volume_16);
                }
            }
             
            
    
        $response = [
            'value_1'=>$value_1,
            'value_2'=>$value_2,
            'value_3'=>$value_3,
            'value_4'=>$value_4,
            'value_5'=>$value_5,
            'value_6'=>$value_6,
            'value_7'=>$value_7,
            'value_8'=>$value_8,
            'value_9'=>$value_9,
            'value_10'=>$value_10,
            'value_11'=>$value_11,
            'value_12'=>$value_12,
            'value_13'=>$value_13,
            'value_14'=>$value_14,
            'value_15'=>$value_15,
            'value_16'=>$value_16,
            'vol_value_1'=>$vol_value_1,
            'vol_value_2'=>$vol_value_2,
            'vol_value_3'=>$vol_value_3,
            'vol_value_4'=>$vol_value_4,
            'vol_value_5'=>$vol_value_5,
            'vol_value_6'=>$vol_value_6,
            'vol_value_7'=>$vol_value_7,
            'vol_value_8'=>$vol_value_8,
            'vol_value_9'=>$vol_value_9,
            'vol_value_10'=>$vol_value_10,
            'vol_value_11'=>$vol_value_11,
            'vol_value_12'=>$vol_value_12,
            'vol_value_13'=>$vol_value_13,
            'vol_value_14'=>$vol_value_14,
            'vol_value_15'=>$vol_value_15,
            'vol_value_16'=>$vol_value_16,
            'rdl25_volume'=>$rdl25_volume,
            'rdl25_mass'=>$rdl25_mass,
            'timing'=>$timing,
            'Volume_timing'=> $Volume_timing,
            'status_code' => 200
        ];
        return response()->json($response);

    }
    ////////save selection/////////
    public function SaveSelectionReport(Request $req){

        $val_1='';$val_2='';$val_3='';$val_4='';$val_5='';$val_6='';$val_7  = '';$val_8  = '';
        $val_9  = '';$val_10 = '';$val_11='';$val_12='';$val_13='';$val_14='';$val_15='';$val_16='';
        $interval = $req->all()[1];
        $timing = $req->all()[2];
        $name = $req->all()[3];
        $user_role = $req->all()[4];

        if(sizeof($req->all()[0]) ==2){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
        }if(sizeof($req->all()[0]) ==3){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
        }if(sizeof($req->all()[0]) ==4){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
        }if(sizeof($req->all()[0]) ==5){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
        }if(sizeof($req->all()[0]) ==6){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
        }if(sizeof($req->all()[0]) ==7){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
        }if(sizeof($req->all()[0]) ==8){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
        }if(sizeof($req->all()[0]) ==9){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
        }if(sizeof($req->all()[0]) ==10){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
        }if(sizeof($req->all()[0]) ==11){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
        }if(sizeof($req->all()[0]) ==12){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
        }if(sizeof($req->all()[0]) ==13){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
        }if(sizeof($req->all()[0]) ==14){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
        }if(sizeof($req->all()[0]) ==15){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
        }if(sizeof($req->all()[0]) ==16){
            $val_1 =$req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
            $val_16 = $req->all()[0][15];
        }
        $select =new selection_record();
        $select->name = $name;
        $select->timing = $timing;
        $select->selection_interval = $interval;
        $select->user_role = $user_role;
        $select->val_1 = $val_1;
        $select->val_2 = $val_2;
        $select->val_3 = $val_3;
        $select->val_4 = $val_4;
        $select->val_5 = $val_5;
        $select->val_6 = $val_6;
        $select->val_7 = $val_7;
        $select->val_8 = $val_8;
        $select->val_9 = $val_9;
        $select->val_10 = $val_10;
        $select->val_11 = $val_11;
        $select->val_12 = $val_12;
        $select->val_13 = $val_13;
        $select->val_14 = $val_14;
        $select->val_15 = $val_15;
        $select->val_16 = $val_16;
        $select->save();
        return response()->json([
            'status_code'=>200,
            'message'=> 'Selection Saved Successfully'
        ]);
    }

    public function ShowSelection($id){
    $select_record = selection_record::where('user_role',$id)->get();
        $response = [
            'select_record' => $select_record,
            'status_code' => 200
        ];
        return response()->json($response);
    }
    public function ShowSelectionA($id){
        $select_record = selection_record::where('sr_id',$id)->first();
        $response = [
            'select_record' => $select_record,
            'status_code' => 200
        ];
        return response()->json($response);
    }

    public function FormSubmit(Request $req){
        $fileName = $req->file->getClientOriginalName();

//        $fileName = date('d-m-Y').'.'.$req->file->getClientOriginalExtension();

        $req->file->move(public_path('upload'), $fileName);
        $upload_report = new Upload_report();
        $upload_report->name = $req->name;
        $upload_report->address = $fileName;

        $upload_report->category = $req->select_category;
        $upload_report->save();

        return response()->json(['success'=>'You have successfully upload file.']);
    }
    public function GetUploadedReports(){
        $getreports = Upload_report::get();
        $response = [
            'getreports' => $getreports,
            'status_code' => 200
        ];
        return response()->json($response);
    }
    public function DeleteUpload($id){
//        $user = DB::table('users')->delete($id);
//        return response()->json(['success'=>'User deleted']);
        $upload = Upload_report::where('id',$id)->first();
        $upload->delete();
        return response()->json('File deleted Successfully!');
    }

}
