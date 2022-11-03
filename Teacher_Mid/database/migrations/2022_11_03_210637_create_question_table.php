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
        Schema::create('Question', function (Blueprint $table) {
            $table->id('q_id')->nullable();
            $table->string('s_id')->nullable();
            $table->string('qus')->nullable();
            $table->unsignedBigInteger('t_id')->nullable();
            //defining foreign key from teacher_info table->t_id to Appointment table t_id
            $table->foreign('t_id')->references('t_id')->on('teacher info');
            $table->string('ans')->nullable();
            $table->string('qus_photo')->nullable();
            $table->string('ans_photo')->nullable();
            $table->enum('status',["Answered","Not yet answered"])->nullable();
            $table->string('s_feedback')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question');
    }
};
