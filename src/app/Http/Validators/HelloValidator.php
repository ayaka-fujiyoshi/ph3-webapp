<?php

namespace App\Http\Validators;

use Illuminate\Validation\Validator;


//第四章
class HelloValidator extends Validator
{
    public function validateHello($attribute, $value, $parameters) 
    {
        return $value % 2 == 0;
    }
}