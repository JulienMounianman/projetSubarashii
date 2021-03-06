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
            $table->string('pseudo', 70)->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email' , 70)->unique();
            $table->string('password');
            $table->string('role')->default('user');
            $table->date('birthdate')->nullable();
            $table->string('portfolio_url')->nullable();
            $table->string('website_url')->nullable();
            $table->string('avatar')->default('User_avatar.png');

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
