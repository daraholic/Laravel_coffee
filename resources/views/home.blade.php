<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>coffee data list</h2>
<table style="width:100%">
  <tr>
    <th>name</th>
    <th>roast</th>
    <th>regin</th>
    <th>flavor</th>
  </tr>
  @foreach($results as $result)
  <tr style="text-align:center">
    <div>
    <td>{{$result->name}}</td>
    <td>{{$result->roast}}</td>
    <td>{{$result->regin}}</td>
    <td>{{$result->flavor}}</td>
    <td>
      <form action="/edit/{{$result->id}}" method="POST">
        @csrf
        <button>edit</button>
      </form>
    </td>
    <td>

      <form action="/{{$result->id}}" method="POST">
        @method('DELETE')
        @csrf
        <button>delete</button>
      </form>
    </td>
    @endforeach
  </tr>
</div>

</table>
<a href="/parameter">get all parameter</a>
<p>To make coffee better, you need to learn and practice.</p>

<h3>Now,if you bought a new bean,add to here</h3>
<button><a href="/add">add</a></button>

</body>
</html>