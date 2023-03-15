@extends('layout.helloapp')
@section('title', 'Person.Index')

@section('menubar')
  @parent
  indexページ
@endsection

@section('content')
<table>
  <tr>
    <th>Data</th>
  </tr>
  @foreach ($items as $item) 
    <tr>
      <td>{{$item -> getData()}}</td>
    </tr>
  @endforeach
</table>
@endsection

@section('footer')
copyright
@endsection
