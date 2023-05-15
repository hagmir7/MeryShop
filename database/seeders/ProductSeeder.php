<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([
            [
                'name' => "jewellery",
                'price' => 1500,
                'old_price' => 2000,
                'stock' => 70,
                'description' => "the best jewellery",
                'status' => true,
                'user'=>1,
                'category' => 1
            ],
            [
                'name' => "clothes",
                'price' => 150,
                'old_price' => 200,
                'stock' => 170,
                'description' => "the best clothes",
                'status' => false,
                'user'=>1,
                'category' => 1
            ],
            [
                'name' => "shirt",
                'price' => 1700,
                'old_price' => 2100,
                'stock' => 270,
                'description' => "the best shirt",
                'status' => true,
                'user'=>1,
                'category' => 1
            ],
            [
                'name' => "shorts",
                'price' => 500,
                'old_price' => 700,
                'stock' => 470,
                'description' => "the best shorts",
                'status' => true,
                'user'=>1,
                'category' => 1
            ],



            [
                'name' => "ANKER",
                'price' => 3500,
                'old_price' => 3700,
                'stock' => 470,
                'description' => "Here's a List of Portable Tech Gadgets You'll Want to Use Every Day",
                'status' => true,
                'user'=>2,
                'category' => 2
            ],            
            [
                'name' => "watch",
                'price' => 2500,
                'old_price' => 2600,
                'stock' => 470,
                'description' => "the best watch",
                'status' => true,
                'user'=>2,
                'category' => 2
            ],
            [
                'name' => "Phone",
                'price' => 400,
                'old_price' => 600,
                'stock' => 270,
                'description' => "Best Tech Products",
                'status' => true,
                'user'=>1,
                'category' => 2
            ],
            [
                'name' => "chair",
                'price' => 4500,
                'old_price' => 5000,
                'stock' => 20,
                'description' => "the best shorts",
                'status' => true,
                'user'=>1,
                'category' => 2
            ],
            [
                'name' => "charge",
                'price' => 2800,
                'old_price' => 3200,
                'stock' => 240,
                'description' => "the best charge",
                'status' => true,
                'user'=>1,
                'category' => 2
            ],



            [
                'name' => "Garden",
                'price' => 1800,
                'old_price' => 3400,
                'stock' => 240,
                'description' => "the best Garden",
                'status' => true,
                'user'=>1,
                'category' => 3
            ],
            [
                'name' => "Home",
                'price' => 1200,
                'old_price' => 2400,
                'stock' => 240,
                'description' => "the best Home",
                'status' => true,
                'user'=>1,
                'category' => 3
            ],


            [
                'name' => "perfume",
                'price' => 800,
                'old_price' => 1200,
                'stock' => 240,
                'description' => "the best perfume",
                'status' => true,
                'user'=>1,
                'category' => 4
            ],
            [
                'name' => "champo",
                'price' => 800,
                'old_price' => 1200,
                'stock' => 240,
                'description' => "the best champo",
                'status' => true,
                'user'=>1,
                'category' => 4
            ],
            [
                'name' => "Best Masque",
                'price' => 1800,
                'old_price' => 1300,
                'stock' => 240,
                'description' => "the best Masque",
                'status' => true,
                'user'=>1,
                'category' => 4
            ],


            [
                'name' => "30 KG",
                'price' => 1800,
                'old_price' => 1300,
                'stock' => 240,
                'description' => "the best sport with shopMery",
                'status' => true,
                'user'=>1,
                'category' => 5
            ],
            [
                'name' => "sports",
                'price' => 1800,
                'old_price' => 1300,
                'stock' => 240,
                'description' => "the best sports",
                'status' => true,
                'user'=>1,
                'category' => 5
            ],
            [
                'name' => "Raquette tinis",
                'price' => 900,
                'old_price' => 1100,
                'stock' => 200,
                'description' => "the best Raquette",
                'status' => true,
                'user'=>1,
                'category' => 5
            ],





        ]);
    }
}
