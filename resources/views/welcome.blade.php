@extends('layouts.main')

@section('title', 'Pagina principal')

@section('content')
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