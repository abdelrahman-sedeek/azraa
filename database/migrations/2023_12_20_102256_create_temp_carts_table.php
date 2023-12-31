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
        Schema::create('temp_carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('variant_id')->index('temp_carts_variant_id_foreign');
            $table->unsignedBigInteger('product_id')->index('temp_carts_product_id_foreign');
            $table->unsignedBigInteger('user_id')->index('temp_carts_user_id_foreign');
            $table->double('quantity')->default(1);
            $table->text('unit');
            $table->double('price');
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
        Schema::dropIfExists('temp_carts');
    }
};
