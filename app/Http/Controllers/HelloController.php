<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;




class HelloController extends Controller
{
    public function index(Request $request)
    {
        $date = [
            'msg' => 'コントローラー→テンプレートに渡される情報',
            'id' => $request->id,
            'name' => "kazuki"
        ];
        return view("hello.index", $date);
    }

}
