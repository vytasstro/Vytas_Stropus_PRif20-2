<?php

namespace Database\Seeders;

use App\Models\Conference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new Conference())->insert([
            [
                'title' => 'IT conference',
                'content' => 'Talking about newest IT technologies',
                'date' => '2021-01-01',
                'address' => 'K. Kazlausko g. 1, Kaunas'
            ],
            [
                'title' => 'Teambuilding conference',
                'content' => 'Preparing for teambuilding activities',
                'date' => '2022-01-01',
                'address' => 'A. Karaliauciaus g. 98, Kaunas'
            ],
            [
                'title' => 'IT Security conference',
                'content' => 'Talking about security',
                'date' => '2023-03-01',
                'address' => 'Taikos g. 98, Vilnius'
            ]
        ]);
    }
}
