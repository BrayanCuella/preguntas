<?php


namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\UserAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    // Mostrar el formulario de la prueba
    public function index()
    {
        $questions = Question::all();

        return view('test.index', compact('questions'));
    }

    // Guardar las respuestas del usuario
    public function submit(Request $request)
    {
        $userId = '1';
        $answers = $request->input('answers');

        foreach ($answers as $questionId => $answerText) {
            UserAnswer::create([
                'user_id' => $userId,
                'question_id' => $questionId,
                'answer' => $answerText,
            ]);
        }

        return redirect()->route('test.result')->with('success', 'Prueba enviada correctamente.');
    }

    // Mostrar los resultados
    public function result()
    {
        $userId = Auth::id();
        $answers = UserAnswer::where('user_id', $userId)->with('question')->get();

        return view('test.result', compact('answers'));
    }
}
