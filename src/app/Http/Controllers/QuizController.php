<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\BigQuestion;
use App\Question;
use App\Choice;

class QuizController extends Controller
{
    public function index() 
    {
        return view('quiz.index');
        // quizフォルダの中にあるindex.blade.phpを指す
    }
    
    public function quiz($id) 
    {
        // $big_questions = DB::table('big_questions')->where('id', $id)->first();
        // $questions = DB::table('questions')->where('big_question_id', $id)->get();
        // $choices = DB::table('choices')->get();
        // $correct_choices = DB::table('choices')->where('valid', 1)->get();
        $big_questions = BigQuestion::where('id', $id)->first();
        $questions = Question::where('big_question_id', $id)->orderBy('order', 'asc')->get();
        $choices = Choice::get();
        $correct_choices = Choice::where('valid', 1)->get();

        // return view('quiz.quiz',['big_questions'=>$big_questions, 'questions'=>$questions, 'choices'=>$choices, 'correct_choices'=>$correct_choices, 'id'=>$id]);
        return view('quiz.quiz', compact('big_questions','questions', 'choices','correct_choices','id'));
    }

    // view(テンプレートの場所,配列)
    // viewの編集とcontorollerで定義した変数の名前が同じときにcompact関数でまとめる
    // return view('quizyblade.quizy',compact('id','choices'));

}

//quiz関数の引数を$idとする 
  //→ index.blade.phpのidを受け取る
  //  ['id' => $id]でidに変数idを入れる

