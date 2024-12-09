<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Partit;

class PartitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Partit::factory(10)->create();
    }
}
