<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;




class HelloController extends Controller
{
    public function index()
    {
        $date = [
            'msg' => '',
        ];
        return view("hello.index", $date);
    }

    public function post(Request $request) {
        return view("hello.index", ['msg' => $request->msg]);
    }
}
