<?php

namespace App\Http\Controllers;

use App\Models\Dp\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * @param $course_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list($course_id)
    {
        return view('dp/lesson/list',['lesson' => Lesson::all()]);
    }

    /**
     * @param $course_id
     * @param $lesson_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function get_by_id($course_id, $lesson_id)
    {
        if {}
        else {}
        return view('dp/lesson/detail',['lesson' => Lesson::]);
    }
    public function check_code($course_id,$lesson_id,$code)
    {

    }
}
