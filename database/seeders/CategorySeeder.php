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
        Category::create(["name" => "Vêtements et Mode", "image" => '/fake/category/vetement.png']);
        Category::create(["name" => "Maison et Jardin", "image" => '/fake/category/home.png']);
        Category::create(["name" => "Santé et Beauté", "image" =>'/fake/category/beaute.png']);
        Category::create(["name" => "Sports et Fitness", "image" =>'/fake/category/sport.png']);
        Category::create(["name" => "Jouets et Games", "image" => '/fake/category/games.png']);
        Category::create(["name" => "Livres et Médias", "image" => '/fake/category/books.png']);
        Category::create(["name" => "Électronique et Outillage", "image" => '/fake/category/electro.png']);

    }
}
