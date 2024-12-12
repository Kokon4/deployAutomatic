<?php

namespace Database\Factories;
use App\Models\Equip;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estadi>
 */
class EstadiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->unique()->city.' Stadium',
            'ciutat' => $this->faker->unique()->city,
            'capacitat' => $this->faker->numberBetween(10000, 100000),
            'equip_principal_id' => Equip::inRandomOrder()->first()->id,
        ];
    }
}
