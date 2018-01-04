<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title', 200);
            $table->integer('price');
            $table->string('object');
            $table->string('place', 500);
            $table->dateTime('date_begin');
            $table->dateTime('date_end');
            $table->string('description', 1000);
            $table->integer('id_user')->unsigned()->nullable();

            $table->foreign('id_user')
                    ->references('id')
                    ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location');
    }
}
