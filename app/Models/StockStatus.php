<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockStatus extends Model
{
    protected $fillable = ['name', 'color', 'sort_order', 'is_active'];

    protected $casts = ['is_active' => 'boolean'];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Tailwind badge classes based on color field
     */
    public function getBadgeClassAttribute(): string
    {
        return match($this->color) {
            'green'  => 'bg-green-100 text-green-700',
            'red'    => 'bg-red-100 text-red-700',
            'yellow' => 'bg-yellow-100 text-yellow-700',
            'blue'   => 'bg-blue-100 text-blue-700',
            default  => 'bg-gray-100 text-gray-700',
        };
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'stock_status', 'name');
    }
}
