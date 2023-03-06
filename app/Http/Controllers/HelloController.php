<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



global $head, $body, $end;
$head = "<html><head>";
$body = "</head><body>";
$end = "</body><html>";

function tag($tag, $txt) {
    return "<{$tag}>". $txt . "</{$tag}>";
}
class HelloController extends Controller
{
    public function __invoke()
    {
        return <<<EOF
        <html>
        <head>
        <title>Hello</title>
        </head>
        <body>
            <h1>Hello</h1>
            <p>シングルアクションコントローラー</p>
        </body>
        </html>
        EOF;
    }

}
