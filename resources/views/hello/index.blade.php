@extends('layout.helloapp')
@section('title', 'Index')

@section('menubar')
  @parent
  indexページ
@endsection

@section('content')
  <p>{{$msg}}</p>
  @if(count($errors) > 0)
  <p>入力にもんだいがあります。再入力してください。</p>
  @endif
  <form action="/hello" method="POST">
    <table>
    @csrf
    @if ($errors->has('name'))
    <tr>
      <th>error</th>
      <td>{{$errors->first('name')}}</td>
    </tr>
    @endif
    <tr>
      <th>name:</th>
      <td><input type="text" name="name" value="{{old('name')}}"></td>
    </tr>

    @if ($errors->has('mail'))
    <tr>
      <th>error</th>
      <td>{{$errors->first('mail')}}</td>
    </tr>
    @endif
    <tr>
      <th>mail:</th>
      <td><input type="text" name="mail" value="{{old('mail')}}"></td>
    </tr>

    @if ($errors->has('age'))
    <tr>
      <th>error</th>
      <td>{{$errors->first('age')}}</td>
    </tr>
    @endif
    <tr>
      <th>age:</th>
      <td><input type="text" name="age" value="{{old('age')}}"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="send"></td>
    </tr>
    </table>
  </form>

@section('footer')
copyright 2023 kazuki.
@endsection