<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\customer;
use App\Models\employee;
use App\Models\Locations;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      employee::factory()->count(20)->create();
      customer::factory()->count(20)->create();
      Locations::factory()->count(20)->create();

       $this->call([
        TeacherSeeder::class,
       ]);
       
    }
}
