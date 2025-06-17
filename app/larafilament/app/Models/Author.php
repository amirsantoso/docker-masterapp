<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'username',
        'occupation',
        'avatar',
        'slug',
        'bio',
    ];
    public function newsArticles()
    {
        return $this->hasMany(NewsArticle::class, 'author_id');
    }
}
