<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

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

// アクションにルートを割り当てる。
// これはlaravel8以降の変更点だから本と違う。
// シングルアクションコントローラーの場合、メゾットの指定要らない。
Route::get('hello', [HelloController::class, "index"]);