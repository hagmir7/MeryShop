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
        Category::create(["name" => "Vêtements et Mode", "image" => '/fake/products/vetementCat.webp']);
        Category::create(["name" => "Électronique et Outillage", "image" => '/fake/products/EleCate.gif']);
        Category::create(["name" => "Maison et Jardin", "image" => '/fake/products/maisonCat.gif']);
        Category::create(["name" => "Santé et Beauté", "image" =>'/fake/products/beauteCat.gif']);
        Category::create(["name" => "Sports et Remise en Forme", "image" =>'/fake/products/sportCat.gif']);
        Category::create(["name" => "jouets et Games", "image" => '/fake/products/jouCat.gif']);
        Category::create(["name" => "Livres et Médias", "image" => '/fake/products/livreCat.gif']);

    }
}
