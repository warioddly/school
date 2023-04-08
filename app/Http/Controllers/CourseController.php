<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class CourseController extends Controller
{
    public function index(): Renderable
    {
        return view('courses.index');
    }


    public function create(): Renderable
    {
        return view('courses.create');
    }

}
