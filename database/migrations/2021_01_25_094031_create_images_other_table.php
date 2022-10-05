<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesOtherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images_other', function (Blueprint $table) {
            $table->id();
            $table->integer('type')->nullable()->comment('1 > company image');
            $table->string('image_path')->nullable();
            $table->string('link')->nullable();
            $table->string('alt')->nullable();
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
        Schema::dropIfExists('images_other');
    }
}
