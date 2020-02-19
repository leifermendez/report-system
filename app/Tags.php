<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = [
        'name',
        'color',
        'project_id',
        'start_at',
        'deadline_at'
    ];

    public function projects()
    {
        return $this->belongsTo('App\Projects', 'project_id', 'id');
    }
}
