<?php


namespace Database\Seeders;


use App\Models\Milling;
use App\Models\Printing;
use Illuminate\Database\Seeder;

class PrintingSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Printing::factory()->count(2)->create();
        Milling::factory()->count(2)->create();
    }
}
