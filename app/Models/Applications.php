<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Applications extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'email',
        'phone',
        'surname',
        'name',
        'patronymic',
        'status',
    ];
    

    public function getFullNameAttribute(): string
    {
        return $this->name . " " . Str::limit($this->surname, 1, '.') . " " . $this->patronymic ?: "";
    }

}
