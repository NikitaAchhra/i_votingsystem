<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNomCollegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nom_colleges', function (Blueprint $table) {
            $table->bigIncrements('nomcollege_id');
            $table->unsignedBigInteger('eclass_id_fk');
            $table->foreign('eclass_id_fk')->references('eclass_id')->on('elect_classes');
            $table->unsignedBigInteger('pos_id_fk');
            $table->foreign('pos_id_fk')->references('pos_id')->on('positions');
            $table->unsignedBigInteger('coun_id_fk');
            $table->foreign('coun_id_fk')->references('coun_id')->on('councils');
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
        Schema::dropIfExists('nom_colleges');
    }
}
