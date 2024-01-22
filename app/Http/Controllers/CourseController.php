<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses= Course::with('subjects')->get();
        return view('index',compact('courses'));
    }
}
