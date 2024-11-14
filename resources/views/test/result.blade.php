@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Resultados de la Prueba</h2>
    <ul class="list-group">
        @foreach ($answers as $answer)
            <li class="list-group-item">
                <strong>Pregunta:</strong> {{ $answer->question->question }} <br>
                <strong>Tu Respuesta:</strong> {{ $answer->answer }}
            </li>
        @endforeach
    </ul>
</div>
@endsection
