<?php

namespace Database\Seeders;

use App\Models\Song;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            Song::factory()->count(5)->create([
                'category_id' => $category->id
            ]);
        }   
    }
}
