<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebappTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 学習時間・内容テーブル
        Schema::create('study_times', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('study_date');
            $table->integer('study_hour');
            $table->integer('languages_id');
            $table->integer('contents_id');
            $table->timestamps();
        });
        // 学習言語テーブル
        Schema::create('study_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('language_name');
            $table->string('language_color');
            $table->timestamps();
        });
        // 学習コンテンツテーブル
        Schema::create('study_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contents_name');
            $table->string('contents_color');
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
        Schema::dropIfExists('study_times');
        Schema::dropIfExists('study_languages');
        Schema::dropIfExists('study_contents');
    }
}
