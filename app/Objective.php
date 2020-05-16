<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    protected $guarded = [];
    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function scopeLastObjectives($query, $count)
    {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
