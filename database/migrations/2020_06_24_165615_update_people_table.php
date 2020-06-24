<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('people', function (Blueprint $table) {
            $table->renameColumn('name', 'first_name');
            $table->string('last_name', 30)->after('name');
            $table->string('address_line_1', 100)->change();
            $table->string('address_line_2', 100)->nullable()->change();
            $table->string('city', 20)->change();
            $table->renameColumn('long', 'lng');
            $table->renameColumn('let', 'lat');
            $table->renameColumn('phone_number', 'phone');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('people', function (Blueprint $table) {
            //
        });
    }
}
