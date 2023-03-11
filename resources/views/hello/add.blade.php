@extends('layout.helloapp')

@section('title', 'Add')
@section('menubar')
  @parent
  新規作成
@endsection

@section('content')
  <form action="/hello/add" method="POST">
    @csrf
    <table>
      <tr>
        <th>name:</th>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <th>mail:</th>
        <td><input type="text" name="mail"></td>
      </tr>
      <tr>
        <th>age:</th>
        <td><input type="text" name="age"></td>
      </tr>
      <tr>
        <th></th>
        <td><input type="submit" value="send"></td>
      </tr>
    </table>
  </form>
@endsection

@section('footer')
copyright 2023 kazuki.
@endsection