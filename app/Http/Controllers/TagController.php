<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use App\Models\Tags;
use App\Http\Requests\Tags\TagRequest;

class TagController extends Controller
{

    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $tags = Tags::all();
        return view('tags.index', compact('tags'));
    }


    public function store(TagRequest $request): RedirectResponse
    {
        Tags::query()->create($request->validated());

        return redirect()->route('tags')->with('success', 'Tag created successfully');
    }


    public function show($id): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $tag = Tags::query()->findOrFail($id);
        return view('tags.show', compact('tag'));
    }


    public function update(TagRequest $request, $id): RedirectResponse
    {

        $tag = Tags::query()->findOrFail($id);
        $tag->update($request->validated());

        return redirect()->route('tags')->with('success', 'Tag updated successfully');
    }


    public function destroy($id): RedirectResponse
    {

        $tag = Tags::query()->findOrFail($id);
        $tag->delete();

        return redirect()->route('tags')->with('success', 'Tag deleted successfully');
    }

}
