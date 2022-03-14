<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('project_budgets', function (Blueprint $table) {
        $table->id();
        $table->foreignId("project_id")->constrained("projects")->cascadeOnDelete() ;
        $table->decimal("estimated_budget")->nullable();
        $table->decimal("actual_budget")->nullable();
        $table->decimal("amount_paid")->nullable();
        $table->decimal("amount_outstanding")->nullable();
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
        Schema::dropIfExists('project_budgets');
    }
}
