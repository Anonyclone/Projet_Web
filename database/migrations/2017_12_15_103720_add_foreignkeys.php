<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
           $table->foreign('address_id')
                    ->references('id')
                    ->on('addresses');
        });

        Schema::table('addresses', function (Blueprint $table) {
           $table->foreign('user_id')
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
        Schema::table('users', function (Blueprint $table) {
           $table->dropForeign('id_address');
        });

        Schema::table('addresses', function (Blueprint $table) {
           $table->dropForeign('id_user');
        });
    }
}
