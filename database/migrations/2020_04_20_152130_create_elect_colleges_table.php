<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectCollegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elect_colleges', function (Blueprint $table) {
            $table->bigIncrements('ecollege_id');
            $table->unsignedBigInteger('nomcollege_id_fk');
            $table->foreign('nomcollege_id_fk')->references('nomcollege_id')->on('nom_colleges');
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
        Schema::dropIfExists('elect_colleges');
    }
}
