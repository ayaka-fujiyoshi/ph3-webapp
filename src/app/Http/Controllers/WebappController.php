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
        
        // $piece_year = Carbon::now()->startOfYear()->toDateString();   //今年の始まり
        $piece_month = Carbon::now()->startOfMonth()->toDateString(); //今月の始まり
        // $pieces = [];
        // $piece_month= explode("-", $piece_month); 
        // dd($piece_month);
        $pieces= explode("-", $piece_month); 
        // array:3 [▼
        //   0 => "2022"
        //   1 => "10"
        //   2 => "01"
        // ]
        // array_push($pieces, $piece_month);
        // array_push($pieces, $piece_year);
        // //下記は後に使う空配列、ここで定義しておく
        // $study_times_array = array();
        // $study_date_hour_array = array();
        // for ($i = 1; $i <= date('t', strtotime(`$piece_year-$piece_month`)); $i++) {     // date('t', strtotime(`$piece_year-$piece_month`)); で月の日数分がとれる
        //   if(preg_match('/^([0-9]{1})$/', $i)){  //もし$iが１桁だったら
        //     $i = '0'.$i;                         //ゼロ埋めするように'0'を.で
        //   }                                      //それ以外はそのまま
        //   $date = "$piece_year-$piece_month-$i";  //上で抽出した年月とiで表した日で日付を表す
        //   $colum_graph_date = Study_time::where('study_date', '>=', $date)
        //                                ->selectRaw('COUNT(study_hour) as count_hour')
        //                                ->get();
        //   if (empty($colum_graph_date[0][0])) {   //NULLなら０を
        //     array_push($study_times_array, 0);    //empty()…変数が存在しない場合、または値が空かnullがセットされている場合にtrueを返す
        //   }else{                                  //値があればそれをintに変換して$study_times_arrayに入れる
        //     array_push($study_times_array, (int)$colum_graph_date[0][0]);
        //   }
        // }
        // //このままだと学習時間だけが並んでいる配列、日にちとセットの配列がほしい
        // $d = 1;
        // foreach ($study_times_array as $study_time_array) {  //１つ１つの学習時間に対して、日にち($d)をセットにし、array_pushで予め用意していた空配列に足していく
        //   $study_date_hour_array_before = array($d, $study_time_array);   // [日にち, 学習時間]の配列を定義、ここでデータを入れる
        //   array_push($study_date_hour_array, $study_date_hour_array_before); //空配列に↑の配列を代入する
        //   $d++; //$study_time_arrayが回るごとに$dを増やしていく
        // }
        // // $study_times_bars = $study_date_hour_array;
        $study_times_bars = [1,2];
        $study_languages = Study_language::get();
        $study_contents = Study_content::get();
        return view('webapp.index', compact('study_times_years', 'study_times_months', 'study_times_days','pieces', 'study_times_bars', 'study_languages', 'study_contents'));
    }
}
