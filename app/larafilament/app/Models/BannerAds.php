<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerAds extends Model
{
    protected $fillable = [
        'link',
        'is_active',
        'type',
        'thumbnail',
    ];

    public function getIsActiveAttribute($value)
    {
        return $value === 'inactive';
    }

    public function setIsActiveAttribute($value)
    {
        $this->attributes['is_active'] = $value ? 'active' : 'inactive';
    }
}
