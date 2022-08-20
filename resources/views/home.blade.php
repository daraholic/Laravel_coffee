<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  @if(!empty($data))
  <h2>coffee data of {{$data->name}} </h2>
  <form action="/{{$data->id}}" method="GET">
    <td>{{$data->name}}</td>
    <td>{{$data->roast}}</td>
    <td>{{$data->regin}}</td>
    <td>{{$data->flavor}}</td>
    
    @else
    <h2>coffee data list</h2>
    
<table style="width:100%">
  <tr>
    <th>name</th>
    <th>roast</th>
    <th>regin</th>
    <th>flavor</th>
  </tr>
  @foreach($results as $result)
  {{$result}}
  <tr style="text-align:center">
    <td>{{$result->id}}</td>
    <td>{{$result->name}}</td>
    <td>{{$result->roast}}</td>
    <td>{{$result->regin}}</td>
    <td>{{$result->flavor}}</td>
  </tr>
  @endforeach
</table>
<a href="/parameter">get all parameter</a>
<p>To make coffee better, you need to learn and practice.</p>
@endif

</body>
</html>