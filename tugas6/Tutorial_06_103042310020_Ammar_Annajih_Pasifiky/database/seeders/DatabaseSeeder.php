<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use App\Models\Variant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'email' => 'ammar@example.com',
        ], [
            'name' => 'Ammar Annajih Pasifiky',
            'password' => Hash::make('password'),
        ]);

        $products = [
            [
                'name' => 'Laptop ASUS',
                'price' => 12000000,
                'description' => 'Laptop untuk kebutuhan kuliah dan kerja.',
                'variants' => [
                    ['name' => 'RAM 8 GB', 'additional_price' => 0],
                    ['name' => 'RAM 16 GB', 'additional_price' => 1500000],
                ],
            ],
            [
                'name' => 'Smartphone Samsung',
                'price' => 5000000,
                'description' => 'Smartphone dengan performa menengah.',
                'variants' => [
                    ['name' => 'Storage 128 GB', 'additional_price' => 0],
                    ['name' => 'Storage 256 GB', 'additional_price' => 1000000],
                ],
            ],
        ];

        foreach ($products as $item) {
            $product = Product::updateOrCreate(
                ['name' => $item['name']],
                [
                    'price' => $item['price'],
                    'description' => $item['description'],
                ]
            );

            foreach ($item['variants'] as $variantData) {
                Variant::updateOrCreate(
                    [
                        'product_id' => $product->id,
                        'name' => $variantData['name'],
                    ],
                    [
                        'additional_price' => $variantData['additional_price'],
                    ]
                );
            }
        }
    }
}
