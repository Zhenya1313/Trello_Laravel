<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['task','details','date','published','path'];

    public function contacts()
    {
        return $this->belongsToMany('App\models\Contact', 'contact_task', 'task_id', 'contact_id');
    }
}

