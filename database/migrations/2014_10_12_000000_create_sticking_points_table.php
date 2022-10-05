<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStickingPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sticking_points', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('genre_code');
            $table->unsignedBigInteger('stickingpoint_cat');
            $table->string('name')->nullable();
            $table->string('supplement_text')->nullable();
            $table->string('select_item')->nullable();
            $table->string('breadcrumb')->nullable();
            $table->string('title_h1')->nullable();
            $table->string('title_h2')->nullable();
            $table->string('url_text')->nullable();
            $table->tinyInteger('view_type')->default(1);
            $table->tinyInteger('is_sup')->default(0);
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
        Schema::dropIfExists('sticking_points');
    }
}
