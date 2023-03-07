<html>
  <head>
    <title>hello/index</title>
  </head>
  <body>
    <h1>blade/index</h1>
    <p>foreachディレクティブの例</p>
    <ol>
      @foreach($date as $item)
      <li>{{$item}}</li>
      @endforeach
    </ol>
  </body>
</html>