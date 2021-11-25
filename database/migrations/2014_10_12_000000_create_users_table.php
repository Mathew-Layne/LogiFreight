<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('first_nm');
            $table->string('last_nm');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('trn');
            $table->string('address');
            $table->string('city');
            $table->string('parish');
            $table->string('phone');
            $table->string('mailbox');
            $table->string('user_type')->default('Member');
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
        Schema::dropIfExists('users');
    }
}
