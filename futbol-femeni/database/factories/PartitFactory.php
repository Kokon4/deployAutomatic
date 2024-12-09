<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Equip;
use App\Models\Partit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PartitFactory extends Factory
{
    protected $model = Partit::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'equip_local_id' => Equip::query()->inRandomOrder()->first('id'),
            'equip_visitant_id' => Equip::query()->inRandomOrder()->first('id'),
            'data' => $this->faker->dateTimeBetween('2022-01-01', '2023-12-31'),
            'resultat' => $this->faker->numberBetween(0,10) . ' - ' . $this->faker->numberBetween(0,10),
        ];
    }
}
