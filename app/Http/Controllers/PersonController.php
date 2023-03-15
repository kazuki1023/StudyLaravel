<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request) {
        $items = Person::all();
        return view('person.index', ['items' => $items]);
    }

    // getアクセスしたときの処理
    public function find(Request $request) {
        return view('person.index', ['input' => '']);
    }

    // post送信されたときの処理
    public function search(Request $request) {
        $item = Person::find($request -> input);
        $param = ['input' => $request->input, 'item' => $item];
        return view('person.find', $param);
    }
}
