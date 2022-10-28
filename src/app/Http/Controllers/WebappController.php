<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Study_time;
use App\Study_language;
use App\Study_content;
use Carbon\Carbon;

class WebappController extends Controller
{
  public function index()
  {
    // return view('webapp.test');
    // return view('webapp.index');
    $study_times_years = Study_time::where('study_date', '>=',  Carbon::now()->startOfYear()->toDateString())
      ->selectRaw('COUNT(study_hour) as count_hour')
      ->get();
    $study_times_months = Study_time::where('study_date', '>=', Carbon::now()->startOfMonth()->toDateString())
      ->selectRaw('COUNT(study_hour) as count_hour')
      ->get();
    $study_times_days = Study_time::where('study_date', '>=', Carbon::today())
      ->selectRaw('COUNT(study_hour) as count_hour')
      ->get();

    $piece_month = Carbon::now()->startOfMonth()->toDateString(); //今月の始まり
    $piece_end_month = Carbon::now()->endOfMonth()->toDateString(); //今月の始まり
    $pieces = explode("-", $piece_month);
    $piece_end_month = explode("-", $piece_end_month);
     
    // $study_times_bars = Study_time::where('study_date', '>=', Carbon::now()->startOfMonth()->toDateString())
    // ->whereDay('study_date', $i)
    // ->get();
    $month = Carbon::now()->format('Y-m');
    $start = $month.'-01';
    $end = $month.'-31';
    $study_times_bars = Study_time::where('study_date','>=',$start)
              ->where('study_date','<=',$end)
              ->selectRaw('DATE_FORMAT(study_date, "%d") AS date')
              ->selectRaw('SUM(study_hour) AS total_hour')
              ->groupBy('date')
              ->get();
    
    // dd($study_times_bars);

    $study_languages = Study_language::get();
    $study_contents = Study_content::get();
    return view('webapp.index', compact('study_times_years', 'study_times_months', 'study_times_days', 'pieces', 'piece_end_month', 'study_times_bars', 'study_languages', 'study_contents'));
  }
}
