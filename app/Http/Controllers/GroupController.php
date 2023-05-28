<?php

namespace App\Http\Controllers;

use App\Models\StudentGroups;
use App\Models\TeacherGroups;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Groups;

class GroupController extends Controller
{

    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $groups = Groups::latest()->get();
        return view('groups.index', compact('groups'));
    }


    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Groups::query()->create($data);

        return redirect()->route('groups')->with('success', 'Group created successfully.');
    }


    public function show($id): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $group = Groups::query()->find($id);

        $studentIds = StudentGroups::query()->where('group_id', $id)->get()->pluck('student_id');
        $teacherIds = TeacherGroups::query()->where('group_id', $id)->get()->pluck('teacher_id');

        $students = User::query()->whereIn('id', $studentIds)->get();
        $teachers = User::query()->whereIn('id', $teacherIds)->get();

        return view('groups.show', compact('group', 'students', 'teachers'));
    }


    public function update(Request $request, $id): RedirectResponse
    {

        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Groups::whereId($id)->update($data);

        return redirect()->route('groups')->with('success', 'Group updated successfully.');
    }


    public function destroy($id): RedirectResponse
    {
        $group = Groups::find($id);

        StudentGroups::query()->where('group_id', $id)->delete();
        TeacherGroups::query()->where('group_id', $id)->delete();

        $group->delete();

        return redirect()->route('groups')->with('success', 'Group deleted successfully.');
    }




    public function teacherGroups(): Renderable {

        $userId = auth()->user()->id;

        $groupIds = TeacherGroups::query()->where('teacher_id', $userId)->get()->pluck('group_id');

        $groups = Groups::query()->whereIn('id', $groupIds)->get();

        return view('groups.lessons', compact('groups'));
    }

}
