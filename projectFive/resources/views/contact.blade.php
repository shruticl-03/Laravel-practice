<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
</head>

<body>
    <h2>Contact Page</h2>
    
    @foreach($students as $stu)
    @if($stu == 'Shruti')
    @continue
    @endif
    <h2>{{$stu}}</h2>
    @endforeach

</body>

</html>