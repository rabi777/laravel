<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('permanent_address');
            $table->string('current_address');
            $table->string('ocupation');
            $table->string('institute');
            $table->string('academic_qualification');
            $table->string('date_of_birth');
            $table->string('phone_no');
            $table->string('id_no');
            $table->string('course_name');
            $table->string('skill');
            $table->string('machine');
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
        Schema::dropIfExists('register_students');
    }
}
