<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use App\Models\StudentGroup;
use App\Models\User;

class SchoolController extends Controller
{

    public function students() {
        $users = User::role('student')->get();
        $groups = Groups::latest()->get();
        return view('school.students', compact('users', 'groups'));
    }


    public function teachers() {
        $users = User::role('teacher')->get();
        $groups = Groups::latest()->get();
        return view('school.teachers', compact('users', 'groups'));
    }


    public function updateStudentGroup($id) {


        $data = request()->validate([
            'group_id' => 'required',
        ]);

        StudentGroup::query()->updateOrCreate(
            ['user_id' => $id],
            ['group_id' => $data['group_id']]
        );

        return redirect()->route('students')->with('success', 'Group updated successfully.');

    }



}
