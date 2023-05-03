<?php

namespace Database\Factories;

use App\Models\Song;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\song>
 */
class SongFactory extends Factory
{
    //protected $model = Song::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryIds = Category::pluck('id')->toArray();
        return [
            'category_id' => $this->faker->randomElement($categoryIds),
            'title' => $this->faker->sentence(3),
            'lyrics' => $this->faker->paragraph(),
        ];
    }
}
