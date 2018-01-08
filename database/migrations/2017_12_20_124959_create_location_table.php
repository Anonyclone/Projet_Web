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
            $table->string('object')->default("velo");
            $table->date('date_begin');
            $table->date('date_end');
            $table->string('description', 1000);
            $table->boolean('active', false);
            $table->integer('user_post_id')->unsigned()->nullable();
            $table->integer('user_get_id')->unsigned()->nullable();
            $table->integer('address_id')->unsigned()->nullable();

            $table->foreign('user_post_id')
                    ->references('id')
                    ->on('users');

            $table->foreign('user_get_id')
                    ->references('id')
                    ->on('users');

            $table->foreign('address_id')
                    ->references('id')
                    ->on('addresses');
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
