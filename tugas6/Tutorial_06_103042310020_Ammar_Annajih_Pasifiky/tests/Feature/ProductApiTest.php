<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\Variant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_product_api_returns_json_with_variants(): void
    {
        $product = Product::create([
            'name' => 'Laptop ASUS',
            'price' => 12000000,
            'description' => 'Laptop untuk kebutuhan kuliah dan kerja.',
        ]);

        Variant::create([
            'product_id' => $product->id,
            'name' => 'RAM 16 GB',
            'additional_price' => 1500000,
        ]);

        $response = $this->getJson('/api/product');

        $response->assertOk()
            ->assertJsonFragment([
                'name' => 'Laptop ASUS',
                'price' => 12000000,
            ])
            ->assertJsonFragment([
                'name' => 'RAM 16 GB',
                'additional_price' => 1500000,
            ]);
    }
}
