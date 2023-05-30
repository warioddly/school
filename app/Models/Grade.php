<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'student_id',
        'subject_id',
        'grade',
        'date',
        'comment',
        'appearance',
    ];
}
