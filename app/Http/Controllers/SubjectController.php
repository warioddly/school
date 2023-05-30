<?php

namespace App\Http\Controllers;

use App\Http\Requests\Subjects\SubjectRequest;
use App\Models\Subjects;
use App\Models\User;
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


    public function show($id): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $tag = Subjects::query()->findOrFail($id);
        return view('Subjects.show', compact('tag'));
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
