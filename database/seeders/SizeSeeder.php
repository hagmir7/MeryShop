<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1
        Size::create(['size'=> 'XS - 84 CM']);
        //2
        Size::create(['size'=> 'S - 92 CM']);
        //3
        Size::create(['size'=> 'M - 100 CM']);
        //4
        Size::create(['size'=> 'L - 108 CM']);
        //5
        Size::create(['size'=> 'XL - 116 CM']);
        //6
        Size::create(['size'=> 'XXL - 124 CM']);


        //7
        Size::create(['size'=> '28']);
        //8
        Size::create(['size'=> '29']);
        //9
        Size::create(['size'=> '30']);
        //10
        Size::create(['size'=> '31']);
        //11
        Size::create(['size'=> '32']);
        //12
        Size::create(['size'=> '33']);
        //13
        Size::create(['size'=> '34']);
        //14
        Size::create(['size'=> '36']);
        //15
        Size::create(['size'=> '38']);
        //16
        Size::create(['size'=> '40']);
        //17
        Size::create(['size'=> '42']);
        //18
        Size::create(['size'=> '44']);
    }
}
