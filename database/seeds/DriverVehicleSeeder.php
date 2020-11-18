<?php

use Illuminate\Database\Seeder;

class DriverVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('driver_vehicle')->insert([	            
            'driver_id' => 1,
            'vehicle_id' => 1
        ]);
        DB::table('driver_vehicle')->insert([	            
            'driver_id' => 2,
            'vehicle_id' => 1
        ]);
        DB::table('driver_vehicle')->insert([	            
            'driver_id' => 3,
            'vehicle_id' => 1
        ]);
    }
}
