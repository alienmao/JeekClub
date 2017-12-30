<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /*
     * Controller for Dp Course
     */
    public function list()
    {
        return view('dp/course/list',['course' => Course::all()]);
    }
    public function get_by_id($id)
    {
        return view('dp/course/detail',['course' => Course::findOrFail($id)]);
    }
    public function list_by_language($language)
    {
        return view('dp/course/list',['course' => Course::where('language',$language)]);
    }
    public function list_by_teacher($teacher)
    {
        return view('dp/course/list',['course' => Course::where('teacher',$teacher)]);
    }
}
