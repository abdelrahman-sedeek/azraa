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
        Schema::create('representative_operations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('representative_id')->index('representative_operations_representative_id_foreign');
            $table->integer('order_id')->default(0);
            $table->integer('type')->default(0);
            $table->double('price');
            $table->integer('status')->default(0);
            $table->text('description')->nullable();
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
        Schema::dropIfExists('representative_operations');
    }
};
