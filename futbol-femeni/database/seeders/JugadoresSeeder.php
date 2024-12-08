<?php

namespace Database\Seeders;

use App\Models\Jugadora;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class JugadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Dona error per duplicitat
        // Estic asignant equip_id a la taula equip i em dona problemes
        // Jugadora::create(['nom' => 'Alexia Putellas', 'equip' => 'Barça Femení', 'posicio' => 'migcampista']);
        // Jugadora::create(['nom' => 'Esther Gonzalez', 'equip' => 'Atletic de Madrid', 'posicio' => 'Davantera']);
        // Jugadora::create(['nom' => 'Misa Rodriguez', 'equip' => 'Real Madrid Femení', 'posicio' => 'Portera']);

        Jugadora::factory(10)->create();
    }
}
