<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table style="width:100%">
  <tr>
    <th>gram</th>
    <th>water</th>
    <th>brewRatio</th>
    <th>time</th>
    <th>beanName</th>
  </tr>
  @foreach($results as $result)
  <tr style="text-align:center">
    <td>{{$result->gram}}</td>
    <td>{{$result->water}}</td>
    <td>{{$result->brewRatio}}</td>
    <td>{{$result->time}}</td>
    <td>{{$result->bean_id}}</td>
    <td>
      <form action="/editParameter/{{$result->id}}" method="POST">
        @csrf
        <button>edit</button>
      </form>
    </td>
    <td>
      <form action="/deleteParameter/{{$result->id}}" method="POST">
        @method('DELETE')
        @csrf
        <button>delete</button>
      </form>
    </td>
  </tr>
  @endforeach

</table>
<a href="/bean">bean list</a>
<p>To make coffee better, you need to learn and practice.</p>

<h3>Now,if you found some interesting data ,add here</h3>
<button><a href="/addPatameter">add</a></button>
 
</body>
</html>