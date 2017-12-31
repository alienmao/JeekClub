<?php

namespace App\Models\Dp;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'dp_lesson';
    protected $fillable = [
        'lesson_id','instructions','hint','introductions'
    ];
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
