<?php

use Illuminate\Database\Seeder;

class EstateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($a=0;$a<5;$a++){
            DB::table('estates')->insert([
                'street' => "ulica".uniqid(),
                'area' => 20,
                'price' => 9.0,
                'room_number' => $a,
                'floors' => 0,
                'issale'=>true,
                'pictures' => "OBRAAAAZKY".uniqid(),
                'description' => "KOMENTYYYYYYYYYYYYYY".uniqid(),
                'estate_type_id' => 1,
                'users_id' => $a+1,
                'district_id' => $a+1,
                'village_id' => $a+1,
                'agency_id' => $a+1,
                'UUID'=>Uuid::generate()


            ]);}
    }
}
