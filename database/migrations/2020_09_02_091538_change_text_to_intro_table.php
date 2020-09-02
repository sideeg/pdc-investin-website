<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTextToIntroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('intro', function (Blueprint $table) {
            $table->renameColumn('text_ar','intro_ar');
            $table->renameColumn('text_en','intro_en');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('intro_in_intro', function (Blueprint $table) {
            //
        });
    }
}
