<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    //==========ここから追加==========
    protected $fillable = [
        'zaico_number',
        'zaico_name',
        'zaico_image',
        'zaico_count',
        'content',
        'category',
        'zaico_storage',
    ];
    //==========ここまで追加==========

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}