<?php

// 第三章
// namespace App\Http\Providers;
// use Illuminate\View\View;
// class HelloServiceProvider

// 第四章、始め↑になっててエラー出てた…
   //Target class [App\Http\Composers\HelloComposer] does not exist.
// namespace App\Http\Composers;
// use Illuminate\View\View;
// class HelloComposer
// になおす

// 第四章、始め↑になっててエラー出てた…
namespace App\Http\Composers;

use Illuminate\View\View;

class HelloComposer
{
    public function compose(View $view)
    {
       $view->with('view_message', 'this view is "' . $view->getName() . '"!!');
    }
}
