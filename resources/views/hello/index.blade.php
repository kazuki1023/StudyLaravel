@extends('layout.helloapp')
@section('title', 'Index')

@section('menubar')
  @parent
  indexページ
@endsection

@section('content')
  <p>ここが本文</p>
  <table>
    @foreach($data as $item)
    <tr>
      <th>{{$item['name']}}</th>
      <td>{{$item['mail']}}</td>
    </tr>
    @endforeach
  </table>
@endsection

@section('footer')
copyright 2023 kazuki.
@endsection