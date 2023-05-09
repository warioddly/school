<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];


    public function courseMaterials()
    {
        return $this->hasMany(CourseMaterials::class, 'tag_id');
    }


    public function documents()
    {
        return $this->hasMany(Document::class, 'tag_id');
    }


    public function videoMaterials()
    {
        return $this->hasMany(Projects::class, 'tag_id');
    }
}
