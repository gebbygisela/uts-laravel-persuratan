<?php

namespace Database\Seeders;

use App\Models\KepalaSurat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KepalaSuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KepalaSurat::factory()->count(20)->create();
    }
}
