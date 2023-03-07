<html>
  <head>
    <title>hello/index</title>
  </head>
  <body>
    <h1>blade/index</h1>
    @isset ($msg)
    <p>こんにちは、{{$msg}}さん</p>
    @else
    <p>なにはちょーだい</p>
    @endisset
    <form action="/hello" method="POST">
      @csrf
      <input type="text" name="msg">
      <input type="submit">
    </form>
  </body>
</html>