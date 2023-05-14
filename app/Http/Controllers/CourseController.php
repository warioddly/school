<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use App\Models\CourseMaterials;
use App\Models\Tags;

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
        $tags = Tags::all();
        return view('courses.materials.create', compact('tags'));
    }


}
