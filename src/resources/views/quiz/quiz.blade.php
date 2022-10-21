{{-- 継承レイアウトの作成 --}}
@extends('layouts.quizapp')

@section('title', '難読地名クイズ')
@section('menu')
   @parent
   ガチで{{$big_questions->name}}の人しか解けない！ #{{$big_questions->name}}の難読地名クイズ
     {{-- 取ってきたテーブルの変数->カラム名 --}}
@endsection

@if ($id === "1")
  {{-- 東京 --}}
   @section('content')
        @foreach ($questions as $question)
          <!-- 設問番号↓ -->
             <h1>{{$loop->index+1}}.この地名はなんて読む？</h1>
          <!-- 写真↓ -->
             <img src="{{ asset('/quiz/img/' . $question->image) }}" alt="問題". {{ $question->image }} width=auto>
          <!-- 選択肢↓ -->
             @foreach ($choices->where('question_id', $question->id) as $choice)
               <ul>
                  <li class='buttonOfOptionNumber' input type='button' value='button' 
                      onclick="clickSelectedButton({{$question->id}},{{$choice->selection_id}},{{$choice->valid}})" 
                      id='answerChoice_{{$question->id}}_{{$choice->selection_id}}_{{$choice->valid}}'>
                    {{$choice->name}}
                  </li>
               </ul>
             @endforeach
             <!-- 解答ボックス↓ -->
             @foreach ($correct_choices->where('question_id', $question->id) as $correct_choice)
               <div id='answerDisplay{{$question->id}}' class='firstIsInvisible'>
                     <li><span>正解!</span></li>
                     <li>正解は  {{$correct_choice->name}} です!</li>
               </div>
               <div id='incorrectAnswerDisplay{{$question->id}}' class='incorrectFirstIsInvisible'>
                     <li><span>不正解!</span></li>
                     <li>正解は  {{$correct_choice->name}} です!</li>
               </div>
             @endforeach
        @endforeach
   @endsection
   
   
@elseif($id === "2")
  {{-- 広島 --}}
  @section('content')
    @foreach ($questions as $question)
      <!-- 設問番号↓ -->
         <h1>{{$loop->index+1}}.この地名はなんて読む？</h1>
      <!-- 写真↓ -->
         <img src="{{ asset('/quiz/img/' . $question->image) }}" alt="問題". {{ $question->image }} width=auto>
      <!-- 選択肢↓ -->
         @foreach ($choices->where('question_id', $question->id) as $choice)
           <ul>
              <li class='buttonOfOptionNumber' input type='button' value='button' 
                  onclick="clickSelectedButton({{$question->id}},{{$choice->selection_id}},{{$choice->valid}})" 
                  id='answerChoice_{{$question->id}}_{{$choice->selection_id}}_{{$choice->valid}}'>
                {{$choice->name}}
              </li>
           </ul>
         @endforeach
         <!-- 解答ボックス↓ -->
         @foreach ($correct_choices->where('question_id', $question->id) as $correct_choice)
           <div id='answerDisplay{{$question->id}}' class='firstIsInvisible'>
                 <li><span>正解!</span></li>
                 <li>正解は  {{$correct_choice->name}} です!</li>
           </div>
           <div id='incorrectAnswerDisplay{{$question->id}}' class='incorrectFirstIsInvisible'>
                 <li><span>不正解!</span></li>
                 <li>正解は  {{$correct_choice->name}} です!</li>
           </div>
         @endforeach
    @endforeach
  @endsection
@endif

