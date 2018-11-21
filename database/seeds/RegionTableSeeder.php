<?php

use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $json=File::get("database/obce-JSON/regions.json");
        $data=json_decode($json);
        foreach ($data as $obj){
            \App\Models\Region_model::create(array('name'=>$obj->name,
                'shortcut'=>$obj->shortcut));
        }
    }
}
