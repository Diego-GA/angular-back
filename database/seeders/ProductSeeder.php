<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Producto 1',
                'sub_information' => 'Información 1',
                'img_url' => 'https://example.com/image1.jpg',
                'price' => 100.00,
                'stock' => 10,
                'amount' => 1,
            ],
            [
                'name' => 'Producto 2',
                'sub_information' => 'Información 2',
                'img_url' => 'https://example.com/image2.jpg',
                'price' => 200.00,
                'stock' => 5,
                'amount' => 1,
            ],
            [
                'name' => 'Producto 3',
                'sub_information' => 'Información 1',
                'img_url' => 'https://example.com/image1.jpg',
                'price' => 100.00,
                'stock' => 10,
                'amount' => 1,
            ],
            [
                'name' => 'Producto 4',
                'sub_information' => 'Información 2',
                'img_url' => 'https://example.com/image2.jpg',
                'price' => 200.00,
                'stock' => 5,
                'amount' => 1,
            ],
            [
                'name' => 'Producto 5',
                'sub_information' => 'Información 1',
                'img_url' => 'https://example.com/image1.jpg',
                'price' => 100.00,
                'stock' => 10,
                'amount' => 1,
            ],
            [
                'name' => 'Producto 6',
                'sub_information' => 'Información 2',
                'img_url' => 'https://example.com/image2.jpg',
                'price' => 200.00,
                'stock' => 5,
                'amount' => 1,
            ],
            // Agrega más productos aquí
        ]);
    }
}
