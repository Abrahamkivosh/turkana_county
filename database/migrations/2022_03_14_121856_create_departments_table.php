<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('departments', function (Blueprint $table) {
        $table->id();
        $table->string("name");
        $table->longText("description");
        $table->foreignId("user_id")->nullable()->constrained("users")->cascadeOnUpdate()->nullOnDelete() ; //department manager
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
        Schema::dropIfExists('departments');
    }
}
