<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>
    <form action="/{{$data->id}}" method="POST">
        @method('PUT')
        @csrf
        gram:<input type="text" name="gram" value="{{$data->gram}}">
        water:<input type="text" name="water" value="{{$data->water}}">
        brewRatio:<input type="text" name="brewRatio" value="{{$data->brewRatio}}">
        time:<input type="text" name="time" value="{{$data->time}}">
        <button>OK</button>
    </form>
</body>
</html>