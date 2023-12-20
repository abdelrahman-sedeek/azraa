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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('representative_id')->index('representative_orders_representative_id_foreign');
            $table->unsignedBigInteger('order_id')->index('representative_orders_order_id_foreign');
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
