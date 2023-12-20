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
        Schema::create('purchases_lists', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('supplier_id');
            $table->integer('status')->default(0);
            $table->double('total_price')->default(0);
            $table->double('total_seller_price')->default(0);
            $table->double('total_discounted_price')->default(0);
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
        Schema::dropIfExists('purchases_lists');
    }
};
