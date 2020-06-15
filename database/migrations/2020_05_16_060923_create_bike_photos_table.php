<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bike_photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('bike_id')->unsigned();
            $table->foreign('bike_id')->references('id')->on('bikes')->onDelete('cascade');
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
        Schema::dropIfExists('bike_photos');
    }
}
