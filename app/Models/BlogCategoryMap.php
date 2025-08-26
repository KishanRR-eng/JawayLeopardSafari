<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategoryMap extends Model
{
    protected $table = "blog_category_maps";

    protected $default = [
        'id',
        'blog_id',
        'blog_category_id',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = [
        'blog_id',
        'blog_category_id',
    ];

    protected $appends = [];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}