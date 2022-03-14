<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string("name") ;
        $table->longText("description")->nullable();
        $table->foreignId("ward_id")->constrained("wards")->cascadeOnDelete();
        $table->foreignId("project_category_id")->constrained("project_categories")->cascadeOnDelete();
        $table->string('longitude')->nullable() ;
        $table->string('latitude')->nullable() ;
        $table->string('location')->nullable() ;
        $table->dateTime("Start_time")->nullable();
        $table->dateTime("end_time")->nullable();
        $table->decimal("progress")->nullable()->default(0) ;
        $table->enum('status',['pending','started','progress','completed','stopped']) ;
        $table->longText("remarks")->nullable();
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
        Schema::dropIfExists('projects');
    }
}
