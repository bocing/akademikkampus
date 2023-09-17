<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('rolesid');
            $table->string('email')->default('');
            $table->string('nama', 40)->nullable()->default(' ');
            $table->string('koref', 20)->nullable();
            $table->string('password', 60)->default('');
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();
            $table->string('rememberToken', 20)->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }

}
