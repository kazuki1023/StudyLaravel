@extends('layout.helloapp')

@section('title', 'Edit')
@section('menubar')
  @parent
  詳細ページ
@endsection

@section('content')
    <table>
      <tr>
        <th>name:</th>
        <td>{{$item->id}}</td>
      </tr>
      <tr>
        <th>name:</th>
        <td>{{$item->name}}</td>
      </tr>
      <tr>
        <th>mail:</th>
        <td>{{$item->mail}}</td>
      </tr>
      <tr>
        <th>age:</th>
        <td>{{$item->age}}</td>
      </tr>
    </table>
@endsection

@section('footer')
copyright 2023 kazuki.
@endsection