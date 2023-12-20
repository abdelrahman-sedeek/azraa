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
        Schema::create('representative_prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('representative_id')->index('representative_prices_representative_id_foreign');
            $table->integer('order_id')->default(0);
            $table->double('price');
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
        Schema::dropIfExists('representative_prices');
    }
};
