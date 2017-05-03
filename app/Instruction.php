<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    protected $table = 'instructions';
    protected $fillable = ['content_ins','solution','tasks_id',];
    public $timestamps = false;

    public function task()
    {
        return $this->belongsTo('App\Task');
    }
}
