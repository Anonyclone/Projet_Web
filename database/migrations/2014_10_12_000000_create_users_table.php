<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname');
            $table->string('firstname');
            $table->string('email')->unique();
            $table->date('birth_date');
            $table->string('password');
            $table->string("pseudo", 50)->unique();
            $table->string("phone");
            $table->rememberToken();
            $table->timestamps();
            $table->string('description', 500)->default('none');
            $table->boolean('permis')->default(false);
            $table->boolean('vehicule')->default(false);
            $table->string('avatar', 1000)->default('default.png');
            $table->string('sexe')->default('homme');
            $table->integer('id_address')->unsigned()->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
