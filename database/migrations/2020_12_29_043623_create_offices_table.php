<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id')->nullable();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('access')->nullable();
            $table->string('hours')->nullable();
            $table->string('holiday')->nullable();
            $table->string('tel')->nullable();
            $table->string('pref_id')->nullable();
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
        Schema::dropIfExists('offices');
    }
}
