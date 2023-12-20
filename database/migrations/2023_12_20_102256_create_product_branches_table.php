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
        Schema::create('product_branches', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('product_id');
            $table->float('measurement', 10, 0);
            $table->timestamp('created_at')->default('2023-02-19 09:40:25');
            $table->timestamp('updated_at')->default('2023-02-19 09:40:25');
            $table->integer('offer')->default(0);
            $table->text('unit')->default('كرتونة');
            $table->double('price')->default(10);
            $table->double('discounted_price')->default(9);
            $table->double('seller_price')->default(7);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_branches');
    }
};
