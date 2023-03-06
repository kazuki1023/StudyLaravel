<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// get関数の第１引数のアドレス部分に{パラメータ}を用意する。
Route::get('/', function () {
    return view('welcome');
});

// 任意パラメーター
Route::get('hello/{msg?}', function ($msg = 'no message.'){
    $html = <<<EOF
<html>
<head>
<title>Hello</title>
</head>
<body>
    <h1>Hello</h1>
    <span>hello/</span>
    <span>{$msg}にかいた内容がもってこられるよ</span>
    <p>This is {$msg} page.</p>
</body>
</html>
EOF;
    return $html;
});

