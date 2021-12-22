<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRtdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rtd', function (Blueprint $table) {
            $table->id("rtd_id");
            $table->dateTime("timing")->default(date());
            $table->decimal("rtd_1", 9,2);
            $table->string("rtd1_status");
            $table->decimal("rtd_2", 9,2);
            $table->string("rtd2_status");
            $table->decimal("rtd_3", 9,2);
            $table->string("rtd3_status");
            $table->decimal("rtd_4", 9,2);
            $table->string("rtd4_status");
            $table->decimal("rtd_5", 9,2);
            $table->string("rtd5_status");
            $table->decimal("rtd_6", 9,2);
            $table->string("rtd6_status");
            $table->decimal("rtd_7", 9,2);
            $table->string("rtd7_status");
            $table->decimal("rtd_8", 9,2);
            $table->string("rtd8_status");
            $table->decimal("rtd_9", 9,2);
            $table->string("rtd9_status");
            $table->decimal("rtd_10", 9,2);
            $table->string("rtd10_status");
            $table->decimal("rtd_11", 9,2);
            $table->string("rtd11_status");
            $table->decimal("rtd_12", 9,2);
            $table->string("rtd12_status");
            $table->decimal("rtd_13", 9,2);
            $table->string("rtd13_status");
            $table->decimal("rtd_14", 9,2);
            $table->string("rtd14_status");
            $table->decimal("rtd_15", 9,2);
            $table->string("rtd15_status");
            $table->decimal("rtd_16", 9,2);
            $table->string("rtd16_status");
            $table->decimal("rtd_17", 9,2);
            $table->string("rtd17_status");
            $table->decimal("rtd_18", 9,2);
            $table->string("rtd18_status");
            $table->decimal("rtd_19", 9,2);
            $table->string("rtd19_status");
            $table->decimal("rtd_20", 9,2);
            $table->string("rtd20_status");
            $table->decimal("rtd_21", 9,2);
            $table->string("rtd21_status");
            $table->decimal("rtd_22", 9,2);
            $table->string("rtd22_status");
            $table->decimal("rtd_23", 9,2);
            $table->string("rtd23_status");
            $table->decimal("rtd_24", 9,2);
            $table->string("rtd24_status");
            $table->decimal("rtd_25", 9,2);
            $table->string("rtd25_status");
            $table->decimal("rtd_26", 9,2);
            $table->string("rtd26_status");
            $table->decimal("rtd_27", 9,2);
            $table->string("rtd27_status");
            $table->decimal("rtd_28", 9,2);
            $table->string("rtd28_status");
            $table->decimal("rtd_29", 9,2);
            $table->string("rtd29_status");
            $table->decimal("rtd_30", 9,2);
            $table->string("rtd30_status");
            $table->decimal("rtd_31", 9,2);
            $table->string("rtd31_status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rtd');
    }
}
