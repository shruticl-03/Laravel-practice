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

    @foreach($students as $stu)
    @continue($stu=='Ram')
    <h2>{{$stu}}</h2>
    @endforeach

</body>

</html>