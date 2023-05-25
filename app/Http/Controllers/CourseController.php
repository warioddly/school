<?php

namespace App\Http\Controllers;

use App\Http\Requests\Courses\CourseStoreRequest;
use Illuminate\Contracts\Support\Renderable;
use App\Models\CourseMaterials;
use App\Models\Tags;
use Illuminate\Http\Request;


class CourseController extends Controller
{

    public function index(): Renderable
    {
        $materials = CourseMaterials::latest()->paginate(20);
        $search = '';

        return view('courses.index', compact('materials', 'search'));
    }


    public function create(): Renderable
    {
        $tags = Tags::all();
        return view('courses.create', compact('tags'));
    }


    public function store(CourseStoreRequest $request)
    {
        $course = CourseMaterials::create([ ...$request->validated(), 'author_id' => auth()->id() ]);
        return redirect()->route('courses')->with('success', 'Course created successfully.');
    }


    public function show($id): Renderable
    {
        $course = CourseMaterials::findOrFail($id);
        $course->increment('views');
        return view('courses.show', compact('course'));
    }


    public function edit($id): Renderable
    {
        $course = CourseMaterials::findOrFail($id);
        $tags = Tags::all();
        return view('courses.edit', compact('course', 'tags'));
    }


    public function update(CourseStoreRequest $request, $id)
    {
        $course = CourseMaterials::findOrFail($id);
        $course->update([ ...$request->validated(), 'author_id' => auth()->id() ]);
        return redirect()->route('courses')->with('success', 'Course updated successfully.');
    }


    public function destroy($id)
    {
        $course = CourseMaterials::findOrFail($id);
        $course->delete();
        return redirect()->route('courses')->with('success', 'Course deleted successfully.');
    }


    public function search(Request $request)
    {
        $search = $request->get('search');
        $materials = CourseMaterials::where('title', 'like', '%' . $search . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(20);
        return view('courses.index', compact('materials', 'search'));
    }

}
