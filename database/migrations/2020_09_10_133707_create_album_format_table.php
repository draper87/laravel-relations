<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumFormatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_format', function (Blueprint $table) {
          $table->unsignedBigInteger('album_id');
          $table->foreign('album_id')->references('id')->on('albums');
          $table->unsignedBigInteger('format_id');
          $table->foreign('format_id')->references('id')->on('formats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_format');
    }
}
