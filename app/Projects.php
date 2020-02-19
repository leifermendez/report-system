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
        return $this->hasMany('App\Issues', 'projects_id', 'id')
            ->with(['get_tag'])
            ->orderBy('issues.id', 'ASC')
            ->select('*',
                DB::raw('count(*) as total_issues'),
                DB::raw('MAX(issues.end) as end')
            )
            ->groupBy(['issues.tag_id']);
    }
}
