<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersVillageView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW user_villageView AS SELECT  u.name, u.surname,a.name as agency, u.address, u.email, u.phone, u.phone2, 
        v.fullname as village, d.name as district, r.name as region
          FROM users u, villages v, districts d, regions r, agencies a
          WHERE  u.village_id= v.id AND v.district_id=d.id AND d.region_id=r.id AND u.agency_id=a.id");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW user_villageView");
    }
}
