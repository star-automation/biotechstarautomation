<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RTD extends Model
{
    //

    protected $table = "rtd";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'timing', 'rtd_1', 'rtd1_status', 'rtd_2', 'rtd2_status', 'rtd_3', 'rtd3_status', 'rtd_4', 'rtd4_status',
        'rtd_5', 'rtd5_status', 'rtd_6', 'rtd6_status', 'rtd_7', 'rtd7_status', 'rtd_8', 'rtd8_status', 'rtd_9', 'rtd9_status',
        'rtd_10', 'rtd10_status', 'rtd_11', 'rtd11_status', 'rtd_12', 'rtd12_status', 'rtd_13', 'rtd13_status', 'rtd_14', 'rtd14_status',
        'rtd_15', 'rtd15_status', 'rtd_16', 'rtd16_status', 'rtd_17', 'rtd17_status', 'rtd_18', 'rtd18_status', 'rtd_19', 'rtd19_status',
        'rtd_20', 'rtd20_status', 'rtd_21', 'rtd21_status', 'rtd_22', 'rtd22_status', 'rtd_23', 'rtd23_status', 'rtd_24', 'rtd24_status',
        'rtd_25', 'rtd25_status', 'rtd_26', 'rtd26_status', 'rtd_27', 'rtd27_status', 'rtd_28', 'rtd28_status', 'rtd_29', 'rtd29_status',
        'rtd_30', 'rtd30_status', 'rtd_31', 'rtd31_status',
    ];
}
