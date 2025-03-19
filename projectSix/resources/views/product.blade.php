<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <h1>{{$wn}}'s Product Page</h1>
    <hr>
    @include('mobile',['total_mobile'=>4])
    @includeIf('mobile1',['total_mobile'=>4])
    @includeWhen($userType,'mobile',['total_mobile'=>4])
    @includeUnless($userType,'mobile',['total_mobile'=>4])
    
    
    
    
</body>
</html>