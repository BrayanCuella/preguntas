<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = ['answer', 'question_id']; // Asegúrate de proteger los campos 'answer' y 'question_id'

    public function question()
    {
        return $this->belongsTo(Question::class); // Relación inversa, una respuesta pertenece a una pregunta
    }
}

