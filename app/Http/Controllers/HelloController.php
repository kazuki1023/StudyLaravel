<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id = "noname", $pass = "unknown") {
        return <<<EOF
        <html>
        <head>
        <title>hello/index</title>
        </head>
        <body>
            <h1>Index</h1>
            <p>これはHelloコントローラーのindexアクションです。</p>
            <ul>
                <li>ID: {$id}</li>
                <li>PASS: {$pass}</li>
            </ul>
        </body>
        </html>
        EOF;
    }
}
