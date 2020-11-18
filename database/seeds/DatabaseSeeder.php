<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompanySeeder::class);
        $this->call(RepresentativesSeeder::class);
        $this->call(DriverSeeder::class);
        $this->call(VehicleSeeder::class);
        $this->call(DriverVehicleSeeder::class);
        $this->call(StatuSeeder::class);
    }
}
