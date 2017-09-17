<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterstedStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intersted_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone_no');
            $table->string('ocupation');
            $table->string('course_name');
            $table->string('address');
            $table->string('institute');
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
        Schema::dropIfExists('intersted_students');
    }
}
