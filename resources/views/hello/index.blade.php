<html>
  <head>
    <title>hello/index</title>
  </head>
  <body>
    <h1>blade/index</h1>
    <p>{{$msg}}</p>
    <form action="/hello" method="POST">
      @csrf
      <input type="text" name="msg">
      <input type="submit">
    </form>
  </body>
</html>