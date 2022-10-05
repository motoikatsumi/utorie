<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->id();            
            $table->unsignedBigInteger('genre_code');
            $table->string('name');
            $table->string('display_name')->nullable();
            $table->string('search_text')->nullable();
            $table->string('breadcrumb')->nullable();
            $table->string('title_h2')->nullable();
            $table->string('url_text');
            $table->string('explain')->nullable();
            $table->text('html')->nullable();
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
        Schema::dropIfExists('genres');
    }
}
