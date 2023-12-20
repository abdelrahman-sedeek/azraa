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
        Schema::create('representative_orders', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('representative_id');
            $table->unsignedBigInteger('order_id');
            $table->integer('status')->default(0);
            $table->double('price')->nullable();
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
        Schema::dropIfExists('representative_orders');
    }
};
