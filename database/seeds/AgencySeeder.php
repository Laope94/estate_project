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
