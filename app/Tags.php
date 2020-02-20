<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = [
        'name',
        'color',
        'projects_id',
        'start_at',
        'deadline_at'
    ];

    public function projects()
    {
        return $this->belongsTo('App\Projects', 'projects_id', 'id');
    }

    public function issues()
    {
        $this->hasMany('App\Issues', 'tag_id', 'id');
    }

    public function get_calc($arg)
    {
        $query = Issues::where('tag_id', $arg);
        $data = [
            'start' => $query->orderBy('start', 'ASC')->pluck('start')->first(),
            'end' => $query->orderBy('end', 'DESC')->pluck('end')->last()
        ];

        return $data;
    }

}
