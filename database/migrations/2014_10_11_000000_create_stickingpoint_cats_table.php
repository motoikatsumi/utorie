<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStickingPointCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stickingpoint_cats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('genre_code');
            $table->string('name');
            $table->timestamps();
        });

        // Schema::table('stickingpoint_cats', function (Blueprint $table) {
        //     $table->foreign('genre_code')->references('id')->on('genres');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stickingpoint_cats');
    }
}
