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


            DB::table('agencies')->insert([
                'name' => "BeMi",
                'director' => "Adrián Ďurko",
                'address' => "Nitrianska",
                'phone' => "123456789",
                'phone2' => "987654321",
                'email' =>'A.Durko@gmail.com',
                'IBAN' => "SK0809000000000123123123",
                'ICO' => "46492721",
                'DIC' => "2820011755",
                'village_id'=> 1879,
                'UUID'=>Uuid::generate()


            ]);



            DB::table('agencies')->insert([
                'name' => "L&P",
                'director' => "Juraj Čiernik",
                'address' => "Trnavksého",
                'phone' => "123456789",
                'phone2' => "987654321",
                'email' =>'J.Ciernik@gmail.com',
                'IBAN' => "SK0809000000000123456789",
                'ICO' => "64671897",
                'DIC' => "2630055481",
                'village_id'=> 186,
                'UUID'=>Uuid::generate()


            ]);




        DB::table('agencies')->insert([
            'name' => "DMG",
            'director' => "Mária Bukovská",
            'address' => "Hlavná",
            'phone' => "123456789",
            'phone2' => "987654321",
            'email' =>'M.Bukovská@gmail.com',
            'IBAN' => "SK0809000000000987654321",
            'ICO' => "64324467",
            'DIC' => "2630073974",
            'village_id'=> 2017,
            'UUID'=>Uuid::generate()


        ]);


        DB::table('agencies')->insert([
            'name' => "MG real",
            'director' => "Marián Hagara",
            'address' => "Zelená 6",
            'phone' => "123456789",
            'phone2' => "987654321",
            'email' =>'M.Hagara@gmail.com',
            'IBAN' => "SK0809000000000987321456",
            'ICO' => "64123481",
            'DIC' => "2830071234",
            'village_id'=> 478,
            'UUID'=>Uuid::generate()


        ]);



        DB::table('agencies')->insert([
            'name' => "SUPER reality",
            'director' => "Petra Grznárová",
            'address' => "Lomnického",
            'phone' => "123456789",
            'phone2' => "987654321",
            'email' =>'P.Grznarova@gmail.com',
            'IBAN' => "SK0809000000000123654987",
            'ICO' => "73544769",
            'DIC' => "2047657641",
            'village_id'=> 907,
            'UUID'=>Uuid::generate()


        ]);




    }
}

