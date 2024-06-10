<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tanya;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kakastro>
 */
class KakastroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'title' => ucwords(fake()->sentence()),
            // 'body' => fake()->unique()->safeEmail(),
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'gambar' => $this->faker->imageUrl(150, 150), // URL gambar acak
            'tanya_id' => Tanya::inRandomOrder()->first()->id,
            'published_at' => now(),
            
        ];
    }
}
