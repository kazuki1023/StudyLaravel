<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;




class HelloController extends Controller
{
    public function index($id =  "zero")
    {
        $date = [
            'msg' => 'コントローラー→テンプレートに渡される情報',
            'id' => $id,
            'name' => "kazuki"
        ];
        return view("hello.index", $date);
    }

}
