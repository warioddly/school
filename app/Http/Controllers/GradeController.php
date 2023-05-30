<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GradeController extends Controller
{

    public function store(Request $request): RedirectResponse
    {

        $data = $request->validate([
            'teacher_id' => 'required|exists:users,id',
            'student_id' => 'required|exists:users,id',
            'subject_id' => 'required|exists:subjects,id',
            'grade' => 'required|numeric|min:1|max:5',
            'comment' => 'required|string|max:255',
            'appearance' => 'required|numeric|min:1|max:5',
        ]);


        Grade::query()->create($data);

        return redirect()->route('grades')->with('success', 'Grade created successfully');

    }


    public function update(Request $request, $id): RedirectResponse
    {

        $data = $request->validate([
            'teacher_id' => 'required|exists:users,id',
            'student_id' => 'required|exists:users,id',
            'subject_id' => 'required|exists:subjects,id',
            'grade' => 'required|numeric|min:1|max:5',
            'comment' => 'required|string|max:255',
            'appearance' => 'required|numeric|min:1|max:5',
        ]);


        $grade = Grade::query()->findOrFail($id);

        $grade->update($data);


        return redirect()->route('grades')->with('success', 'Grade updated successfully');
    }

}
