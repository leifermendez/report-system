<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Issues extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'hours', 'users_id', 'projects_id', 'observations',
        'tag_id', 'start', 'end', 'report_id'];

    public function issue_features()
    {
        return $this->hasMany('App\IssuesHasFeatures', 'issue_id', 'id')->with(['detail']);
    }

    public function get_tag()
    {
        return $this->hasOne('App\Tags', 'id', 'tag_id');
    }
}
