<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reports extends Model
{
    use SoftDeletes;
    protected $fillable = ['path', 'organizations_id', 'projects_id', 'date_begin', 'date_finish'];

    public function project()
    {
        return $this->belongsTo('App\Projects', 'projects_id', 'id')
            ->with(['organization']);
    }

    public function issues()
    {
        return $this->hasMany('App\Issues', 'report_id', 'id')
            ->with(['issue_features','get_tag']);
    }

    public function series()
    {
        return $this->hasMany('App\Issues', 'report_id', 'id')
            ->with(['issue_features']);
    }

    public function get_issue_tag()
    {
        return $this->hasMany('App\Tags', 'id', 'tag_id');
    }
}
