<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class UserController extends Controller
{




    public function index(): Renderable
    {
        return view('users.index');
    }


    public function profile(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('profile.index')->with('user', auth()->user());
    }


}
