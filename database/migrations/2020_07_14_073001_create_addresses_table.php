<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('people_id');
            $table->string('address_line_1', 100);
            $table->string('address_line_2', 100)->nullable();
            $table->string('city', 20);
            $table->string('country', 20);
            $table->string('postcode', 30);
            $table->string('lng', 20)->nullable();
            $table->string('lat', 20)->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
