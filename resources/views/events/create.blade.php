@extends('layouts.main')

@section('title', 'Pagina principal')

@section('content')
<h1>Form- evento</h1>
<form action="/events" method="post">
    @csrf
    <input type="text" name="title" placeholder="Titulo de Evento">
    <input type="text" name="description" placeholder="Descrição de Evento">
    <h2>O evento é privado?</h2>
    <select name="private" id="">
        <option value="1">Sim</option>
        <option value="0">Não</option>
    </select>
    <button>
        Enviar
    </button>
</form>
@endsection