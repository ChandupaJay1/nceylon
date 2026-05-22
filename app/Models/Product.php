<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image_path',
        'category',
        'unit',
        'price',
        'stock_status',
        'featured',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'featured' => 'boolean',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
    ];

    // Auto-generate slug from name
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->name);
            }
        });

        static::updating(function ($product) {
            if ($product->isDirty('name') && empty($product->slug)) {
                $product->slug = Str::slug($product->name);
            }
        });
    }

    // Scope for active products
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope for featured products
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    // Scope for category filter
    public function scopeCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    // Get image URL
    public function getImageUrlAttribute()
    {
        return $this->image_path ? asset($this->image_path) : asset('assets/spices/imag/spices.jpg');
    }
}
