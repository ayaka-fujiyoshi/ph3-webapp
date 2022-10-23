<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Study_time;
use App\Study_language;
use App\Study_content;

class WebappController extends Controller
{
    public function index() 
    {
        return view('webapp.test');
    }
}
