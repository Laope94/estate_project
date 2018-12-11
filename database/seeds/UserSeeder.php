<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($a=0;$a<5;$a++){
        DB::table('users')->insert([
            'name' => "Meno".uniqid(),
            'surname' => "Priezvisko".uniqid(),
            'address' => "adresa".uniqid(),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => "123456789",
            'phone2' => "987654321",
            'privilege'=>1,
            'agency_id'=> 2,
            'village_id'=> $a+4,
            'UUID'=>Uuid::generate()
        ]);}
    }
}
