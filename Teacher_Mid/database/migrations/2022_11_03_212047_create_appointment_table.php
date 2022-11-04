<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('ap_id')->nullable();
            $table->string('s_id')->nullable();
            $table->string('subject')->nullable();
            $table->string('duration')->nullable();
            $table->unsignedBigInteger('t_id')->nullable();
            //defining foreign key from teacher_info table->t_id to Appointment table t_id
            $table->foreign('t_id')->references('t_id')->on('teacher_infos');
            $table->date('date')->nullable();
            $table->enum('status',["Available","Unavailable"])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment');
    }
};
