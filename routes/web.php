<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Middleware\HelloMiddleware;

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
// ルート情報の設定のところで、直接テンプレートを使う。
Route::get('hello', [HelloController::class, "index"]);
Route::post('hello', [HelloController::class, "post"]);


Route::get('hello/add', [HelloController::class, "add"]);
Route::post('hello/add', [HelloController::class, "create"]);


Route::get('hello/edit', [HelloController::class, "edit"]);
Route::post('hello/edit', [HelloController::class, "update"]);

Route::get('hello/del', [HelloController::class, "del"]);
Route::post('hello/del', [HelloController::class, "remove"]);

Route::get('hello/show', [HelloController::class, "show"]);
