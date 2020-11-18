<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'typeIdentification' => 3,
            'numberIdentification' =>123456789, 
            'name' => 'Empresa 1',
            'address' =>'kr 36 94 - 31', 
            'city' => 'Bogota',
            'department' =>'Cundinamarca', 
            'country' => 'Colombia',
            'phone' => 2212345,
            'representative_id' => 1
        ]);
    }
}
