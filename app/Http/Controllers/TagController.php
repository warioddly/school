<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tags;
use App\Http\Requests\Tags\TagRequest;

class TagController extends Controller
{
    

    public function index()
    {
        $tags = Tags::all();
        return view('tags.index', compact('tags'));
    }


    public function store(TagRequest $request)
    {
        Tags::create($request->validated());
    
        return redirect()->route('tags')->with('success', 'Tag created successfully');
    }


    public function show($id)
    {
        $tag = Tags::findOrFail($id);
        return view('tags.show', compact('tag'));
    }


    public function update(TagRequest $request, $id)
    {
        
        $tag = Tags::findOrFail($id);
        $tag->update($request->validated());

        return redirect()->route('tags')->with('success', 'Tag updated successfully');
    }


    public function destroy($id)
    {
        
        $tag = Tags::findOrFail($id);
        $tag->delete();

        return redirect()->route('tags')->with('success', 'Tag deleted successfully');
    }
    
}
