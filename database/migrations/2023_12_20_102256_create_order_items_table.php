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
        Schema::create('order_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id')->index('order_items_order_id_foreign');
            $table->unsignedBigInteger('user_id')->index('order_items_user_id_foreign');
            $table->unsignedBigInteger('product_id')->index('order_items_product_id_foreign');
            $table->unsignedBigInteger('variant_id')->index('order_items_variant_id_foreign');
            $table->double('price');
            $table->double('seller_price');
            $table->double('total_seller_price');
            $table->double('discounted_price');
            $table->double('total_discounted_price');
            $table->integer('quantity');
            $table->text('status')->default('نشط');
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
        Schema::dropIfExists('order_items');
    }
};
