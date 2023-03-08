@extends('layout.helloapp')
@section('title', 'Index')

@section('menubar')
  @parent
  indexページ
@endsection

@section('content')
  <p>ここが本文</p>
  <p>必要なだけ記述できる。</p>
  @include('components.message', ['msg_title'=>'ok', 'msg_content' =>'サブビューです'])
@endsection

@section('footer')
copyright 2023 kazuki.
@endsection