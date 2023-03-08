@extends('layout.helloapp')
@section('title', 'Index')

@section('menubar')
  @parent
  indexページ
@endsection

@section('content')
  <p>ここが本文</p>
  <p>必要なだけ記述できる。</p>
@endsection

@section('footer')
copyright 2023 kazuki.
@endsection