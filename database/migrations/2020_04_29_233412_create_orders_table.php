<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
            $table->string('user_name');
            $table->string('user_phone');
            $table->string('user_email');
            $table->integer('bikes_id')->unsigned();
            $table->foreign('bikes_id')->references('id')->on('bikes')->onDelete('cascade');;
            $table->string('house');
            $table->string('city');
            $table->string('postcode');
            $table->string('address');
            $table->string('picture');
            $table->text('comment')->nullable();
            $table->integer('accessories_id')->unsigned();
            $table->foreign('accessories_id')->references('id')->on('accessories')->onDelete('cascade');;
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
        Schema::dropIfExists('orders');
    }
}
