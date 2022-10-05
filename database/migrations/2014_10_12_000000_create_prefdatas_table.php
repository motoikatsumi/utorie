<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrefDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prefdatas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->Integer('pref_code');
            $table->string('search_text');
            $table->string('url_text');
            $table->string('map_area')->nullable();            
            $table->text('html')->nullable();
            $table->tinyInteger('del_flg')->default(1);
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
        Schema::dropIfExists('prefdatas');
    }
}
