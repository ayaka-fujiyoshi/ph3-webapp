<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('/quiz/kuizy.css')}}" >
  <title>quizy</title>
</head>
<body>
  <div class='mainWrapper'>
    <h1 class='title'>クイズ設問 更新ページ</h1>

@foreach ($questions as $question)
      <form method="POST" action="/admin/order">
        @csrf
        <input type="hidden" name="order" id="inputId" />
        <input type="hidden" name="id" value="{{$question->id}}" />
      </form>
      <table class="min-w-full text-center">
        <thead class="border-b bg-gray-50">
          <tr>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
              選択肢
            </th>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
              順番
            </th>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
              編集
            </th>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
              削除
            </th>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
              写真
            </th>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
              Up/Down
            </th>
          </tr>
        </thead class="border-b">
        <tbody>
          <tr class="bg-white border-b">
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-left">
              <a href="{{route('admin.choice', ['id' => $question->id])}}">{{$question->image_name}}</a>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
              {{ $question->order }}
            </td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-left">
              <a href="{{route('admin.question_edit', ['id' => $question->id])}}">
                edit
              </a>
            </td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-left">
              <a href="{{route('admin.question_del', ['id' => $question->id])}}">
                ✕
              </a>
            </td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-left ">
              <img src="{{ asset('/quiz/img/' . $question->image) }}" alt="問題". {{ $question->image }} width=160>
            </td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded mr-1 js-up-button" data-id="{{ $question->order }}">↑</button>
              <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded js-down-button" data-id="{{ $question->order }}">↓</button>
            </td>
          </tr>
        </tbody>
      </table>
    @endforeach
    <br>
      <li>
         <a href="/admin/question_add">新規作成</a>
      </li>
  </div>



</body>

<script>
  'use strict';
  {
    //↑ボタン
    const upToSortNumber = (event) => {
      const quizId = Number(event.currentTarget.getAttribute('data-id'));
      const formElement = document.querySelector('form');
      const inputElementForId = document.getElementById('inputId');
      console.log(quizId);
      console.log(quizId-1);
      console.log(formElement);
      console.log(inputElementForId);
  
      inputElementForId.value = quizId-1;
      formElement.submit();
    };
  
    const upButtons = document.getElementsByClassName('js-up-button');
    // ✅ addEventListener to all upButtons
    for (const upButton of upButtons) {
      upButton.addEventListener('click', upToSortNumber);
    }



    //↓ボタン
    const downToSortNumber = (event) => {
      const quizId = Number(event.currentTarget.getAttribute('data-id'));
      const formElement = document.querySelector('form');
  
      const inputElementForId = document.getElementById('inputId');
      console.log(quizId);
      console.log(quizId+1);
      console.log(formElement);
      console.log(inputElementForId);
  
      inputElementForId.value = quizId+1;
      formElement.submit();
    };
  
    const downButtons = document.getElementsByClassName('js-down-button');
    // ✅ addEventListener to all downButtons
    for (const downButton of downButtons) {
      downButton.addEventListener('click', downToSortNumber);
    }

  }
  </script>
</html>
