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
    <h1 class='title'>クイズ選択肢 更新ページ</h1>
    <form action="/admin/order" method="POST">
      <table>
        @csrf
        {{-- <input type="hidden" name="id" value="{{$form->id}}"> --}}
        @foreach ($questions as $question)
        {{-- 選択肢 order: 番号 が↓に並ぶように --}}
        <tr>
          <th>name: </th>
          <td>{{$question->name}}</td>
          <th>変更:</th>
          <td><input type="number" name="order" value="{{$question->name}}"></td>
        </tr>
        @endforeach
        <tr><th></th><td><input type="submit" value="send"></td></tr>
      </table>
    </form>
  </div>

</body>
</html>
