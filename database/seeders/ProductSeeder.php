<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

Class ProductSeeder extends Seeder
{
	public function run(): void
	{
		Product::create([
			'img' => '/products/men/adidas-men.png',
            'brand' => 'Adidas',
            'title' => 'Adidas shoe for men',
            'rating' => 4.6,
            'reviews' => 189,
            'sellPrice' => 5999.00,
            'orders' => '690',
            'mrp' => '7999.00',
            'discount' => 31,
            'category' => 'men'
		]);
		
		Product::create([
			'img' => '/products/women/puma-women.png',
            'brand' => 'Puma',
            'title' => 'Puma shoe for men',
            'rating' => 5,
            'reviews' => 290,
            'sellPrice' => 6999.00,
            'orders' => '890',
            'mrp' => '8999.00',
            'discount' => 32,
            'category' => 'women'
		]);
	}
}