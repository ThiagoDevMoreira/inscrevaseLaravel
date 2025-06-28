<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyCoursesController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $courses = $user->courses()->withPivot('progress', 'subscribed_at')->get();
        return view('my-courses.index', compact('courses'));
    }
}
