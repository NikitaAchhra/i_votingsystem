<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elect_classes', function (Blueprint $table) {
            $table->bigIncrements('eclass_id');
            $table->unsignedBigInteger('nomclass_id_fk');
            $table->foreign('nomclass_id_fk')->references('nomclass_id')->on('nom_classes');
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
        Schema::dropIfExists('elect_classes');
    }
}
