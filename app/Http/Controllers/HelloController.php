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
            'age' => 'numeric',
        ];
        $messages = [
            'name.required' => '名前必須！',
            'mail.email' => 'メールアドレスな？',
            'age.numeric' => '整数で答えてね',
            'age.min' => '前世要らないです',
            'age.max' => '亀ですか？？？',
        ];
        $validator = Validator::make($request->all(), 
        $rules, $messages);

        $validator->sometimes('age', 'min:0', function($input) {
            return is_numeric($input->age);
        });
        $validator->sometimes('age', 'max:200', function($input) {
            return is_numeric($input->age);
        });

        if ($validator ->fails()) {
            return redirect('/hello')
            ->withErrors($validator)
            ->withInput();
        }
        return view('hello/index', ['msg' => '正しく入力されました。']);
    }
}
