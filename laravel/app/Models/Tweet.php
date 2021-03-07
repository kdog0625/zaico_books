<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
