<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;


class HelloController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table("people")->get();
        return view("hello.index", ['items' => $items ]);
    }

    public function post(HelloRequest $request) {
        return view('hello/index', ['msg' => '正しく入力されました。']);
    }

    public function add(Request $request) {
        return view('hello.add');
    }
    public function create(Request $request) {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
        return redirect('/hello');
    }

    public function edit(Request $request) {
        $param = ['id' => $request->id];
        $items = DB::select('select * from people where id = :id', $param);
        // return print_r($item[0]);
        return view('hello.edit', ['form' => $items[0]]);
    }

    public function update(Request $request) {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::update('update people set name = :name, mail = :mail, age = :age where id = :id', $param);
        return redirect('/hello');
    }

    public function del(Request $request) {
        $param = ['id' => $request->id];
        $items = DB::select('select *  from people where id = :id', $param);
        // return var_dump($item);
        return view('hello.del', ['form' => $items[0]]);
    }

    public function remove(Request $request) {
        $param = ['id' => $request->id];
        DB::delete('delete from people where id = :id', $param);
        return redirect('/hello');
    }

    public function show(Request $request) {
        $id = $request->id;
        $items = DB::table('people')->where('id', "<=" ,$id)->get();
        return view('hello.show', ['items' => $items]);
    }
}
