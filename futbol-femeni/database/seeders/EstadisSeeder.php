<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Estadi;
use App\Models\Equip;
class EstadisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $barcelona = Equip::firstOrCreate(['nom' => 'FC Barcelona'], ['titols' => 26]);
        $atletico = Equip::firstOrCreate(['nom' => 'Atlético de Madrid'], ['titols' => 11]);
        $realMadrid = Equip::firstOrCreate(['nom' => 'Real Madrid'], ['titols' => 34]);


        $this->createOrUpdateEstadi([
            'nom' => 'Camp Nou',
            'ciutat' => 'Barcelona',
            'capacitat' => 99000,
            'equip_principal_id' => $barcelona->id
        ]);

        $this->createOrUpdateEstadi([
            'nom' => 'Wanda Metropolitano',
            'ciutat' => 'Madrid',
            'capacitat' => 68000,
            'equip_principal_id' => $atletico->id
        ]);

        $this->createOrUpdateEstadi([
            'nom' => 'Santiago Bernabéu',
            'ciutat' => 'Madrid',
            'capacitat' => 81000,
            'equip_principal_id' => $realMadrid->id
        ]);
    }

    private function createOrUpdateEstadi(array $data): void
    {
        Estadi::updateOrCreate(
            ['nom' => $data['nom']],
            $data
        );
    }
}
