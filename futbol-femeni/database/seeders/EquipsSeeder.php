<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equips')->insert([
            ['nom' => 'Barça Femení', 'estadi' => 'Camp Nou', 'titols' => 30],
            ['nom' => 'Atlètic de Madrid', 'estadi' => 'Cívitas Metropolitano', 'titols' => 10],
            ['nom' => 'Real Madrid Femení', 'estadi' => 'Alfredo Di Stéfano', 'titols' => 5],
    ]);
    }
}
