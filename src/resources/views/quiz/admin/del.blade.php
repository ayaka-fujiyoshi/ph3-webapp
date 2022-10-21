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
    <h1 class='title'>クイズ削除ページ</h1>
    <form action="/admin/del" method="POST">
      <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr><th>name: </th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
        {{-- <tr><th>mail: </th><td><input type="text" name="mail" value="{{$form->mail}}"></td></tr>
        <tr><th>age: </th><td><input type="text" name="age" value="{{$form->age}}"></td></tr> --}}
        <tr><th></th><td><input type="submit" value="send"></td></tr>
      </table>
    </form>
  </div>

</body>
</html>
