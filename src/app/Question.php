<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function choices()
    {
        return $this->hasMany('App\Choice');
        //Choiceと関連づける
    }

    public function big_question()
    {
        return $this->belongsTo('App\BigQuestion');
        //主テーブルのBigQuestionのデータを取れるようにする
    }
}
