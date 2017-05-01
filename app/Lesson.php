<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lessons';
    protected $fillable = ['name','chapter_id',];
    public $timestamps = false;

    public function course() {
        return $this->belongsTo('App\Chapter');
    }

    public function task() {
        return $this->hasMany('App\Task');
    }
}
