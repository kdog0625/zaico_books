<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $fillable = [
        'zaico_number',
        'zaico_name',
        'zaico_image'=> 'image|file',
        'zaico_count',
        'content',
        'category',
        'zaico_storage',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
