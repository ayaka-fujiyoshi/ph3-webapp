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
    <h1 class='title'>クイズ設問更新ページ</h1>
    <form action="/admin/question_edit" method="POST">
      <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        {{-- <tr><th>big_question_id: </th><td><input type="number" name="big_question_id"></td></tr> --}}
        <tr><th>image(~.png): </th>
          <td>before: {{$form->image_name}}</td>
          <td><input type="text" name="image"></td></tr>
        {{-- <tr><th>image_name: </th><td><input type="text" name="image_name"></td></tr>
        <tr><th>order: </th><td><input type="number" name="order"></td></tr> --}}
        <tr><th></th><td><input type="submit" value="send"></td></tr>
      </table>
    </form>
  </div>

</body>
</html>
