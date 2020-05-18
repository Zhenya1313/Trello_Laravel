<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use phpDocumentor\Reflection\Types\Self_;

/**
 * @property int|null user_id
 */
class Project extends Model
{
    protected $guarded = [];

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function objectives()
    {
        return $this->belongsToMany('App\Objective');
    }

    public function scopeLastProjects($query, $count)
    {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
