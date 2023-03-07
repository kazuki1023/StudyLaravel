<html>
  <head>
    <title>hello/index</title>
  </head>
  <body>
    <h1>blade/index</h1>
    <p>foreachディレクティブの例</p>
    <ol>
      @php
      $counter = 0;
      @endphp
      @while ($counter < count($data))
      <li>{{$data[$counter]}}</li>
      @php
      $counter++;
      @endphp
      @endwhile
    </ol>
  </body>
</html>