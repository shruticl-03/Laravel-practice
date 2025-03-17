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

    {{--@if($nm=='Shruti')
    <h2>Hello {{$nm}}</h2>
    @endif--}}

    {{--@if($nm=='Shruti')
    <h2>Hello {{$nm}}</h2>
    @else
    <h2>Hello Guest</h2>
    @endif--}}

    {{--@if($nm=='Shruti')
    <h2>Hello {{$nm}}</h2>
    @elseif($nm=='Navya')
    <h2>Hello {{$nm}}</h2>
    @else
    <h2>Hello Guest</h2>
    @endif--}}

    {{--@unless($nm=='Shruti')
    <h2>You are not admin</h2>
    @endunless--}}

    {{--@isset($nm)
    <h2>{{$nm}}</h2>
    @endisset--}}

    {{--@empty($nm=="")
    <h2>Hello User</h2>
    @endempty--}}

    {{--@production
    <h2>Production Code</h2>
    @endproduction--}}

    {{--@env('local')
    <h2>Local Environment</h2>
    @endenv--}}

    {{--@env(['local','staging'])
    <h2>Local or Staging Environment</h2>
    @endenv--}}

    {{--@switch(3)
    @case(1)
    <h2>First</h2>
    @break
    @case(2)
    <h2>Second</h2>
    @break
    @case(3)
    <h2>Third</h2>
    @break
    @default
    <h2>Any</h2>
    @endswitch--}}

    {{--@for($i=0;$i<10;$i++)
    <h2>{{$i}}</h2>
    @endfor--}}

    {{--@foreach($students as $stu)
    <h2>{{$stu}}</h2>
    @endforeach--}}

    {{--@forelse($students as $stu)
    <h2>{{$stu}}</h2>
    @empty
    <h2>No Students</h2>
    @endforelse--}} 

    <!-- while condition -->
    @while(true)
    <h2>Hello</h2>
    @endwhile

    @while(true)
    if (i === 5) {
    break;
    <h2>Hello Forever</h2>
    }
    i++;
    @endwhile










</body>

</html>