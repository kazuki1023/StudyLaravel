<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;


class HelloController extends Controller
{
    public function index(Request $request)
    {
        return view("hello.index", ['msg' => 'フォームを入力してね' ]);
    }

    public function post(HelloRequest $request) {
        return view('hello/index', ['msg' => '正しく入力されました。']);
    }
}
