<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Organizations extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'contact', 'url', 'email'];

    public function projects()
    {
        return $this->belongsTo('App\Projects', 'organizations_id', 'id');
    }
}
