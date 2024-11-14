<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['question']; // Asegúrate de proteger el campo 'question'

    public function answers()
    {
        return $this->hasMany(Answer::class); // Relación uno a muchos con las respuestas
    }
}
