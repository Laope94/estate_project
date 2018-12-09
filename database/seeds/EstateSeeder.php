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


            if($a%2==0){
              DB::table('estates')->insert([
                'street' => "ulica".uniqid(),
                'area' => 13*($a+1),
                'price' => 40.*($a+1),
                'room_number' => $a+2,
                'floors' => 1+$a,
                'issale' => "0",
                'pictures' => "sample",
                'description' => "KOMENTYYYYYYYYYYYYYY".uniqid(),
                'estate_type_id' => 1,
                'users_id' => $a+1,
                'village_id' => $a+1,
                'UUID'=>"b5b27f44-39ca-47cf-a628-ff25b8701474"


            ]);

            }

            else{
             DB::table('estates')->insert([
                'street' => "ulica".uniqid(),
                'area' => 10*$a,
                'price' => 90000.*$a,
                'room_number' => $a*3,
                'floors' => 1+$a,
                'issale' => "1",
                'pictures' => "house2",
                'description' => "KOMENTYYYYYYYYYYYYYY".uniqid(),
                'estate_type_id' => 2,
                'users_id' => $a+1,
                'village_id' => $a*30,
                'UUID'=>Uuid::generate()


            ]);}

        }
    }
}
