@extends('layout.helloapp')

@section('title', 'Edit')
@section('menubar')
  @parent
  更新画面
@endsection

@section('content')
  <form action="/hello/edit" method="POST">
    <table>
      @csrf
      <input type="hidden" name="id" value="{{$form->id}}">
      <tr>
        <th>name:</th>
        <td><input type="text" name="name" value="{{$form->name}}"></td>
      </tr>
      <tr>
        <th>mail:</th>
        <td><input type="text" name="mail" value={{$form->mail}}></td>
      </tr>
      <tr>
        <th>age:</th>
        <td><input type="text" name="age" value={{$form->age}}></td>
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