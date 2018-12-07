<?php

use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json=File::get("database/obce-JSON/districts.json");
        $data=json_decode($json);
        foreach ($data as $obj){
            \App\Models\District_model::create(array('name'=>$obj->name,
                    'region_id'=>$obj->region_id
                ));
    }
    }
}
