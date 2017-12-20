<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsharingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carsharing', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('price_by_place');
            $table->string('start_place', 500);
            $table->string('destination_place', 500);
            $table->timestamp('carsharing_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carsharing');
    }
}
