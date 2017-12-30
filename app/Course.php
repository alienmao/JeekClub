<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /*
     * Course Model
     */
    protected $table = 'dp_course';
    protected $fillable = [
        'teacher', 'language', 'title','lesson_nums'
    ];
}