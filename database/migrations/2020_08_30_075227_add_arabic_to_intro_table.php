<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddArabicToIntroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('intro', function (Blueprint $table) {
            $table->text('text_ar');
            $table->renameColumn('text',"text_en");
            $table->renameColumn('section_name',"section_name_en");
            $table->string('section_name_ar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('intro', function (Blueprint $table) {
            //
        });
    }
}
