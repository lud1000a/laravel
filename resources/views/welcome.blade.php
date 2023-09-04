@extends('layouts.main')

@section('title', 'Pagina principal')

@section('content')

@foreach($events as $event)
    <p>{{ $event->title}} -- {{$event -> description}}</p>
@endforeach
<body class="antialiased">
        @if(1>-1)
        <p>comparação do if</p>
        @endif
        <p>para imprimir a {{ $var }}</p>
        <hr>
        @foreach($array as $value)
        <p>{{ $value }}</p>
        @endforeach
        <p>{{ count($array) }}</p>
        <br>
        <br>
    </body>
</html>
@endsection