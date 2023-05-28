<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use App\Models\StudentGroups;
use App\Models\TeacherGroups;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SchoolController extends Controller
{


    public function students(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $users = User::role('student')->get();
        $groups = Groups::query()->latest()->get();
        return view('school.students', compact('users', 'groups'));
    }



    public function teachers(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $users = User::role('teacher')->get();
        $groups = Groups::query()->latest()->get();
        return view('school.teachers', compact('users', 'groups'));
    }



    public function updateStudentGroup($id): RedirectResponse
    {

        $data = request()->validate([ 'group_id' => 'required' ]);

        StudentGroups::query()->where('student_id', $id)->delete();

        StudentGroups::query()->updateOrCreate(
            [
                'student_id' => $id,
                'group_id' => $data['group_id']
            ],
        );

        return redirect()->route('school.students')->with('success', 'Student group updated successfully.');
    }



    public function updateTeacherGroup(Request $request, $id): RedirectResponse
    {

        $data = $request->validate([
            'group_ids' => 'required',
        ]);

        $groupIds = array_map(function ($group) use ($id) {
            return [
                'teacher_id' => $id,
                'group_id' => $group,
            ];
        }, $data['group_ids']);

        TeacherGroups::query()->where('teacher_id', $id)->delete();

        TeacherGroups::query()->upsert($groupIds, ['teacher_id', 'group_id']);

        return redirect()->route('school.teachers')->with('success', 'Teacher groups updated successfully.');

    }


}
