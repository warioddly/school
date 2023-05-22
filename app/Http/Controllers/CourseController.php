<?php

namespace App\Http\Controllers;

use App\Http\Requests\Courses\CourseStoreRequest;
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


    public function store(CourseStoreRequest $request)
    {
        $course = CourseMaterials::create($request->validated());
        return redirect()->route('courses.materials');
    }


    public function show($id): Renderable
    {
        $course = CourseMaterials::findOrFail($id);
        return view('courses.materials.show', compact('course'));
    }

}
