<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome {{$name}}</h1>
    <hr>
    @include('contact',['pincode'=>560056])
</body>

</html>