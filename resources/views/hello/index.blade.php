@extends('layout.helloapp')
@section('title', 'Index')

@section('menubar')
  @parent
  indexページ
@endsection

@section('content')
  <p>ここが本文</p>
  <p>Controller value <br>'message' = {{$message}}</p>
  <p>ViewComoposer value <br>'view_message' = {{$view_message}}</p>
@endsection

@section('footer')
copyright 2023 kazuki.
@endsection