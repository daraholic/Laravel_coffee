<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>add your coffee parameter together!</h1>
    <form method="POST" action="/saveParameter">
        @csrf
        gram:<input type="text" name="gram">
        water:<input type="text" name="water">
        brewRatio:<input type="text" name="brewRatio">
        time:<input type="text" name="time">
        bean:<input type="text" name="bean_id">
        <button>OK</button>
    </form>
</body>

</html>