<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChambresCommoditesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chambres_commodites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('chambres_id')->unsigned();
            //$table->foreign('chambres_id')->references('id')->on('chambres');

            $table->integer('commodites_id')->unsigned();
            //$table->foreign('commodites_id')->references('id')->on('commodites');

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
        Schema::dropIfExists('chambres_commodites');
    }

}
