<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    // Mostrar el formulario para agregar una pregunta
    public function create()
    {
        return view('questions.create');
    }

    // Almacenar una nueva pregunta
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
        ]);

        $question = Question::create([
            'question' => $request->question,
        ]);

        return redirect()->route('questions.show', $question);
    }

    // Mostrar la pregunta y sus respuestas
    public function show(Question $question)
    {
        return view('questions.show', compact('question'));
    }

    // Almacenar una respuesta para una pregunta
    public function storeAnswer(Request $request, Question $question)
    {
        $request->validate([
            'answer' => 'required|string|max:1000',
        ]);

        $question->answers()->create([
            'answer' => $request->answer,
        ]);

        return back(); // Redirige de vuelta a la página de la pregunta
    }
}
