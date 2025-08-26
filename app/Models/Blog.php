<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

    protected $table = "blogs";

    protected $default = [
        'id',
        'title',
        'slug',
        'primary_media_path',
        'header_image_path',
        'content',
        'created_by',
        'meta_title',
        'meta_url',
        'meta_description',
        'meta_keywords',
        'isVisible',
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillable = [
        'title',
        'slug',
        'primary_media_path',
        'header_image_path',
        'content',
        'created_by',
        'meta_title',
        'meta_url',
        'meta_description',
        'meta_keywords',
        'isVisible',
    ];

    protected $appends = [];

    public static $imagePath = 'uploads/blog/header-image';

    public static $mediaPath = 'uploads/blog/media';

    public function categories()
    {
        return $this->hasManyThrough(BlogCategory::class, BlogCategoryMap::class, null, 'id', null, 'blog_category_id');
    }

    public function categoryMap()
    {
        return $this->hasMany(BlogCategoryMap::class);
    }
}