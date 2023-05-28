<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{


    public function index(): Renderable
    {
        $groups = Groups::all();
        return view('schedule.index', compact('groups'));
    }


    public function show($id): Renderable
    {
        $group = Groups::query()->findOrFail($id);
        $groups = Groups::all();
        return view('schedule.index', compact('group', 'groups'));
    }


    public function update(Request $request, $id): RedirectResponse
    {

        $data = $request->validate(['schedule' => 'required']);

        Groups::query()->whereId($id)->update($data);

        return redirect()->back()->with('success', 'Schedule successfully updated');
    }

}
