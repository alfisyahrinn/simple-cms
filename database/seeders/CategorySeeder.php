<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categori = [
            [
                'name' => 'programing',
                'slug' => 'programing'
            ],
            [
                'name' => 'web design',
                'slug' => 'web-design'
            ],
            [
                'name' => 'personal',
                'slug' => 'personal'
            ],
            [
                'name' => 'Bisnis',
                'slug' => 'bisnis'
            ],
        ];
        DB::table('categories')->insert($categori);
    }
}
