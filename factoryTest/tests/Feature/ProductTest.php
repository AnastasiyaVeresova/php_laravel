<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_index()
    {
        $response = $this->get('/products');
        $response->assertStatus(200);
    }

    public function test_show()
    {
        $product = Product::factory()->create();
        $response = $this->get('/products/' . $product->id);
        $response->assertStatus(200);
    }

    public function test_store()
    {
        $response = $this->post('/products', [
            'sku' => '12345',
            'name' => 'Product Name',
            'price' => 99.99,
        ]);
        $response->assertStatus(201);
    }

    public function test_update()
    {
        $product = Product::factory()->create();
        $response = $this->put('/products/' . $product->id, [
            'name' => 'New Product Name',
            'price' => 123.45,
        ]);
        $response->assertStatus(200);
    }

    public function test_destroy()
    {
        $product = Product::factory()->create();
        $response = $this->delete('/products/' . $product->id);
        $response->assertStatus(204);
    }
}
