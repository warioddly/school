<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
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


    public function students(): array|Collection
    {
        $studentIds = StudentGroups::query()->where('group_id', $this->id)->get()->pluck('student_id');
        return User::query()->whereIn('id', $studentIds)->get();
    }


    public function teachers(): array|Collection
    {
        $teacherIds = TeacherGroups::query()->where('group_id', $this->id)->get()->pluck('teacher_id');
        return User::query()->whereIn('id', $teacherIds)->get();
    }


}
