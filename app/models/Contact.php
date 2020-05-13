<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'email','subject','message'];

    public function tasks()
    {
        return $this->belongsToMany('App\models\Task', 'contact_task', 'contact_id', 'task_id');
    }




}
