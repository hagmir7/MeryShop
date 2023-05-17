<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(["name" => "Vêtements et Mode", "image" => '/product/image-1.png']);
        Category::create(["name" => "Électronique et Outillage", "image" => '/product/image-2.png']);
        Category::create(["name" => "Maison et Jardin", "image" => '/product/image-3.png']);
        Category::create(["name" => "Santé et Beauté", "image" => '/product/image-4.png']);
        Category::create(["name" => "Sports et Remise en Forme", "image" => '/product/image-5.png']);
        Category::create(["name" => "jouets et Games", "image" => '/product/image-6.png']);
        Category::create(["name" => "Livres et Médias", "image" => '/product/image-7.png']);

    }
}
