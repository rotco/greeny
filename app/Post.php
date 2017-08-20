<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'subcategory_id','manufacturer_id', 'model_id', 'condition_id','price', 'title','description','status'
    ];
}
