<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Projects extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'organizations_id', 'url', 'description'];

    public function organization()
    {
        return $this->belongsTo('App\Organizations', 'organizations_id', 'id')->withTrashed();
    }

    public function series()
    {
        return $this->hasMany('App\Tags', 'projects_id', 'id');
    }
}
