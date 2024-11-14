<h1>{{ $question->question }}</h1>

<form action="{{ route('answers.store', $question) }}" method="POST">
    @csrf
    <label for="answer">Respuesta</label>
    <textarea name="answer" id="answer" required></textarea>

    <button type="submit">Agregar Respuesta</button>
</form>

<h2>Respuestas</h2>
<ul>
    @foreach ($question->answers as $answer)
        <li>{{ $answer->answer }}</li>
    @endforeach
</ul>
