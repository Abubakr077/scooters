<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('city');
            $table->string('province');
            $table->string('brand');
            $table->string('city_area')->nullable();
            $table->string('registration_city');
            $table->string('mileage');
            $table->string('date');
            $table->string('engine_type');
            $table->bigInteger('engine_capacity');
            $table->string('body_type');
            $table->string('color');
            $table->string('condition');
            $table->string('seller_name');
            $table->string('seller_phone');
            $table->bigInteger('price');
            $table->boolean('isApproved')->default(false);
            $table->text('description');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('bikes');
    }
}

