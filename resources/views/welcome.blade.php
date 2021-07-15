<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Document</title>
</head>
<body>
    @foreach ($travels as $travel)
        <div>
            <h2><span>Location: </span>{{ $travel["location"] }}</h2>
            <h3><span>State: </span>{{ $travel["state"] }}</h3>
            <h4><span>Date: </span>{{ $travel["date"] }}</h4>
            <h4><span>Price: </span> {{ $travel["price"] }}€</h4>
        </div>
        @endforeach
</body>
</html>