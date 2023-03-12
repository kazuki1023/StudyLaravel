@extends('layout.helloapp')

@section('title', 'Edit')
@section('menubar')
  @parent
  詳細ページ
@endsection

@section('content')
  @if ($items != null)
    @foreach ($items as $item)
    <table>
      <tr>
        <th>id:</th>
        <td>{{$item->id}}</td>
        <th>name:</th>
        <td>{{$item->name}}</td>
      </tr>
    </table>
    @endforeach
  @endif
@endsection

@section('footer')
copyright 2023 kazuki.
@endsection