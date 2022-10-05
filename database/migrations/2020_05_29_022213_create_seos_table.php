<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('page_name')->nullable();
            $table->string('route')->unique();
            $table->boolean('page_status')->default(1)->nullable(); //static (1) or dynamic (0)
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->string('repeat_keyword_description')->default(1)->nullable();
            $table->string('is_index')->default(1)->nullable();
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
        Schema::dropIfExists('seos');
    }
}
