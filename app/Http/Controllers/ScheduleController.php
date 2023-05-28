<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use App\Models\StudentGroups;
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
            return view('schedule.index', compact('groups'));
        }

        $userId = auth()->user()->id;

        $groupIds = TeacherGroups::query()->where('teacher_id', $userId)->get()->pluck('group_id');

        $groups = Groups::query()->whereIn('id', $groupIds)->get();

        return view('schedule.index', compact('groups'));
    }


    public function show($id): Renderable
    {
        $group = Groups::query()->findOrFail($id);

        if (auth()->user()->hasRole('admin')) {
            $groups = Groups::all();
            return view('schedule.index', compact('groups'));
        }

        $userId = auth()->user()->id;

        $groupIds = TeacherGroups::query()->where('teacher_id', $userId)->get()->pluck('group_id');

        $groups = Groups::query()->whereIn('id', $groupIds)->get();

        return view('schedule.index', compact('group', 'groups'));
    }



    public function group(): Renderable
    {

        $userId = auth()->user()->id;

        $groupIds = StudentGroups::query()->where('student_id', $userId)->get()->pluck('group_id');

        $group = Groups::query()->whereIn('id', $groupIds)->first();

        return view('schedule.group', compact('group', ));
    }


    public function update(Request $request, $id): RedirectResponse
    {

        $data = $request->validate(['schedule' => 'required']);

        Groups::query()->whereId($id)->update($data);

        return redirect()->back()->with('success', 'Schedule successfully updated');
    }

}
