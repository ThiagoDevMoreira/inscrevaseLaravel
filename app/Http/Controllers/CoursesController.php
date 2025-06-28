<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->paginate(10);
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        Course::create($request->only('title', 'description'));
        return redirect()->route('courses.index')->with('sucess', 'Curso criado com sucesso.');
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compat('courses'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);
        $course->update($request->only('title','description'));
        return redirect()->route('courses.index')->with('sucess', 'Curso atualizado com sucesso.');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('sucess', 'Curso excluído com sucesso.');
    }
}
