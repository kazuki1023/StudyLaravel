@extends('layout.helloapp')
@section('title', 'Index')

@section('menubar')
  @parent
  indexページ
@endsection

@section('content')
<table>
  <tr>
    <th>name</th>
    <th>mail</th>
    <th>age</th>
  </tr>
  @foreach ($items as $item) 
    <tr>
      <td>{{$item ->name}}</td>
      <td>{{$item ->mail}}</td>
      <td>{{$item ->age}}</td>
    </tr>
  @endforeach
</table>
@endsection