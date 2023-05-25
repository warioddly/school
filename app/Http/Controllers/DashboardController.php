<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class DashboardController extends Controller
{


    public function index(): Renderable
    {
        return view('home.index');
    }

}
