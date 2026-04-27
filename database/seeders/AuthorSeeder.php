<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            ['name' => 'KUDO KUDO', 'address' => 'Ashgabat', 'rating' => '4.0', 'phone_num' => '+99361255138'],
            ['name' => 'Katmer premium','address' => 'Mary', 'rating' => '5.0', 'phone_num' => '+99361255201'],
            ['name' => 'Pizza88', 'address' => 'Ashgabat', 'rating' => '4.4', 'phone_num' => '+993612115303'],
            ['name' => 'Hezzet', 'address' => 'Ashgabat', 'rating' => '4.1', 'phone_num' => '+99361255303'],
            ['name' => 'Hurma', 'address' => 'Ashgabat', 'rating' => '4.2', 'phone_num' => '+99361255303'],
            ['name' => 'Sa kofe', 'address' => 'Lebap', 'rating' => '4.4', 'phone_num' => '+99361255303'],
            ['name' => 'Balykcy', 'address' => 'Ashgabat', 'rating' => '4.4', 'phone_num' => '+99362455303'],
            ['name' => 'Kebapcy', 'address' => 'Balkan', 'rating' => '4.3', 'phone_num' => '+99361475344'],
            ['name' => 'Tor', 'address' => 'Ahal', 'rating' => '4.3', 'phone_num' => '+99361610444'],
            ['name' => 'Tagamcy', 'address' => 'Balkan', 'rating' => '4.6', 'phone_num' => '+99361473814'],

        ];

        foreach ($authors as $author) {
            \App\Models\Author::create([
                'name' => $author['name'],
                'address' => $author['address'],
                'rating' => $author['rating'],
                'phone_num' => $author['phone_num'],
            ]);
        }
    }
}
