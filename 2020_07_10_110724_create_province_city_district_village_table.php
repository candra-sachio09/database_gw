<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvinceCityDistrictVillageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('province', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('city', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('province_id');            
            $table->timestamps();
        });
        Schema::create('district', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('city_id');            
            $table->timestamps();
        });
        Schema::create('village_office', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('district_id');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('province');
        Schema::dropIfExists('city');
        Schema::dropIfExists('district');
        Schema::dropIfExists('village_office');
    }
}
