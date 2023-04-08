<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class ScheduleController extends Controller
{

    public function index(): Renderable
    {
        return view('schedule.index');
    }

    public function create(): Renderable
    {
        return view('schedule.create');
    }

}
