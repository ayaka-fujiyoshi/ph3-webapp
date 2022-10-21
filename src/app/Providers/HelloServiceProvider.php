<?php

// 第三章
namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

//第四章
use Validator;
use App\Http\Validators\HelloValidator;

class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $validator = $this->app['validator'];
        $validator->resolver(function($translator, $data, $rules, $messages) {
            return new HelloValidator($translator, $data, $rules, $messages);
        });
    }
}
