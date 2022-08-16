<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>coffee data</h2>

<table style="width:100%">
  <tr>
    <th>name</th>
    <th>roast</th>
    <th>regin</th>
    <th>flavor</th>
  </tr>
  @foreach($results as $result)
  <tr style="text-align:center">
    <td>{{$result->name}}</td>
    <td>{{$result->roast}}</td>
    <td>{{$result->regin}}</td>
    <td>{{$result->flavor}}</td>
  </tr>
  @endforeach
</table>
<a href="/parameter">get all parameter</a>
<p>To make coffee better, you need to learn and practice.</p>
   
</body>
</html>