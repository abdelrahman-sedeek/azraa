<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 191);
            $table->string('profile', 191)->nullable();
            $table->string('mobile', 191);
            $table->string('email', 191);
            $table->string('location', 191);
            $table->double('balance');
            $table->double('longitude');
            $table->double('latitude');
            $table->string('password', 191);
            $table->text('type');
            $table->string('code', 191)->nullable();
            $table->text('access_token')->nullable();
            $table->integer('status')->default(0);
            $table->string('remove', 191)->default('0');
            $table->string('role', 191)->default('user');
            $table->rememberToken();
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
};
