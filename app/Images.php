<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';

    protected $fillable = [
        'image',
        'items_id'
    ];

    public $timestamps = false;

    public function item()
    {
        return $this->belongsTo('App\Models\Items', 'items_id');
    }
}
