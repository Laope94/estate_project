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
            'type' => "Garsónka",

        ]);
        DB::table('estate_types')->insert([
            'type' => "Byt",

        ]);
        DB::table('estate_types')->insert([
            'type' => "Rodinný dom",

        ]);
        DB::table('estate_types')->insert([
            'type' => "Nebytový priestor",

        ]);
        DB::table('estate_types')->insert([
            'type' => "Pozemok",

        ]);
        DB::table('estate_types')->insert([
            'type' => "Iné",

        ]);
    }
}
