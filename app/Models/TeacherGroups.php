<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherGroups extends Model
{

    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'teacher_id',
        'group_id',
    ];

}
