<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('petitions', function (Blueprint $table) {
        $table->id();
        // $table->foreignId("user_id")->constrained("users")->nullOnDelete();
        $table->string("doc_category")->nullable();
        $table->string("sub_category")->nullable();
        $table->string("name")->nullable();
        $table->longText("message_to_approver")->nullable();
        $table->string("file")->nullable();
        $table->string("approver_type")->nullable();
        $table->foreignId("user_id")->nullable()->constrained("users") ->cascadeOnUpdate()->nullOnDelete() ;
        $table->foreignId("line_manager")->nullable()->constrained("users") ->cascadeOnUpdate()->nullOnDelete() ;
        $table->foreignId("hod")->nullable()->constrained("users") ->cascadeOnUpdate()->nullOnDelete() ;
        $table->foreignId("approver_one")->nullable()->constrained("users") ->cascadeOnUpdate()->nullOnDelete() ;
        $table->foreignId("approver_two")->nullable()->constrained("users") ->cascadeOnUpdate()->nullOnDelete() ;
        $table->enum('status',['pending','approved'])->default('pending');
        $table->foreignId("approver_id")->nullable()->constrained("users") ->cascadeOnUpdate()->nullOnDelete() ;
        $table->dateTime("approved_date")->nullable();
        $table->longText("approver_message")->nullable();
        $table->boolean("delegate_petition_status")->default(false) ;
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
        Schema::dropIfExists('petitions');
    }
}
