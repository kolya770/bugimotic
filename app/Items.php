<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'category',
        'title-meta',
        'description-meta',
        'keywords-meta'
    ];

    public function images()
    {
        return $this->hasMany('App\Models\Images', 'items_id');
    }
}
