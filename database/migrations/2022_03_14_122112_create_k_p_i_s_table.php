<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKPISTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('k_p_i_s', function (Blueprint $table) {
        $table->id();
        $table->string("indicators")->nullable() ;
        $table->foreignId("department_id")->constrained("departments")->cascadeOnDelete();
        $table->string("unit")->nullable() ;
        $table->string("baseline_year")->nullable() ;
        $table->string("baseline_value")->nullable() ;
        $table->string("target_years")->nullable() ; // 2018/2021
        $table->string("actual_achievement")->nullable() ;
        $table->longText("comment")->nullable() ;
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
        Schema::dropIfExists('k_p_i_s');
    }
}
