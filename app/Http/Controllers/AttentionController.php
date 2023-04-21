<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class AttentionController extends Controller
{

    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('attentions.index');
    }


    public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('attentions.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('attentions.show');
    }


}
