@extends('layout.helloapp')
@section('title', 'Index')

@section('menubar')
  @parent
  indexページ
@endsection

@section('content')
  <p>ここが本文</p>
  <p>これは、<middleware>google.com</middleware>へのりんくです</p>
  <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです</p>
@endsection

@section('footer')
copyright 2023 kazuki.
@endsection