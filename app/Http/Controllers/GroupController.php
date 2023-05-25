<?php

namespace App\Http\Controllers;

use App\Models\StudentGroup;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Groups;

class GroupController extends Controller
{

    public function index()
    {
        $groups = Groups::latest()->get();
        return view('groups.index', compact('groups'));
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Groups::create($data);

        return redirect()->route('groups')->with('success', 'Group created successfully.');
    }


    public function show($id)
    {
        $group = Groups::find($id);

        $users = StudentGroup::query()->where('group_id', $id)->get();

        $students = User::query()->whereIn('id', $users->pluck('user_id'))->get();

//        $teacher = User::query()->where('id', $group->teacher_id)->first();

        return view('group.show', compact('group', 'students'));
    }


    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Groups::whereId($id)->update($data);

        return redirect()->route('groups')->with('success', 'Group updated successfully.');
    }


    public function destroy($id)
    {
        $group = Groups::find($id);
        $group->delete();

        return redirect()->route('groups')->with('success', 'Group deleted successfully.');
    }


}
