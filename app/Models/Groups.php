<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Groups extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'schedule'
    ];


    public function students(): HasMany
    {
        return $this->hasMany(User::class);
    }


    public function teachers(): HasMany
    {
        return $this->hasMany(User::class);
    }


}
