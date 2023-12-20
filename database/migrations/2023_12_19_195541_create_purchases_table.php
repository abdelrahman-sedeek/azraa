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
        Schema::create('purchases', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('variant_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('supplier_id');
            $table->integer('purchases_list_id');
            $table->double('quantity')->default(1);
            $table->text('unit');
            $table->double('price');
            $table->double('seller_price');
            $table->double('total_discounted_price');
            $table->double('total_seller_price');
            $table->double('discounted_price');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('purchases');
    }
};
