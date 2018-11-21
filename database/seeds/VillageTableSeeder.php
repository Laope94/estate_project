<?php

use Illuminate\Database\Seeder;

class VillageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json=File::get("database/obce-JSON/villages.json");
        $data=json_decode($json);
        foreach ($data as $obj){
            \App\Models\Village_model::create(array('fullname'=>$obj->fullname,
                'shortname'=>$obj->shortname,
                'zip'=>$obj->zip,
                'district_id'=>$obj->district_id,
                'region_id'=>$obj->region_id
            ));}
    }
}
