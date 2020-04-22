<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('t_id');
            $table->unsignedBigInteger('user_id_fk');
            $table->foreign('user_id_fk')->references('user_id')->on('users');
            $table->unsignedBigInteger('class_id_fk');
            $table->foreign('class_id_fk')->references('class_id')->on('divisions');
            $table->unsignedBigInteger('dept_id_fk');
            $table->foreign('dept_id_fk')->references('dept_id')->on('departments');
            $table->integer('committee')->default(0);
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
        Schema::dropIfExists('teachers');
    }
}
