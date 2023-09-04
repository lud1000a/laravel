@extends('layouts.main')

@section('title', 'Pagina principal')

@section('content')

@foreach($events as $event)
    <p>{{ $event->title}} -- {{$event -> description}}</p>
@endforeach
@endsection