<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BigQuestion extends Model
{
    //fillableはホワイトリストで、guardedはブラックリスト
    //fillable...モデルがその属性以外を持たない
    protected $fillable = [
        'name'
    ];

    public function questions()
    {
        return $this->hasMany('App\Question');
        //Questionと関連づける
    }
}
