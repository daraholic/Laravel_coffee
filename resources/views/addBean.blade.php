<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>add your New Bean!</h1>
    <form method="POST" action="/save">
        @csrf
        name:<input type="text" name="name">
        roast:<input type="text" name="roast">
        regin:<input type="text" name="regin">
        flavor:<input type="text" name="flavor">
        <button>OK</button>
    </form>
</body>
</html>