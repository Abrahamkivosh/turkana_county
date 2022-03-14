<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('project_resources', function (Blueprint $table) {
        $table->id();
        $table->string("name")->nullable();
        $table->longText("description")->nullable();
        $table->decimal("quantity")->default(0) ;
        $table->decimal("amount")->default(0) ;
        $table->foreignId("project_id")->constrained("projects")->cascadeOnDelete();
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
        Schema::dropIfExists('project_resources');
    }
}
