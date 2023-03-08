<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;




class HelloController extends Controller
{
    public function index()
    {
        $data = [
            ['name'=>'かず', 'mail'=>'kazu@kazu'],
            ['name'=>'岳', 'mail'=>'gaku@gaku'],
            ['name'=>'kim', 'mail'=>'kim@kim']
        ];
        return view("hello.index", ["data"=> $data]);
    }

    // public function post(Request $request) {
    //     return view("hello.index", ['msg' => $request->msg]);
    // }
}
