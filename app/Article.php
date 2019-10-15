<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['id', 'title', 'article'];

    protected $hidden = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
