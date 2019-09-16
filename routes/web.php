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

/*
Routeクラスのgetメソッドを使って設定する。
第一引数に割り当てるアドレス
第二引数にそれによって呼び出される処理を書く。
ここには関数を指定することもあるしコントローラと呼ばれるものを指定することもある。
*/
Route::get('/', function () {
    return view('welcome');
    // viewで指定したテンプレートをレンダリングして返す働きをしている。
});

// Route::get('/hello', function(){
//   return '<html><body><h1>Hello</h1><p> This is sample page.</p></body></html>';
// });

//Route::get('action', 'HelloController@index');

Route::get('hello/', 'HelloController@index');
Route::get('hello/other', 'HelloController@other');

/*
Route::get('hello/{msg?}',function ($msg='no message') {
  $html = <<<EOF
  <html>
  <head>
  <title>HELLO/index</title>
  <style>
  body {font-size:11pt; color:#999;}
  h1 { font-size:55pt; text-align:left; color: #eee;
       margin:5px 0px -30px 0px; }
  </style>
  </head>
  <body>
    <h1>index</h1>
    <p>コントローラのテスト</p>
    <a href="/">back</a>
  </body>
  </html>
  EOF;

  return $html;
});
*/
