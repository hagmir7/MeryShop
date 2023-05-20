<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1
        Color::create(["name" => "Red", "code" => "#FE2F02"]);
        //2
        Color::create(["name" => "Blue", "code" => "#0000FF"]);
        //3
        Color::create(["name" => "Purple", "code" => "#800080"]);
        //4
        Color::create(["name" => "Yellow", "code" => "#FFFF00"]);
        //5
        Color::create(["name" => "Pink", "code" => "#FFC0CB"]);
        //6
        Color::create(["name" => "White", "code" => "#FFFFFF"]);
        //7
        Color::create(["name" => "Black", "code" => "#000000"]);
        //8
        Color::create(["name" => "Orange", "code" => "#FFA500"]);
        //9
        Color::create(["name" => "Brown", "code" => "#A52A2A"]);
        //10
        Color::create(["name" => "Green", "code" => "#008000"]);
        //11
        Color::create(["name" => "Grey - Gray", "code" => "#808080"]);
        //12
        Color::create(["name" => "beige", "code" => "#F5F5DC"]);
        //13
        Color::create(["name" => "bleu_marine", "code" => "#000080"]);
        //14
        Color::create(["name" => "Couleur_l'huile", "code" => "#808000"]);
        //15
        Color::create(["name" => "Maron", "code" => "#8B4513"]);
        //16
        Color::create(["name" => "Motarde", "code" => "#f0c300"]);
        //17
        Color::create(["name" => "Kaki", "code" => "#F0E68C"]);
        
    }
}
