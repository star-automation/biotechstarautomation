<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RDL extends Model
{
    //
    protected $table = "rdl";

    protected $fillable = [
        'timing', 'rdl_1', 'rdl1_status', 'rdl_2', 'rdl2_status', 'rdl_3', 'rdl3_status', 'rdl_4', 'rdl4_status',
        'rdl_5', 'rdl5_status', 'rdl_6', 'rdl6_status', 'rdl_7', 'rdl7_status', 'rdl_8', 'rdl8_status', 'rdl_9', 'rdl9_status',
        'rdl_10', 'rdl10_status', 'rdl_11', 'rdl11_status', 'rdl_12', 'rdl12_status', 'rdl_13', 'rdl13_status', 'rdl_14', 'rdl14_status',
        'rdl_15', 'rdl15_status', 'rdl_16', 'rdl16_status', 'rdl_17', 'rdl17_status', 'rdl_18', 'rdl18_status', 'rdl_19', 'rdl19_status',
        'rdl_20', 'rdl20_status', 'rdl_21', 'rdl21_status', 'rdl_22', 'rdl22_status', 'rdl_23', 'rdl23_status', 'rdl_24', 'rdl24_status',
        'rdl_25', 'rdl25_status', 'dpl_1', 'dpl1_status', 'dpl_2', 'dpl2_status', 'dpl_3', 'dpl3_status', 'dpl_4', 'dpl4_status',
        'dpl_5', 'dpl5_status', 'dpl_6', 'dpl6_status', 'dpl_7', 'dpl7_status'
    ];
}
