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

        DB::table('users')->insert([
            'name' => "John",
            'surname' => "Doe",
            'address' => "Pal�rikova",
            'email' => 'john.doe@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>1, //0-5 (realitka - 2,3)
            'agency_id'=> 1, //1 - ked neni zamestanec realitky, 2 zamestnanec
            'village_id'=> 208, //v datab�ze
            'UUID'=>Uuid::generate()
        ]);



        DB::table('users')->insert([
            'name' => "Jozef",
            'surname' => "Mrkvi�ka",
            'address' => "Med�ajova",
            'email' => 'j.mrkvicka@gmail.com',
            'password' => '123456',
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>1, //0-5 (realitka - 2,3)
            'agency_id'=> 1, //1 - ked neni zamestanec realitky, 2 zamestnanec
            'village_id'=> 208, //v datab�ze
            'UUID'=>Uuid::generate()
        ]);




        DB::table('users')->insert([
            'name' => "Milada",
            'surname' => "Horn�",
            'address' => "Hviezdoslavova",
            'email' => 'm.horna@gmail.com',
            'password' => '123456',
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>2, //0-5 (realitka - 2,3)
            'agency_id'=> 2, //1 - ked neni zamestanec realitky, 2 zamestnanec
            'village_id'=> 504, //v datab�ze
            'UUID'=>Uuid::generate()
        ]);




        DB::table('users')->insert([
            'name' => "Elena",
            'surname' => "Zelen�",
            'address' => "Hlavn�",
            'email' => 'e.zelena@gmail.com',
            'password' => '123456',
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>2, //0-5 (realitka - 2,3)
            'agency_id'=> 3, //1 - ked neni zamestanec realitky, 2 zamestnanec
            'village_id'=> 722, //v datab�ze
            'UUID'=>Uuid::generate()
        ]);




        DB::table('users')->insert([
            'name' => "Boris",
            'surname' => "Rukavica",
            'address' => "Hlinkov�",
            'email' => 'b.rukavica@gmail.com',
            'password' => '123456',
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>3, //0-5 (realitka - 2,3) 0-neregistrovan�, 1 -registrovan�, 2 - zamestannec kancel�rie, 3 - admin kancel�rie, 4 - admin systemov�, 5 superadmin
            'agency_id'=> 2, //1 - ked neni zamestanec realitky, 2+ zamestnanec reality (podla po�tu realitiek)
            'village_id'=> 247, //v datab�ze
            'UUID'=>Uuid::generate()
        ]);




        DB::table('users')->insert([
            'name' => "Milan",
            'surname' => "Capek",
            'address' => "A. Dub�eka",
            'email' => 'm.capek@gmail.com',
            'password' => '123456',
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>3, //0-5 (realitka - 2,3)
            'agency_id'=> 3, //1 - ked neni zamestanec realitky, 2 zamestnanec
            'village_id'=> 2018, //v datab�ze
            'UUID'=>Uuid::generate()
        ]);




        DB::table('users')->insert([
            'name' => "Roman",
            'surname' => "Debn�r",
            'address' => "Moyzesova",
            'email' => 'r.debnar@gmail.com',
            'password' => '123456',
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>4, //0-5 (realitka - 2,3)
            'agency_id'=> 1, //1 - ked neni zamestanec realitky, 2 zamestnanec
            'village_id'=> 3246, //v datab�ze
            'UUID'=>Uuid::generate()
        ]);



        DB::table('users')->insert([
            'name' => "Adam",
            'surname' => "Borik",
            'address' => "Pribinova",
            'email' => 'a.borik@gmail.com',
            'password' => '123456',
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>5, //0-5 (realitka - 2,3)
            'agency_id'=> 1, //1 - ked neni zamestanec realitky, 2 zamestnanec
            'village_id'=> 5, //v datab�ze
            'UUID'=>Uuid::generate()
        ]);


        DB::table('users')->insert([
            'name' => "Stanislav",
            'surname' => "Uher",
            'address' => "Nitrianska",
            'email' => 's.uher@gmail.com',
            'password' => '123456',
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>2, //0-5 (realitka - 2,3)
            'agency_id'=> 2, //1 - ked neni zamestanec realitky, 2 zamestnanec
            'village_id'=> 16, //v datab�ze
            'UUID'=>Uuid::generate()
        ]);


        DB::table('users')->insert([
            'name' => "Dominik",
            'surname' => "Zajac",
            'address' => "Mojm�rov�",
            'email' => 'd.zajac@gmail.com',
            'password' => '123456',
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>2, //0-5 (realitka - 2,3)
            'agency_id'=> 3, //1 - ked neni zamestanec realitky, 2 zamestnanec
            'village_id'=> 4207, //v datab�ze
            'UUID'=>Uuid::generate()
        ]);


    }
}
