<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'blog_title', 'blog_author', 'body',
    ];
    protected $casts = [
        'blog_date_published' => 'datetime',
    ];

    public function blog_author(){
        return $this->belongsTo('App\User');
    }
}
