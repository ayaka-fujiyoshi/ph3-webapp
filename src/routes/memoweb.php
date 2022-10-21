<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// use Illuminate\Routing\Route;

// Route::get(割り当てるアドレス,関数やコントローラーなど);
// 下記はデフォルトで用意されているトップページのルート情報
  Route::get('', function () {
      return view('welcome'); 
//         //return で返される値がそのアドレスにアクセスした際に表示される内容
//           //今回の戻り値→ view(テンプレート名)  指定したテンプレートファイルをロードし、レンダリングして返す
//           //view('welcome') でwelcome.blade.phpというテンプレートファイルをレンダリング表示
//             //テンプレート ↑ は resourcesフォルダ内のviewsフォルダの中
  });

// Route::get('hello', function () {
//     return '<html><body><h1>hello</h1><p>This is sample page.</p></body></html>'; 
// });


//ヒアドキュメントを使う  
  //PHPで長文テキストを記述するのに使われるもの、<<<演算子を使い、リスト内に直接記述されたテキストをまとめて変数などに代入
// $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {font-size:16pt; color:999; }
// h1 { font-size:100pt; text-aligin:right; color:#eee;
//     margin:-40px 0px -50px 0px; }
// </style>
// </head>
// <body>
//    <h1>Hello</h1>
//    <p>This is sample page.</p>
//    <p>これは、サンプルで作ったページです。</p>
// </body>
// </html>
// EOF;

// Route::get('hello', function () use ($html) {
//      return $html; 
// });
  //本格的なwebページを作る場合は別の方法がある


//ルートパラメータの利用
  //アクセスする際にパラメータを設置、
// Route::get('hello/{msg}', function ($msg) {
// $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {font-size:16pt; color:999; }
// h1 { font-size:100pt; text-aligin:right; color:#eee;
//     margin:-40px 0px -50px 0px; }
// </style>
// </head>
// <body>
//    <h1>Hello</h1>
//    <p>{$msg}</p>
//    <p>これは、サンプルで作ったページです。</p>
// </body>
// </html>
// EOF;
//      return $html; 
// });


//今までは必須パラメータ
//任意パラメータを使う⇒パラメータ名の末尾に？を付けて宣言、第二引数にデフォルト値を指定
// Route::get('hello/{msg?}', function ($msg='no message.') {
// $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {font-size:16pt; color:999; }
// h1 { font-size:100pt; text-aligin:right; color:#eee;
//     margin:-40px 0px -50px 0px; }
// </style>
// </head>
// <body>
//    <h1>Hello</h1>
//    <p>{$msg}</p>
//    <p>これは、サンプルで作ったページです。</p>
// </body>
// </html>
// EOF;
//      return $html; 
// });


//HelloController.phpのためのルート情報の用意
// Route::get('hello', 'HelloController@index');

//ルートパラメータの利用による、ルート情報の修正
// Route::get('hello/{id?}/{pass?}', 'HelloController@index');

//複数アクションの利用による、ルート情報の修正
// Route::get('hello', 'HelloController@index');
// Route::get('hello/other', 'HelloController@other');

//複数アクションの利用による、ルート情報の修正
// Route::get('hello', 'HelloController');

//RequestおよびResponseによる、ルート情報の修正
// Route::get('hello', 'HelloController@index');



//第三章
//ルートの設定でテンプレートを表示する
// Route::get('hello', function () {
//   return view('hello.index'); 
// });

// //コントローラーでテンプレートを使う
// Route::get('hello', 'HelloController@index');

// //ルートパラメータをテンプレートに渡す
// Route::get('hello/{id?}', 'HelloController@index');

// //クエリー文字列の利用
// Route::get('hello', 'HelloController@index');



//第四章
//ミドルウェアの呼び出し処理追加
// //use App\Http\Middleware\HelloMiddleware; を追記
// Route::get('hello', 'HelloController@index')->middleware(HelloMiddleware::class);
// //グローバルミドルウェアとして登録済み、↑消去、グループを利用する
// Route::get('hello', 'HelloController@index')->middleware('helo');