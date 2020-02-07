<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reports extends Model
{
    use SoftDeletes;
    protected $fillable = ['path', 'organizations_id', 'projects_id','date_begin','date_finish'];

    public function project()
    {
        return $this->belongsTo('App\Projects', 'projects_id', 'id')
            ->with(['organization'])->withTrashed();
    }

    public function issues()
    {
        return $this->hasMany('App\Issues', 'projects_id', 'projects_id')
            ->with(['issue_features'])->withTrashed();
    }
}
