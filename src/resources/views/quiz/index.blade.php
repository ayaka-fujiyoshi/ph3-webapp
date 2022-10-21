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
    <h1 class='title'>クイズ一覧</h1>
    <ul>
      <li>
        <a href="{{route('quiz', ['id' => 1])}}">ガチで東京の人しか解けない！＃東京の難読地名クイズ</a>
        {{-- route()でid=1と設定 --}}
        {{-- web.phpの中で name(‘quiz’) と名前が付けられたルーティングを指す。 --}}
      </li>
      <li>
        <a href="{{route('quiz', ['id' => 2])}}">ガチで広島の人しか解けない！＃広島の難読地名クイズ</a>
      </li>
    </ul>
  </div>

</body>
</html>