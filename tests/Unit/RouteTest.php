<?php

namespace Tests\Unit;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_register()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
    public function test_index()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_detail()
    {
        $response = $this->get('/detail/{id}');
        $response->assertStatus(500);
    }
    public function test_search()
    {
        $response = $this->get('search');
        $response->assertStatus(200);
    }
    public function test_addToCart()
    {
        $response = $this->get('add_to_cart');
        $response->assertStatus(405);
    }
    public function test_cartList()
    {
        $response = $this->get('cartlist');
        $response->assertStatus(500);
    }
    public function test_removeCart()
    {
        $response = $this->get('removecart/{id}');
        $response->assertStatus(302);
    }
    public function test_orderNow()
    {
        $response = $this->get('ordernow');
        $response->assertStatus(500);
    }
    public function test_orderPlace()
    {
        $response = $this->get('orderplace');
        $response->assertStatus(405);
    }
    public function test_myOrders()
    {
        $response = $this->get('myorders');
        $response->assertStatus(500);
    }
}