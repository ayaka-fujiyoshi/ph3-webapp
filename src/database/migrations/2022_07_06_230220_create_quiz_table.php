<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('quiz', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->timestamps();
        // });

        // 大問テーブル
        Schema::create('big_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('order');
            $table->timestamps();
        });
        // 設問テーブル （写真）
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('big_question_id');
            $table->string('image');
            $table->string('image_name');
            $table->integer('order');
            $table->timestamps();
        });
        // 選択肢テーブル
        Schema::create('choices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('question_id');
            $table->integer('selection_id');
            $table->string('name');
            $table->integer('valid');
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
        // Schema::dropIfExists('quiz');
        Schema::dropIfExists('big_questions');
        Schema::dropIfExists('questions');
        Schema::dropIfExists('choices');
    }
}
