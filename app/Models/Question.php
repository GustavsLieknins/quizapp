<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    // Add fillable properties
    protected $fillable = [
        'question',
        'answer',
        'quiz_id', // Add this line
    ];
}
