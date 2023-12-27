<?php

namespace Database\Factories;

use App\Models\Adventure;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdventureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Adventure::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = $this->faker;

        return [
            'title' => $faker->sentence(mt_rand(2, 8)),
            'slug' => $faker->unique()->slug(),
            'excerpt' => $faker->sentence(mt_rand(10, 25)),
            'duration' => gmdate("H:i:s", $faker->numberBetween(1, 86400)),
            'skill' => $faker->word,
            'price' => $faker->randomFloat(2, 10, 1000),
            'description' => $faker->paragraph(mt_rand(5, 10)),
            'category_id' => mt_rand(1,5),
            'user_id' => mt_rand(1,3),
        ];
    }
}
