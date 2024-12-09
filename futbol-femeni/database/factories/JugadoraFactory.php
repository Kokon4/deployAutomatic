<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Equip;
use App\Models\Jugadora;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JugadoraFactory extends Factory
{
    protected $model = Jugadora::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->name(),
            'posicio' => $this->faker->randomElement(['Portera', 'Davantera', 'migcampista']),
            'equip_id' => Equip::query()->inRandomOrder()->first('id'),
        ];
    }
}

