<?php

namespace App\Http\Controllers;

use App\Models\Dp\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /*
     * Controller for Dp Course
     */
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list()
    {
        return view('dp/course/list',['course' => Course::all()]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function get_by_id($id)
    {
        return view('dp/course/detail',['course' => Course::findOrFail($id)]);
    }

    /**
     * @param $language
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list_by_language($language)
    {
        return view('dp/course/list',['course' => Course::where('language',$language)]);
    }

    /**
     * @param $teacher
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list_by_teacher($teacher)
    {
        return view('dp/course/list',['course' => Course::where('teacher',$teacher)]);
    }
}
