<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'id',
        'post_id',
        'filename',
        'approved'
    ];
    public function post(){
        return $this->belongsTo('App\Post');
    }
}
