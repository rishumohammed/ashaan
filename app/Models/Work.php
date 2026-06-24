<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['category_id', 'title', 'description', 'image_path', 'project_no', 'sort_order', 'is_featured'];

    protected $casts = [
        'is_featured' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getImageUrlAttribute()
    {
        if (str_starts_with($this->image_path, 'assets/')) {
            return asset($this->image_path);
        }
        return \Illuminate\Support\Facades\Storage::disk('public')->url($this->image_path);
    }
}
