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
        Schema::create('best_seller_reports', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->integer('product_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('product_count')->nullable();
            $table->integer('orders_count')->nullable();
            $table->double('total_discounted_price')->nullable();
            $table->double('total_wallet_used')->nullable();
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
        Schema::dropIfExists('best_seller_reports');
    }
};
