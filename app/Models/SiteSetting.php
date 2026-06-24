<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = ['key', 'value', 'type'];

    public function getImageUrlAttribute()
    {
        if ($this->type !== 'image') {
            return null;
        }
        if (str_starts_with($this->value, 'assets/')) {
            return asset($this->value);
        }
        return \Illuminate\Support\Facades\Storage::disk('public')->url($this->value);
    }
}
