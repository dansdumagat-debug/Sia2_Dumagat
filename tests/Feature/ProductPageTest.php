<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_products_page_displays_product_data(): void
    {
        Product::create([
            'name' => 'Sample Product 1',
            'quantity' => 10,
            'price' => 99.99,
        ]);

        Product::create([
            'name' => 'Sample Product 2',
            'quantity' => 5,
            'price' => 149.50,
        ]);

        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertSee('Product List');
        $response->assertSee('Sample Product 1');
        $response->assertSee('Quantity: 10');
        $response->assertSee('₱99.99');
        $response->assertSee('Sample Product 2');
        $response->assertSee('Quantity: 5');
        $response->assertSee('₱149.50');
    }

    public function test_products_page_displays_empty_message(): void
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertSee('No products available.');
    }
}
