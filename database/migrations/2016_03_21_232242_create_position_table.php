<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('positions', function(Blueprint $table){
            $table->increments('id');

            $table->string('latitude');
            $table->string('longitude');

            $table->integer('truck_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('positions', function(Blueprint $table){
            $table  ->foreign('truck_id')->references('id')
                    ->on('trucks')->onDelete('cascade');
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
        Schema::table('positions', function(Blueprint $table){
            $table->dropForeign('positions_truck_id_foreign');
        });

        Schema::drop('positions');
    }
}
