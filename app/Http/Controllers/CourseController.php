<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use App\Models\CourseMaterials;

class CourseController extends Controller
{
    public function index(): Renderable
    {

        $materials = CourseMaterials::all();

        return view('courses.materials.index', compact('materials'));
    }


    public function videoMaterials(): Renderable
    {

        $materials = CourseMaterials::all();

        return view('courses.materials.index', compact('materials'));
    }


    public function create(): Renderable
    {
        return view('courses.video.create');
    }

}
