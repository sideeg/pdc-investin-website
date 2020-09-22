<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sector', function (Blueprint $table) {
            $table->id();
            $table->text('intro_en');
            $table->text('intro_ar');
            $table->string('sector_name_en');
            $table->string('sector_name_ar');
            $table->string('icon');
            $table->text('text_en');
            $table->text('text_ar');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('Brief_en');
            $table->string('Brief_ar');
            $table->string('background_image');
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
        Schema::dropIfExists('sector');
    }
}
