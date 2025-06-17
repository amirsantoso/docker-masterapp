<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\NewsArticle;

class NewsCategory extends Model
{
    protected $fillable = [
        'title',
        'name',
        'slug',
        'icon',
    ];
    public function newsArticles()
    {
        return $this->hasMany(NewsArticle::class, 'category_id');
    }
}
