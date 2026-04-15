<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use App\Models\Variant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Tutorial06AccessTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_is_redirected_when_accessing_protected_routes(): void
    {
        $this->get('/dashboard')->assertRedirect('/login');
        $this->get('/products')->assertRedirect('/login');
    }

    public function test_authenticated_user_can_access_dashboard_and_products(): void
    {
        $user = User::factory()->create();
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

        $this->actingAs($user)
            ->get('/dashboard')
            ->assertStatus(200)
            ->assertSee('Selamat datang');

        $this->actingAs($user)
            ->get('/products')
            ->assertStatus(200)
            ->assertSee('Laptop ASUS')
            ->assertSee('RAM 16 GB');
    }

    public function test_user_becomes_guest_after_logout_and_cannot_access_products(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/logout');

        $this->assertGuest();
        $response->assertRedirect('/');
        $this->get('/products')->assertRedirect('/login');
    }
}
