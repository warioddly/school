<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use App\Models\StudentGroups;
use App\Models\Subjects;
use App\Models\TeacherGroups;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    public function index(): Renderable
    {

        if (auth()->user()->hasRole('admin')) {
            $groups = Groups::all();
            return view('schedule.index', compact('groups', ));
        }

        $groupIds = TeacherGroups::query()->where('teacher_id', auth()->user()->id)->get()->pluck('group_id');

        $groups = Groups::query()->whereIn('id', $groupIds)->get();

        return view('schedule.index', compact('groups'));

    }


    public function edit($id): Renderable
    {

        $group = Groups::query()->findOrFail($id);
        $subjects = Subjects::all();

        return view('schedule.edit', compact('group', 'subjects'));
    }



    public function show($id): Renderable
    {

        $userId = auth()->user()->id;

        if (auth()->user()->hasRole('student')) {

            $groupId = StudentGroups::query()->where('student_id', $userId)->first()->group_id;

            $group = Groups::query()->findOrFail($groupId);

            return view('schedule.show-as-student', compact('group'));
        }


        $group = Groups::query()->findOrFail($id);

        $groupIds = TeacherGroups::query()->where('teacher_id', 4)->get()->pluck('group_id');

        $groups = Groups::query()->whereIn('id', $groupIds)->get();

        return view('schedule.show', compact('group', 'groups'));
    }


    public function update(Request $request, $id): RedirectResponse
    {

        $data = $request->validate(['schedule' => 'required']);

        Groups::query()->whereId($id)->update($data);

        return redirect()->back()->with('success', 'Schedule successfully updated');
    }

}
