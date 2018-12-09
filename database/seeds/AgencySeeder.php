<?php

use Illuminate\Database\Seeder;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agencies')->insert([
        'name' => "0",
        'director' => "0",
        'address' => "0",
        'phone' => "0",
        'phone2' => "0",
        'email' => "0",
        'IBAN' => "0",
        'ICO' => "0",
        'DIC' => "0",
        'UUID'=>"0"

    ]);

        for ($a=0;$a<5;$a++){
            DB::table('agencies')->insert([
                'name' => "Nazov".uniqid(),
                'director' => "Konatel".uniqid(),
                'address' => "adresa".uniqid(),
                'phone' => "123456789",
                'phone2' => "987654321",
                'email' => str_random(10).'@gmail.com',
                'IBAN' => "IBAN".uniqid(),
                'ICO' => "ICO".uniqid(),
                'DIC' => "DIC".uniqid(),
                'UUID'=>Uuid::generate()


            ]);}
    }
}

