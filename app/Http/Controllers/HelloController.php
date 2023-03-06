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
    public function index() {
        global $head, $body, $end;
        $html = $head . tag('title', 'Hello/Index'). $body
        . tag('h1', 'Index') . tag("p", 'this is Index Page'). '<a href="/hello/other">
        go to the other page</a>' .
        $end;
        return $html;
    }

    public function other() {
        global $head, $body, $end;
        $html = $head . tag('title', 'Hello/Index'). $body
        . tag('h1', 'Other') . tag("p", 'this is Other Page'). '<a href="/hello">
        go to the hello page</a>' .
        $end;
        return $html;
    }
}
