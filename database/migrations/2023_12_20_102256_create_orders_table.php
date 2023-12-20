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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->index('orders_user_id_foreign');
            $table->integer('status')->default(0);
            $table->double('wallet_used')->default(0);
            $table->double('total_price')->default(0);
            $table->double('total_seller_price')->default(0);
            $table->double('total_discounted_price')->default(0);
            $table->timestamps();
            $table->string('uniqueCode')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
