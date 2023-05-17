<?php

namespace Database\Seeders;

use App\Models\ProductColor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductColor::create([
            'product_id' => 1,
            "color_id" =>7
        ]);
        ProductColor::create([
            'product_id' => 1,
            "color_id" =>6
        ]);

        ProductColor::create([
            'product_id' => 2,
            "color_id" =>7
            
        ]);

        ProductColor::create([
            'product_id' => 3,
            "color_id" =>16
        ]);
        ProductColor::create([
            'product_id' => 3,
            "color_id" =>6
        ]);
        ProductColor::create([
            'product_id' => 3,
            "color_id" =>15
        ]);

        ProductColor::create([
            'product_id' => 4,
            "color_id" =>3
        ]);


        ProductColor::create([
            'product_id' => 5,
            "color_id" =>6
        ]);

        
        ProductColor::create([
            'product_id' => 6,
            "color_id" =>12
        ]);
    

        ProductColor::create([
            'product_id' => 7,
            "color_id" =>5
        ]);


        ProductColor::create([
            'product_id' => 8,
            "color_id" =>7
        ]);
        ProductColor::create([
            'product_id' => 8,
            "color_id" =>5
        ]);
        ProductColor::create([
            'product_id' => 8,
            "color_id" =>13
        ]);
        ProductColor::create([
            'product_id' => 8,
            "color_id" =>14
        ]);



        ProductColor::create([
            'product_id' => 9,
            "color_id" =>7
        ]);


        ProductColor::create([
            'product_id' => 10,
            "color_id" =>13
        ]);

        ProductColor::create([
            'product_id' => 11,
            "color_id" =>17
        ]);
        ProductColor::create([
            'product_id' => 11,
            "color_id" =>7
        ]);
        ProductColor::create([
            'product_id' => 11,
            "color_id" =>11
        ]);


        ProductColor::create([
            'product_id' => 12,
            "color_id" =>7
        ]);


        ProductColor::create([
            'product_id' => 17,
            "color_id" =>7
        ]);
        ProductColor::create([
            'product_id' => 18,
            "color_id" =>7
        ]);


        ProductColor::create([
            'product_id' => 44,
            "color_id" =>6
        ]);
        ProductColor::create([
            'product_id' => 44,
            "color_id" =>2
        ]);

    }
}
