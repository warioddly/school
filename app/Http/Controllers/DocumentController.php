<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documents;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    
    public function index()
    {
        return view('document.index');
    }

    public function create()
    {
        return view('document.create');
    }


    public function store(Request $request)
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
