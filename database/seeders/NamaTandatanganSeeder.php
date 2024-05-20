<?php

namespace Database\Seeders;

use App\Models\NamaTandatangan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NamaTandatanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NamaTandatangan::factory()->count(20)->create();
    }
}
