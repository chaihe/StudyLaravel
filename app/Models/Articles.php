<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Articles extends \Eloquent
{
    //
    protected $fillable = ['title','content','published_at'];

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at']=Carbon::createFromFormat('Y-m-d',$date);
    }
}
