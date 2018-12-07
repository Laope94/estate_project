<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstateVillageTypeView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW eetvView AS SELECT e.id, a.name as agency, e.street, e.area, 
        e.price, e.room_number, e.floors, e.issale, e.pictures, e.description, et.type,
          e.UUID, v.fullname as village, d.name as district, r.name as region, u.id as users_id FROM estates e, estate_types et, villages v, 
          districts d, regions r, agencies a, users u
          WHERE e.estate_type_id=et.id AND e.village_id= v.id AND v.district_id=d.id AND d.region_id=r.id AND e.agency_id=a.id AND e.users_id=u.id");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW eetvView");
    }
}
