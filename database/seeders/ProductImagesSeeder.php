<?php

namespace Database\Seeders;

use App\Models\ProductImages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductImages::create([
            'image' => '/fake/products/jewellery-3.jpg',
            "product" =>1
        ]);

        ProductImages::create([
            'image' => '/fake/products/clothes-2.jpg',
            "product" =>2
        ]);
        
        ProductImages::create([
            'image' => '/fake/products/shirt-1.jpg',
            "product" =>3
        ]);
        ProductImages::create([
            'image' => '/fake/products/shirt-2.jpg',
            "product" =>3
        ]);

        ProductImages::create([
            'image' => '/fake/products/shorts-1.jpg',
            "product" =>4
        ]);
        ProductImages::create([
            'image' => '/fake/products/shorts-2.jpg',
            "product" =>4
        ]);

        ProductImages::create([
            'image' => '/fake/products/jewellery-3.jpg',
            "product" =>5
        ]);
        ProductImages::create([
            'image' => '/fake/products/jewellery-3.jpg',
            "product" =>1
        ]);
    }
}
