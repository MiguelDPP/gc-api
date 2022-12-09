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
        Schema::create('score_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('score_id');
            $table->foreignId('question_id');
            $table->boolean('answer')->nullable();
            $table->timestamps();

            $table->foreign('score_id')->references('id')->on('scores');
            $table->foreign('question_id')->references('id')->on('questions');
            // $table->foreign('answer_id')->references('id')->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('score_questions');
    }
};
