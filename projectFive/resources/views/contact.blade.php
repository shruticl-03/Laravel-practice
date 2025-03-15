<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
</head>

<body>
    <h2>Contact Page</h2>
    <hr>
    <h2>Name: {{ $nm }}</h2>

    <!-- <h2>Time: {{time()}}</h2>
    <h2>SQRT: {{sqrt(366)}}</h2> -->

    @if($nm=='Shruti')
    <h2>Hello {{$nm}}</h2>
    @endif



</body>

</html>