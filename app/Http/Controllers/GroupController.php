<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groups;

class GroupController extends Controller
{
    public function index()
    {
        return view('group.index');
    }

    public function create()
    {
        return view('group.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $group = new Groups();
        $group->name = $request->name;
        $group->description = $request->description;
        $group->save();

        return redirect()->route('group.index')->with('success', 'Group created successfully.');
    }


    public function show($id)
    {
        $group = Groups::find($id);
        return view('group.show', compact('group'));
    }


    public function edit($id)
    {
        $group = Groups::find($id);
        return view('group.edit', compact('group'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $group = Groups::find($id);
        $group->name = $request->name;
        $group->description = $request->description;
        $group->save();

        return redirect()->route('group.index')->with('success', 'Group updated successfully.');
    }


    public function destroy($id)
    {
        $group = Groups::find($id);
        $group->delete();

        return redirect()->route('group.index')->with('success', 'Group deleted successfully.');
    }



}
