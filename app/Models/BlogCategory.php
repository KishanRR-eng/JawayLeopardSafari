<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
    use SoftDeletes;

    protected $table = "blog_categories";

    protected $default = [
        'id',
        'name',
        'isVisible',
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillable = [
        'name',
        'name',
        'isVisible',
    ];

    protected $appends = [];

    public function blogs()
    {
        return $this->hasManyThrough(Blog::class, BlogCategoryMap::class, null, 'id', null, 'blog_id');
    }
}