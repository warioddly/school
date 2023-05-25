<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'group_id',
    ];


    public function students()
    {
        return $this->hasMany(User::class);
    }


    public function teachers()
    {
        return $this->hasMany(User::class);
    }


    public function schedule()
    {
        return $this->hasMany(User::class);
    }


}
