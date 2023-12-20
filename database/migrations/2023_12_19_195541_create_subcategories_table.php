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
        Schema::create('subcategories', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name', 60);
            $table->longText('image');
            $table->timestamp('created_at')->default('2023-03-11 06:37:13');
            $table->timestamp('updated_at')->default('2023-03-11 06:37:13');
            $table->text('id_category')->default('138');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategories');
    }
};
