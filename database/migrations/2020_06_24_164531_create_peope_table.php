<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->string('approved')->default(1);
            // $table->string('address_line_1');
            // $table->string('address_line_2')->nullable();
            // $table->string('city');
            // $table->string('long')->nullable();
            // $table->string('let')->nullable();
            $table->string('email', 70);
            $table->string('phone_number');
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
        Schema::dropIfExists('users');
    }
}
