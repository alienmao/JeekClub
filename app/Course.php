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
    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }
    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }
}
