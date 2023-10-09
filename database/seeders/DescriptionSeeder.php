<?php

namespace Database\Seeders;

use App\Models\Description;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $color = [
            'white','black',
            'red', 'green',
            'orange',
            'pink','cream'
        ];

        $size = [
            'x','xxl','m','sm','10inch',
            '32inch'
        ];

        foreach($color as $col){
            Description::create([
                'color' => $col,
                'size' => $size[array_rand($size)],
                'specification' =>[],
            ]);
        }

    }
}
