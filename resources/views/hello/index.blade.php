@extends('layout.helloapp')
@section('title', 'Index')

@section('menubar')
  @parent
  indexページ
@endsection

@section('content')
  <p>ここが本文</p>
  <p>必要なだけ記述できる。</p>
    @component('components.message')
      @slot('msg_title')
      Caution!
      @endslot

      @slot('msg_content')
      メッセージの表示
      @endslot
    @endcomponent
@endsection

@section('footer')
copyright 2023 kazuki.
@endsection