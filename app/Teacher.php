<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'dp_teacher';
    protected $fillable = [
        'name'
    ];
    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
