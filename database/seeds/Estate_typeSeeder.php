<?php

use Illuminate\Database\Seeder;

class Estate_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estate_types')->insert([
            'type' => "Byt",

        ]);
        DB::table('estate_types')->insert([
            'type' => "Dom",

        ]);
        DB::table('estate_types')->insert([
            'type' => "Pozemok",

        ]);
    }
}
