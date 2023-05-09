<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseMaterials extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'tag_id',
        'description',
    ];



    public function documents()
    {
        return $this->belongsToMany(Document::class, 'course_material_documents');
    }


    public function tag()
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }

}
