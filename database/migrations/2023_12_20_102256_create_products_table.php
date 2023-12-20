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
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 500);
            $table->integer('category_id');
            $table->longText('image');
            $table->longText('description');
            $table->timestamp('date_added')->useCurrent();
            $table->timestamp('created_at')->default('2023-02-19 09:40:25');
            $table->timestamp('updated_at')->default('2023-02-19 09:40:25');
            $table->text('barcode')->nullable();
            $table->integer('total_allowed_quantity')->default(100);
            $table->integer('subcategory_id')->default(9);
            $table->integer('status')->nullable()->default(1);
            $table->integer('stock')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
