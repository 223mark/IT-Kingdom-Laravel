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
        Schema::create('my_carts', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('product_id');
            $table->string('product_name');
            $table->string('image');
            $table->string('price');
            $table->string('total');
            $table->string('quantity');
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
        Schema::dropIfExists('my_carts');
    }
};