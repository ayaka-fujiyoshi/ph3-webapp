<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('/quiz/kuizy.css')}}" >
  <title>quizy管理画面</title>
</head>
<body>
  <div class='mainWrapper'>
    <h1 class='title'>クイズ一覧</h1>
    <ul>
      @foreach ($big_questions as $big_question)
        <li>
          <a href="{{route('admin.order', ['id' => $loop->index+1])}}">
            ガチで{{$big_question->name}}の人しか解けない！ #{{$big_question->name}}の難読地名クイズ
          </a>
          <a href="{{route('admin.edit', ['id' => $loop->index+1])}}">
            タイトル編集
          </a>
          <a href="{{route('admin.del', ['id' => $loop->index+1])}}">
            削除画面
          </a>
          <br>
          {{-- <a href="{{route('admin.order', ['id' => $loop->index+1])}}">
            タイトル順序変更
          </a> --}}
        </li>
      @endforeach
      <br>
      <li>
         <a href="/admin/add">新規作成</a>
      </li>
      <li>
        <a href="{{route('admin.selectEdit')}}">
          タイトル順序変更
        </a>
      </li>
    </ul>
  </div>

</body>
</html>