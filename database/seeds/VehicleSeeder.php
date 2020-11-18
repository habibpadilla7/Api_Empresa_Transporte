<?php

use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([	  
            'company_id' => 1,
            'plaque' => 'ABC-123',
            'motor' => '1.5',
            'chassis' => '1111111',
            'model' => '2',
            'registrationDate' => '22/10/2010',
            'seatedPassengers' => '30',
            'standingPassengers' => '15',
            'weight' => '500',
            'dry' => 'si',
            'grossWeight' => '400',
            'numberDoors' => '4',
            'brand' => 'Mazda',
            'line' => '2011',
            'state_id' => 1,
        ]);
    }
}
