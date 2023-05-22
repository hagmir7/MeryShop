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
        Category::create(["name" => "Vêtements et Mode", "image" => '/fake/category/vetement.jpg']);
        Category::create(["name" => "Électronique et Outillage", "image" => '/fake/category/electro.jpg']);
        Category::create(["name" => "Maison et Jardin", "image" => '/fake/category/home.jpg']);
        Category::create(["name" => "Santé et Beauté", "image" =>'/fake/category/beaute.jpg']);
        Category::create(["name" => "Sports et Remise en Forme", "image" =>'/fake/category/sport.jpg']);
        Category::create(["name" => "jouets et Games", "image" => '/fake/category/games.jpg']);
        Category::create(["name" => "Livres et Médias", "image" => '/fake/category/books.jpg']);

    }
}
