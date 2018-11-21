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
                'veh_reg_num'=>$obj->veh_reg_num,
                'code'=>$obj->code,
                    'region_id'=>$obj->region_id
                ));
    }
    }
}
