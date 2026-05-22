<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Ceylon Cinnamon Sticks',
                'slug' => 'ceylon-cinnamon-sticks',
                'description' => 'Premium Grade-A Ceylon Cinnamon (Cinnamomum verum) harvested from the highlands of Kandy. Known for its delicate, sweet flavor and thin bark layers. Perfect for gourmet cooking and baking.',
                'image_path' => 'assets/spices/imag/spices1.jpg',
                'category' => 'Whole Spices',
                'unit' => 'Kg',
                'price' => null,
                'stock_status' => 'In Stock',
                'featured' => true,
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Black Pepper Whole',
                'slug' => 'black-pepper-whole',
                'description' => 'Premium whole black peppercorns from Sri Lankan estates. Bold, pungent flavor with citrus notes. Ideal for grinding fresh or adding to marinades and stocks.',
                'image_path' => 'assets/spices/imag/spices2.jpg',
                'category' => 'Whole Spices',
                'unit' => 'Kg',
                'price' => null,
                'stock_status' => 'In Stock',
                'featured' => true,
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Green Cardamom Pods',
                'slug' => 'green-cardamom-pods',
                'description' => 'Aromatic green cardamom pods with intense, sweet-spicy flavor. Hand-picked and sun-dried. Essential for chai, desserts, and rice dishes.',
                'image_path' => 'assets/spices/imag/spices3.jpg',
                'category' => 'Whole Spices',
                'unit' => 'Kg',
                'price' => null,
                'stock_status' => 'In Stock',
                'featured' => true,
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Whole Cloves',
                'slug' => 'whole-cloves',
                'description' => 'Premium dried flower buds with warm, sweet, and aromatic flavor. Perfect for baking, mulled beverages, and savory dishes.',
                'image_path' => 'assets/spices/imag/spices4.jpg',
                'category' => 'Whole Spices',
                'unit' => 'Kg',
                'price' => null,
                'stock_status' => 'In Stock',
                'featured' => false,
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Turmeric Powder',
                'slug' => 'turmeric-powder',
                'description' => 'Vibrant golden turmeric powder with earthy, slightly bitter taste. Rich in curcumin. Essential for curries and golden milk.',
                'image_path' => 'assets/spices/imag/spices5.jpg',
                'category' => 'Ground Spices',
                'unit' => 'Kg',
                'price' => null,
                'stock_status' => 'In Stock',
                'featured' => true,
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Cinnamon Powder',
                'slug' => 'cinnamon-powder',
                'description' => 'Finely ground Ceylon cinnamon with sweet, delicate flavor. Perfect for baking, smoothies, and desserts.',
                'image_path' => 'assets/spices/imag/spices6.jpg',
                'category' => 'Ground Spices',
                'unit' => 'Kg',
                'price' => null,
                'stock_status' => 'In Stock',
                'featured' => false,
                'sort_order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'Curry Powder - Mild',
                'slug' => 'curry-powder-mild',
                'description' => 'Authentic Sri Lankan curry powder blend with mild heat. Contains coriander, cumin, fennel, and fenugreek. Perfect for traditional curries.',
                'image_path' => 'assets/spices/imag/spices7.jpg',
                'category' => 'Spice Blends',
                'unit' => 'Kg',
                'price' => null,
                'stock_status' => 'In Stock',
                'featured' => false,
                'sort_order' => 7,
                'is_active' => true,
            ],
            [
                'name' => 'Curry Powder - Hot',
                'slug' => 'curry-powder-hot',
                'description' => 'Fiery Sri Lankan curry powder with extra chili. Bold, complex flavor for authentic spicy curries.',
                'image_path' => 'assets/spices/imag/spices8.jpg',
                'category' => 'Spice Blends',
                'unit' => 'Kg',
                'price' => null,
                'stock_status' => 'In Stock',
                'featured' => false,
                'sort_order' => 8,
                'is_active' => true,
            ],
            [
                'name' => 'Nutmeg Whole',
                'slug' => 'nutmeg-whole',
                'description' => 'Whole nutmeg seeds with warm, nutty, slightly sweet flavor. Grate fresh for maximum aroma in baking and savory dishes.',
                'image_path' => 'assets/spices/imag/chilli.jpg',
                'category' => 'Whole Spices',
                'unit' => 'Kg',
                'price' => null,
                'stock_status' => 'In Stock',
                'featured' => false,
                'sort_order' => 9,
                'is_active' => true,
            ],
            [
                'name' => 'Red Chilli Powder',
                'slug' => 'red-chilli-powder',
                'description' => 'Vibrant red chilli powder with medium heat. Adds color and spice to any dish. Perfect for curries, marinades, and rubs.',
                'image_path' => 'assets/spices/imag/spices.jpg',
                'category' => 'Ground Spices',
                'unit' => 'Kg',
                'price' => null,
                'stock_status' => 'In Stock',
                'featured' => true,
                'sort_order' => 10,
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
