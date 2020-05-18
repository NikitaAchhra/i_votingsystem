<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('stud_id');
            $table->unsignedBigInteger('user_id_fk');
            $table->foreign('user_id_fk')->references('user_id')->on('users');
            $table->unsignedBigInteger('class_id_fk');
            $table->foreign('class_id_fk')->references('class_id')->on('divisions');
            $table->unsignedBigInteger('dept_id_fk');
            $table->foreign('dept_id_fk')->references('dept_id')->on('departments');
            $table->integer('request')->default(0);
            $table->string('v_cr')->default("");
            $table->string('v_cultural')->default("");
            $table->string('v_sports')->default("");
            $table->string('v_music')->default("");
            $table->string('v_sort')->default("");
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
        Schema::dropIfExists('students');
    }
}
