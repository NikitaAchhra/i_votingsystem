<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNomClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nom_classes', function (Blueprint $table) {
            $table->bigIncrements('nomclass_id');
            $table->unsignedBigInteger('stud_id_fk');
            $table->foreign('stud_id_fk')->references('stud_id')->on('students');
            $table->unsignedBigInteger('coun_id_fk');
            $table->foreign('coun_id_fk')->references('coun_id')->on('councils');
            $table->integer('votes')->default(0);
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
        Schema::dropIfExists('nom_classes');
    }
}
