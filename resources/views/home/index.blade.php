<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <h1>Hello World</h1>
    {{ "<h1>Hello world</h1>" }}
    {{ $name . " hello" }}
     !! "<h1>Hello world</h1>" !!
    @php
        $showElement = true;

    @endphp
    @if(!$showElement)
        <h1>Element is Displayed</h1>
    @else 
        <h1>Your are seeing this instead</h1>
    @endif

    <img src="{{ asset('img/pexels-gautham-krishnan-12601624.jpg') }}" alt="" srcset="">

    <ul>
        {{-- @if($numbers) --}}
        @forelse($numbers as $number)
            <li>{{ $number }}</li>
            @if ($loop->first)
                This is the first iteration.
                @endif
                
                @if ($loop->last)
                This is the last iteration.
                @endif
       
        @empty
        <h1>Numbers is empty</h1>
        @endforelse
    </ul>

</body>
</html>