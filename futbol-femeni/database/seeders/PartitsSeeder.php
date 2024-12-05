<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('partits')->insert([
            ['nom' => 'Alexia Putellas', 'equip' => 'Barça Femení', 'posicio' => 'migcampista'],
            ['nom' => 'Esther Gonzalez', 'equip' => 'Atletic de Madrid', 'posicio' => 'Davantera'],
            ['nom' => 'Misa Rodriguez', 'equip' => 'Real Madrid Femení', 'posicio' => 'Portera'],
        ]);
    }
}
