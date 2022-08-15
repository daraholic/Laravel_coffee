<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  {{-- bean name --}}
    {{-- <h2>{{}}</h2> --}}

<table style="width:100%">
  <tr>
    <th>gram</th>
    <th>water</th>
    <th>brewRatio</th>
    <th>time</th>
  </tr>
  @if(empty($data))
  @foreach($results as $result)
  <tr style="text-align:center">
    <td>{{$result->gram}}</td>
    <td>{{$result->water}}</td>
    <td>{{$result->brewRatio}}</td>
    <td>{{$result->time}}</td>
  </tr>
  @endforeach
  @endif

</table>

<p>To make coffee better, you need to learn and practice.</p>
   
</body>
</html>