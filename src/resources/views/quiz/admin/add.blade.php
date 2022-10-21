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
    <h1 class='title'>クイズ新規作成</h1>
    <form action="/admin/add" method="POST">
      <table>
          @csrf
          <tr><th>name: </th><td><input type="text" name="name"></td></tr>
          {{-- <tr><th>mail: </th><td><input type="text" name="mail"></td></tr>
          <tr><th>age: </th><td><input type="text" name="age"></td></tr> --}}
          <tr><th></th><td><input type="submit" value="send"></td></tr>
      </table>
    </form>
    {{-- <ul>
      <li>
        <a href="{{route('quiz', ['id' => 1])}}">ガチで東京の人しか解けない！＃東京の難読地名クイズ</a>
      </li>
      <li>
        <a href="{{route('quiz', ['id' => 2])}}">ガチで広島の人しか解けない！＃広島の難読地名クイズ</a>
      </li>
    </ul> --}}
  </div>

</body>
</html>
