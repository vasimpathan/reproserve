<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    protected $fillable = [
        'name', 'slug', 'content', 'status'
    ];

    // Automatic slug generate from name
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($page) {
            $page->slug = Str::slug($page->name);
        });

        static::updating(function ($page) {
            $page->slug = Str::slug($page->name);
        });
    }
}
