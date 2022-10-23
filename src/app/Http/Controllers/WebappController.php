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
        // return view('webapp.test');
        return view('webapp.index');
        // $study_times = Study_time::get();
        // $study_languages = Study_language::get();
        // $study_contents = Study_content::get();
        // return view('webapp.index', compact('study_times', 'study_languages', 'study_contents'));
    }
}
