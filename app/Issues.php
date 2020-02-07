<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Issues extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'hours', 'users_id', 'projects_id', 'observations'];

    public function issue_features()
    {
        return $this->hasMany('App\IssuesHasFeatures','issue_id','id')->with(['detail']);
    }
}
