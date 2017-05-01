<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = ['name','overview','language',];
    public $timestamps = false;

    public function chapter()
    {
        return $this->hasMany('App\Chapter');
    }
}
