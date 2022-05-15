<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create('events',function(Blueprint $table){
            $table -> increments('eventid');
            $table -> string('name');
            $table -> string('event');
            $table -> string('place');
            $table -> dateTime('date');
            $table -> integer('id')->unsigned();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
