<html>
  <head>
    <title>hello/index</title>
  </head>
  <body>
    <h1>blade/index</h1>
    <p>{{$msg}}</p>
    @if ($msg != '')
    <p>こんにちは、{{$msg}}さん</p>
    @else
    <p>名前教えて</p>
    @endif
    <form action="/hello" method="POST">
      @csrf
      <input type="text" name="msg">
      <input type="submit">
    </form>
  </body>
</html>