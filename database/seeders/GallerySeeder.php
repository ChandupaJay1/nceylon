<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing gallery records
        \App\Models\Gallery::truncate();

        $galleries = [
            [
                'title'       => 'Ceylon Cinnamon Sticks',
                'description' => 'Premium Grade-A Ceylon cinnamon sticks ready for export',
                'image_path'  => 'assets/gallery/1.jpeg',
                'category'    => 'Products',
                'sort_order'  => 1,
                'is_active'   => true,
            ],
            [
                'title'       => 'Black Pepper Processing',
                'description' => 'Our state-of-the-art black pepper processing facility',
                'image_path'  => 'assets/gallery/2.jpeg',
                'category'    => 'Factory',
                'sort_order'  => 2,
                'is_active'   => true,
            ],
            [
                'title'       => 'Quality Control Lab',
                'description' => 'Testing moisture content and volatile oil levels',
                'image_path'  => 'assets/gallery/3.jpeg',
                'category'    => 'Factory',
                'sort_order'  => 3,
                'is_active'   => true,
            ],
            [
                'title'       => 'Cardamom Collection',
                'description' => 'Fresh green cardamom pods from Sri Lankan highlands',
                'image_path'  => 'assets/gallery/4.jpeg',
                'category'    => 'Products',
                'sort_order'  => 4,
                'is_active'   => true,
            ],
            [
                'title'       => 'Export Packaging',
                'description' => 'Professional packaging for international shipping',
                'image_path'  => 'assets/gallery/5.jpeg',
                'category'    => 'Packaging',
                'sort_order'  => 5,
                'is_active'   => true,
            ],
            [
                'title'       => 'Spice Blends',
                'description' => 'Custom curry powder blends for wholesale clients',
                'image_path'  => 'assets/gallery/6.jpeg',
                'category'    => 'Products',
                'sort_order'  => 6,
                'is_active'   => true,
            ],
            [
                'title'       => 'Red Chilli Powder',
                'description' => 'Vibrant red chilli powder with perfect heat levels',
                'image_path'  => 'assets/gallery/7.jpeg',
                'category'    => 'Products',
                'sort_order'  => 7,
                'is_active'   => true,
            ],
            [
                'title'       => 'Quality Certifications',
                'description' => 'ISO and organic certifications for export compliance',
                'image_path'  => 'assets/gallery/8.jpeg',
                'category'    => 'Certifications',
                'sort_order'  => 8,
                'is_active'   => true,
            ],
            [
                'title'       => 'Spice Warehouse',
                'description' => 'Climate-controlled storage facility for optimal freshness',
                'image_path'  => 'assets/gallery/9.jpeg',
                'category'    => 'Factory',
                'sort_order'  => 9,
                'is_active'   => true,
            ],
            [
                'title'       => 'Mixed Spices Display',
                'description' => 'A colorful array of our premium Ceylon spices',
                'image_path'  => 'assets/gallery/10.jpeg',
                'category'    => 'General',
                'sort_order'  => 10,
                'is_active'   => true,
            ],
            [
                'title'       => 'Farm to Export',
                'description' => 'The journey of our spices from highland farms to global markets',
                'image_path'  => 'assets/gallery/11.jpeg',
                'category'    => 'General',
                'sort_order'  => 11,
                'is_active'   => true,
            ],
            [
                'title'       => 'Spice Harvest',
                'description' => 'Hand-picked spices from our partner farms in Kandy & Matale',
                'image_path'  => 'assets/gallery/12.jpeg',
                'category'    => 'General',
                'sort_order'  => 12,
                'is_active'   => true,
            ],
            [
                'title'       => 'Premium Collection',
                'description' => 'Our full range of export-grade Ceylon spices',
                'image_path'  => 'assets/gallery/13.jpeg',
                'category'    => 'Products',
                'sort_order'  => 13,
                'is_active'   => true,
            ],
        ];

        foreach ($galleries as $gallery) {
            \App\Models\Gallery::create($gallery);
        }
    }
}
