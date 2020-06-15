<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('category');
            $table->text('description');
            $table->bigInteger('price');
            $table->string('price_type');
            $table->string('condition');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('dealer');
            $table->string('brand');
            $table->string('color');
            $table->string('offer');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
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
        Schema::dropIfExists('accessories');
    }
}
