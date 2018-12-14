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
            'address' => "Palarikova",
            'email' => 'john.doe@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>1, //0-5 (realitka - 2,3)
            'agency_id'=> 1, //1 - ked neni zamestanec realitky, 2 zamestnanec
            'village_id'=> 208, //v databáze
            'UUID'=>Uuid::generate()
        ]);



        DB::table('users')->insert([
            'name' => "Jozef",
            'surname' => "Mrkvička",
            'address' => "Medrajova",
            'email' => 'j.mrkvicka@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>1, //0-5 (realitka - 2,3)
            'agency_id'=> 1, //1 - ked neni zamestanec realitky, 2 zamestnanec
            'village_id'=> 208, //v databáze
            'UUID'=>Uuid::generate()
        ]);




        DB::table('users')->insert([
            'name' => "Milada",
            'surname' => "Horná",
            'address' => "Hviezdoslavova",
            'email' => 'm.horna@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>2, //0-5 (realitka - 2,3)
            'agency_id'=> 2, //1 - ked neni zamestanec realitky, 2 zamestnanec
            'village_id'=> 504, //v databáze
            'UUID'=>Uuid::generate()
        ]);




        DB::table('users')->insert([
            'name' => "Elena",
            'surname' => "Zelená",
            'address' => "Hlavná",
            'email' => 'e.zelena@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>2, //0-5 (realitka - 2,3)
            'agency_id'=> 3, //1 - ked neni zamestanec realitky, 2 zamestnanec
            'village_id'=> 722, //v databáze
            'UUID'=>Uuid::generate()
        ]);




        DB::table('users')->insert([
            'name' => "Boris",
            'surname' => "Rukavica",
            'address' => "Hlinková",
            'email' => 'b.rukavica@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>3, //0-5 (realitka - 2,3) 0-neregistrovaný, 1 -registrovaný, 2 - zamestannec kancelárie, 3 - admin kancelárie, 4 - admin systemový, 5 superadmin
            'agency_id'=> 2, //1 - ked neni zamestanec realitky, 2+ zamestnanec reality (podla počtu realitiek)
            'village_id'=> 247, //v databáze
            'UUID'=>Uuid::generate()
        ]);




        DB::table('users')->insert([
            'name' => "Milan",
            'surname' => "Capek",
            'address' => "A. Dub?eka",
            'email' => 'm.capek@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>3, //0-5 (realitka - 2,3)
            'agency_id'=> 3, //1 - ked neni zamestanec realitky, 2 zamestnanec
            'village_id'=> 2018, //v databáze
            'UUID'=>Uuid::generate()
        ]);




        DB::table('users')->insert([
            'name' => "Roman",
            'surname' => "Debnár",
            'address' => "Moyzesova",
            'email' => 'r.debnar@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>4, //0-5 (realitka - 2,3)
            'agency_id'=> 1, //1 - ked neni zamestanec realitky, 2 zamestnanec
            'village_id'=> 3246, //v databáze
            'UUID'=>Uuid::generate()
        ]);



        DB::table('users')->insert([
            'name' => "Adam",
            'surname' => "Borik",
            'address' => "Pribinova",
            'email' => 'a.borik@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>5, //0-5 (realitka - 2,3)
            'agency_id'=> 1, //1 - ked neni zamestanec realitky, 2 zamestnanec
            'village_id'=> 5, //v databáze
            'UUID'=>Uuid::generate()
        ]);


        DB::table('users')->insert([
            'name' => "Stanislav",
            'surname' => "Uher",
            'address' => "Nitrianska",
            'email' => 's.uher@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>2, //0-5 (realitka - 2,3)
            'agency_id'=> 2, //1 - ked neni zamestanec realitky, 2 zamestnanec
            'village_id'=> 16, //v databáze
            'UUID'=>Uuid::generate()
        ]);


        DB::table('users')->insert([
            'name' => "Dominik",
            'surname' => "Zajac",
            'address' => "Mojmírová",
            'email' => 'd.zajac@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => "123456789",
            'phone2' => "987654321",

            'privilege'=>2, //0-5 (realitka - 2,3)
            'agency_id'=> 3, //1 - ked neni zamestanec realitky, 2 zamestnanec
            'village_id'=> 4207, //v databáze
            'UUID'=>Uuid::generate()
        ]);


    }
}
