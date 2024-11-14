
<form action="{{ route('questions.store') }}" method="POST">
    @csrf
    <label for="question">Pregunta</label>
    <textarea name="question" id="question" required></textarea>

    <button type="submit">Crear Pregunta</button>
</form>
