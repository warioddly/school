<?php

namespace App\Http\Controllers;

use App\Http\Requests\Attention\CreateRequest;
use App\Models\Attentions;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class AttentionController extends Controller
{

    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {

        $attentions = Attentions::latest()->get();

        return view('attentions.index', compact('attentions'));
    }


    public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('attentions.create');
    }


    public function store(CreateRequest $request)
    {

        Attentions::create($request->validated());
    
        return redirect()->route('attentions')->with('success', 'Attention created successfully.');
    }

    public function show($id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {

        $attention = Attentions::findOrFail($id);

        return view('attentions.show', compact('attention'));
    }


    public function edit($id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $attention = Attentions::findOrFail($id);

        return view('attentions.edit', compact('attention'));
    }



    public function update(CreateRequest $request, $id)
    {
        $attention = Attentions::findOrFail($id);
        $attention->update($request->validated());

        return redirect()->route('attentions')->with('success', 'Attention updated successfully.');
    }


    
    public function destroy($id)
    {
        $attention = Attentions::findOrFail($id);
        $attention->delete();

        return redirect()->route('attentions')->with('success', 'Attention deleted successfully.');
    }



}
