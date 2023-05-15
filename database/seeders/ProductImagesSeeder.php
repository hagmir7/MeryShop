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
            'image' => '/fake/products/ANKER.jfif',
            "product" =>5
        ]);


        ProductImages::create([
            'image' => '/fake/products/watch-2.jpg',
            "product" =>6
        ]);
        ProductImages::create([
            'image' => '/fake/products/watch-1.jpg',
            "product" =>6
        ]);

        ProductImages::create([
            'image' => '/fake/products/phone.jfif',
            "product" =>7
        ]);

        ProductImages::create([
            'image' => '/fake/products/cheze.jpeg',
            "product" =>8
        ]);

        ProductImages::create([
            'image' => '/fake/products/charge.jpg',
            "product" =>9
        ]);

        ProductImages::create([
            'image' => '/fake/products/jardin.jpg',
            "product" =>10
        ]);

        ProductImages::create([
            'image' => '/fake/products/Home.png',
            "product" =>11
        ]);

        ProductImages::create([
            'image' => '/fake/products/perfume.jpg',
            "product" =>12
        ]);

        ProductImages::create([
            'image' => '/fake/products/champo.jpg',
            "product" =>13
        ]);

        ProductImages::create([
            'image' => '/fake/products/BestMasque.jpg',
            "product" =>14
        ]);

        ProductImages::create([
            'image' => '/fake/products/30kg.jfif',
            "product" =>15
        ]);

        ProductImages::create([
            'image' => '/fake/products/sports-5.jpg',
            "product" =>16
        ]);
        ProductImages::create([
            'image' => '/fake/products/sports-1.jpg',
            "product" =>16
        ]);

        ProductImages::create([
            'image' => '/fake/products/raquette.jfif',
            "product" =>17
        ]);

    }
}
