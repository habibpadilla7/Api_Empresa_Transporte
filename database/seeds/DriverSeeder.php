<?php

use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([	            
            'typeIdentification' => 1,
            'numberIdentification' =>1234, 
            'name' => 'Conductor 1',
            'address' =>'kr 36 94 - 31', 
            'city' => 'Bogota',
            'department' =>'Cundinamarca', 
            'country' => 'Colombia',
            'phone' => 2269875
        ]);
        DB::table('drivers')->insert([	            
            'typeIdentification' => 1,
            'numberIdentification' =>12345, 
            'name' => 'Conductor 2',
            'address' =>'kr 36 94 - 31', 
            'city' => 'Bogota',
            'department' =>'Cundinamarca', 
            'country' => 'Colombia',
            'phone' => 2269875
        ]);
        DB::table('drivers')->insert([	            
            'typeIdentification' => 1,
            'numberIdentification' =>123456, 
            'name' => 'Conductor 3',
            'address' =>'kr 36 94 - 31', 
            'city' => 'Bogota',
            'department' =>'Cundinamarca', 
            'country' => 'Colombia',
            'phone' => 2269875
        ]);
        
    }
}
