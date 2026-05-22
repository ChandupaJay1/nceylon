<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\StockStatus;
use App\Models\Unit;
use Illuminate\Database\Seeder;

class LookupSeeder extends Seeder
{
    public function run(): void
    {
        // Categories
        $categories = [
            ['name' => 'Whole Spices',    'sort_order' => 1],
            ['name' => 'Ground Spices',   'sort_order' => 2],
            ['name' => 'Spice Blends',    'sort_order' => 3],
            ['name' => 'Specialty Items', 'sort_order' => 4],
        ];
        foreach ($categories as $cat) {
            Category::updateOrCreate(['name' => $cat['name']], array_merge($cat, ['is_active' => true]));
        }

        // Units
        $units = [
            ['name' => 'Kg',  'sort_order' => 1],
            ['name' => 'g',   'sort_order' => 2],
            ['name' => 'lb',  'sort_order' => 3],
            ['name' => 'oz',  'sort_order' => 4],
            ['name' => 'MT',  'sort_order' => 5],
        ];
        foreach ($units as $unit) {
            Unit::updateOrCreate(['name' => $unit['name']], array_merge($unit, ['is_active' => true]));
        }

        // Stock Statuses
        $statuses = [
            ['name' => 'In Stock',     'color' => 'green',  'sort_order' => 1],
            ['name' => 'Out of Stock', 'color' => 'red',    'sort_order' => 2],
            ['name' => 'Pre-Order',    'color' => 'yellow', 'sort_order' => 3],
        ];
        foreach ($statuses as $status) {
            StockStatus::updateOrCreate(['name' => $status['name']], array_merge($status, ['is_active' => true]));
        }
    }
}
