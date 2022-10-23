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
        // return view('webapp.index');
        $study_times_years = Study_time::where('study_date', '>=',  date('2022-01-01')) 
                                       ->selectRaw('COUNT(study_hour) as count_hour')
                                       ->get();
        $study_times_months = Study_time::where('study_date', '>=',  date('2022-10-01')) 
                                       ->selectRaw('COUNT(study_hour) as count_hour')
                                       ->get();
        $study_times_days = Study_time::where('study_date', '>=',  date('2022-10-24')) 
                                       ->selectRaw('COUNT(study_hour) as count_hour')
                                       ->get();
        $study_languages = Study_language::get();
        $study_contents = Study_content::get();
        return view('webapp.index', compact('study_times_years', 'study_times_months', 'study_times_days', 'study_languages', 'study_contents'));
    }
}

// 'SELECT SUM(study_hour) 
//  FROM study_times 
//  WHERE DATE_FORMAT(study_date, "%Y") 
//       = DATE_FORMAT(now(), "%Y")';