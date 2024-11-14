@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Realizar Prueba</h2>
    @if($questions->isEmpty())
        <p>No hay preguntas disponibles.</p>
    @else
        <form action="{{ route('test.submit') }}" method="POST">
            @csrf
            @foreach ($questions as $question)
                <div class="mb-4">
                    <h4>{{ $question->question }}</h4>
                    <textarea name="answers[{{ $question->id }}]" class="form-control" rows="3" required></textarea>
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Enviar Prueba</button>
        </form>
    @endif
</div>
@endsection
