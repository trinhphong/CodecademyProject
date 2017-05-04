<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    protected $table = 'instructions';
    protected $fillable = ['content_ins','solution_HTML','solution_CSS','task_id',];
    public $timestamps = false;

    public function task()
    {
        return $this->belongsTo('App\Task');
    }
}
