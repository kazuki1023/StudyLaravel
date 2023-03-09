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
        $validator = Validator::make($request->query(), [
            'id' => 'required',
            'pass' => 'required',
        ]);
        if ($validator ->fails()) {
            $msg = 'クエリーに問題があります。';
        } else {
            $msg = 'id/passを受け付けました。ふぉーむを入力してね。';
        }
        return view("hello.index", ['msg' => $msg, ]);
    }

    public function post(Request $request) {
        $rules = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];
        $messages = [
            'name.required' => '名前必須！',
            'mail.email' => 'メールアドレスな？',
            'age.numeric' => '整数で答えてね',
            'age.between' => '0~150の間でね',
        ];
        $validator = Validator::make($request->all(), 
        $rules, $messages);
        if ($validator ->fails()) {
            return redirect('/hello')->withErrors($validator)->withInput();
        }
        return view('hello/index', ['msg' => '正しく入力されました。']);
    }
}
