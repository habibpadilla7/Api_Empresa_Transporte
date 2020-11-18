<?php

use Illuminate\Database\Seeder;

class StatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([	            
            'name' => 'Afiliado'
        ]);
        DB::table('status')->insert([	            
            'name' => 'Desafiliado'
        ]);
    }
}
