<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category')->default('abstract'); // abstract, miniature, portrait, collection
            $table->string('medium')->nullable();
            $table->string('size')->nullable();
            $table->string('year')->nullable();
            $table->text('description')->nullable();
            $table->string('path');
            $table->string('media_type')->default('image'); //image, video
            $table->addedby('user_id');
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
        Schema::dropIfExists('galleries');
    }
}
