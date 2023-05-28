<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Documents;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{

    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('document.index');
    }

    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('document.create');
    }


    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'title' => 'nullable',
            'files.*' => 'required',
            'type' => 'required',
            'size' => 'required',
            'extension' => 'required',
        ]);

        $documents = [];

        foreach ($request->file('files') as $file) {
            $document = new Documents();
            $document->title = $request->title;
            $document->file_name = $file->getClientOriginalName();
            $document->type = $request->type;
            $document->size = $request->size;
            $document->extension = $request->extension;

            $path = $file->store('documents');

            $document->path = $path;
            $document->save();

            $documents[] = $document;
        }

        return redirect()->route('document.index')->with('success', 'Document created successfully.');
    }



}
