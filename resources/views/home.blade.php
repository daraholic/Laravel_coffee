<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <h2>coffee data list</h2>
    <div class="search-container">
      <form action="/bean" method="GET">
        <input type="text" placeholder="Search.." name="key">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
    @if(isset($error))
    <div>{{$error}}</div>
    @endif
    @if(empty($results))
        <div class="bg-light p-5 rounded mt-3">
            <h1>No data found.</h1>
            <p class="lead">try create new data.</p>
        </div>
    @else
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
      <form action="/editBean/{{$result->id}}" method="POST">
        @csrf
        <button>edit</button>
      </form>
    </td>
    <td>
      <form action="/deleteBean/{{$result->id}}" method="POST">
        @method('DELETE')
        @csrf
        <button>delete</button>
      </form>
    </td>
    @endforeach
  </tr>
</div>
@endif

</table>
<a href="/parameter">get all parameter</a>
<p>To make coffee better, you need to learn and practice.</p>

<h3>Now,if you bought a new bean,add to here</h3>
<button><a href="/addBean">add</a></button>

</body>
</html>