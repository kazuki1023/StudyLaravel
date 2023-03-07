<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;




class HelloController extends Controller
{
    public function index()
    {
        $date = ["one", "two", "さん", "よん"];
        return view("hello.index", ["date"=> $date]);
    }

    // public function post(Request $request) {
    //     return view("hello.index", ['msg' => $request->msg]);
    // }
}
