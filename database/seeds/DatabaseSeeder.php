<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RegionTableSeeder::class);
        $this->call(DistrictTableSeeder::class);
        $this->call(VillageTableSeeder::class);
        $this->call(Estate_typeSeeder::class);
        $this->call(AgencySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(EstateSeeder::class);
    }
}
