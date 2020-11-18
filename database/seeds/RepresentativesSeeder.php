<?php

use Illuminate\Database\Seeder;

class RepresentativesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('representatives')->insert([	            
            'typeIdentification' => 1,
            'numberIdentification' =>'2222222', 
            'name' => 'Representante Legal',
            'address' =>'kr 36 94 - 31', 
            'city' => 'Bogota',
            'department' =>'Cundinamarca', 
            'country' => 'Colombia',
            'phone' => 22123456
        ]);
    }
}
