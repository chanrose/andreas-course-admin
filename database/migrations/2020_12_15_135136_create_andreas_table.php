<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAndreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('andreas', function (Blueprint $table) {
            $table->increments('CID');
            $table->string('courseCode', 100);
            $table->string('courseName', 100);
            $table->string('programName', 100);
            $table->string('instructorName', 100);
            $table->text('courseDescription');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('andreas');
    }
}
