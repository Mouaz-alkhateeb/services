<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    protected $guarded = [];

    public function section()
    {
    return $this->belongsTo('App\sections');
    }
}
