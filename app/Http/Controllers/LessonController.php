<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function list($course_id)
    {
        return view('dp/lesson/list',['lesson' => Lesson::all()]);
    }
    public function get_by_id($course_id,$lesson_id)
    {
        return view('dp/lesson/detail',['lesson' => Lesson::]);
    }
}
