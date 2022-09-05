<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>
    <form action="/updateBean/{{$data->id}}" method="POST">
        @method('PUT')
        @csrf
        name:<input type="text" name="name" value="{{$data->name}}">
        roast:<input type="text" name="roast" value="{{$data->roast}}">
        regin:<input type="text" name="regin" value="{{$data->regin}}">
        flavor:<input type="text" name="flavor" value="{{$data->flavor}}">
        <button>OK</button>
    </form>
</body>
</html>