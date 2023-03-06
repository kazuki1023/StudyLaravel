<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;




class HelloController extends Controller
{
    public function index(Request $request, Response $response) {
        $html = <<<EOF
        <html>
        <head>
        <title>Hello/Index</title>
        </head>
        <body>
            <h1>title</h1>
            <h3>Request</h3>
            <pre>{$request}</pre>
            <h3>Response</h3>
            <pre>{$response}</pre>
        </body>
        </html>
        EOF;
        $response -> setContent($html);
        return $response;
    }

}
