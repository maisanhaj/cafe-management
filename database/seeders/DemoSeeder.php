<?php

namespace Database\Seeders;

use App\Enums\ProductStatus;
use App\Models\Category;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->seedUsers();

        $this->seedProducts();
    }

    private function seedUsers(): void
    {
        $role = Role::where('name', 'cashier')->firstOr(
            fn() => throw new ModelNotFoundException('Unable to define role cashier for demo seeder')
        );

        User::firstOrCreate([
            'email' => 'cashier@domain.com',
        ], [
            'name' => 'Steve Jobs',
            'role_id' => $role->id,
            'password' => bcrypt('password'),
        ]);
    }

    private function seedProducts(): void
    {
        $categories = [
            'Beverages' => [
                'products' => [
                    'Espresso', 'Cappuccino', 'Latte',
                    'Americano', 'Mocha', 'Macchiato',
                    'Iced Coffee', 'Cold Brew', 'Green Tea', 'Black Tea'
                ]
            ],
            'Snacks' => [
                'products' => [
                    'Blueberry Muffin', 'Chocolate Chip Cookie', 'Croissant', 'Granola Bar',
                    'Pretzel', 'Fruit Salad', 'Yogurt Parfait', 'Popcorn', 'Chips', 'Mixed Nuts'
                ]
            ],
            'Desserts' => [
                'products' => [
                    'Chocolate Cake', 'Cheesecake', 'Brownie', 'Ice Cream Sundae', 'Apple Pie', 'Tiramisu',
                    'Panna Cotta',
                    'Lemon Tart', 'Creme Brulee', 'Fruit Tart'
                ]
            ],
            'Others' => [
                'products' => [
                    'Bottled Water', 'Sparkling Water', 'Lemonade', 'Smoothie', 'Hot Chocolate', 'Energy Drink',
                    'Protein Shake', 'Herbal Tea', 'Ginger Ale', 'Milkshake'
                ]
            ]
        ];

        Storage::put(
            '/categories/placeholder.svg',
            File::get(base_path('storage/demo/272x80.svg'))
        );

        Storage::put(
            '/products/placeholder.svg',
            File::get(base_path('storage/demo/308x128.svg'))
        );

        foreach ($categories as $categoryName => $properties) {
            $category = Category::firstOrCreate([
                'name' => $categoryName,
            ], [
                'image_path' => 'categories/placeholder.svg'
            ]);

            if ($category->wasRecentlyCreated) {
                foreach ($properties['products'] as $product) {
                    Product::create([
                        'category_id' => $category->id,
                        'name' => $product,
                        'description' => 'Delicious '.$product.' with premium ingredients.',
                        'price' => rand(100, 10000),
                        'quantity' => rand(1, 100),
                        'status' => ProductStatus::InStock,
                        'image_path' => 'products/placeholder.svg',
                    ]);
                }
            }
        }
    }
}
