<?php

namespace App\Http\Controllers;

use App\Http\Requests\Subjects\SubjectRequest;
use App\Models\Groups;
use App\Models\StudentGroups;
use App\Models\Subjects;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;


class SubjectController extends Controller
{
    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $subjects = Subjects::all();
        $users = User::query()->role('teacher')->get();
        return view('subjects.index', compact('subjects', 'users'));
    }


    public function store(SubjectRequest $request): RedirectResponse
    {
        Subjects::query()->create($request->validated());
        return redirect()->route('subjects')->with('success', 'Subject created successfully');
    }


    public function show($groupId, $id, $startTime): \Illuminate\Contracts\Foundation\Application|Factory|View|Application|RedirectResponse
    {


        if (Carbon::createFromFormat('D M d Y H:i:s e+', $startTime)->dayOfWeek !== Carbon::now()->dayOfWeek) {
           return redirect()->back()->withErrors(['You can not edit today\'s schedule']);
        }


        $group = Groups::query()->findOrFail($groupId);
        $subject = Subjects::query()->findOrFail($id);
        $studentIds = StudentGroups::query()->where('group_id', $groupId)->get()->pluck('student_id');
        $students = User::query()->whereIn('id', $studentIds)->get();

        return view('graduation.index', compact('students', 'group', 'subject'));
    }


    public function update(SubjectRequest $request, $id): RedirectResponse
    {

        $tag = Subjects::query()->findOrFail($id);
        $tag->update($request->validated());

        return redirect()->route('subjects')->with('success', 'Subject updated successfully');
    }


    public function destroy($id): RedirectResponse
    {

        $tag = Subjects::query()->findOrFail($id);
        $tag->delete();

        return redirect()->route('subjects')->with('success', 'Subject deleted successfully');
    }

}
