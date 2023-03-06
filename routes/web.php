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

Route::get('/', function () {
    return view('welcome');
});
$html = <<<EOF
<html>
<head>
<title>Hello</title>
</head>
<body>
    <h1>Hello</h1>
    <p>This is sample page.</p>
</body>
</html>
EOF;

Route::get('hello', function () use ($html){
    return $html;
});

