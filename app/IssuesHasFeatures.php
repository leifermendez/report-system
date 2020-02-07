<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IssuesHasFeatures extends Model
{
    use SoftDeletes;
    protected $fillable = ['issue_id', 'featured_id', 'hours'];

    public function detail()
    {
        return $this->belongsTo('App\Features', 'featured_id', 'id');
    }
}
