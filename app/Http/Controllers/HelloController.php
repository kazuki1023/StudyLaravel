<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Illuminate\Http\Response;


class HelloController extends Controller
{
    public function index(Request $request)
    {
        return view("hello.index", ['msg' => 'フォームを入力:']);
    }

    public function post(HelloRequest $request) {
        return view("hello.index", ['msg' => '正しく入力されました。']);
    }
}
