<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Ertirlik, heýgenek',
            'Balyk',
            'Desertler',
            'Çorbalar',
            'Işdäaçarlar',
            'Gyzgyn tagamlar',
            'Garnirler, rizotto',
            'Un tagamlary',
            'Pasta',
            'Pizza',
            'Pide',
            'Steýkler',
            'Fastfud',
            'Milli tagamlar',
            'Milkşeýk we kokteýller'
        ];
        foreach ($categories as $category) {
            \App\Models\Category::create([
                'name' => $category
            ]);
        }
    }
}
