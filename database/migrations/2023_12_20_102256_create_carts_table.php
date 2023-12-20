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
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id')->index('carts_product_id_foreign');
            $table->unsignedBigInteger('main_pro_id')->index('carts_main_pro_id_foreign');
            $table->unsignedBigInteger('user_id')->index('carts_user_id_foreign');
            $table->integer('quantity');
            $table->integer('quantity_final')->default(0);
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
        Schema::dropIfExists('carts');
    }
};
