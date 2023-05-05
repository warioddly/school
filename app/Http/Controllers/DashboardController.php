<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class DashboardController extends Controller
{


    public function index(): Renderable
    {
        return view('home.index');
    }


    public function analytics(): Renderable
    {
        return view('home.analytics');
    }


    public function projects(): Renderable
    {
        return view('home.projects');
    }


}
