<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->string('nickname')->nullable();
            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('posted_at')->nullable();
            $table->tinyInteger('satisfaction')->nullable();
            $table->tinyInteger('price')->nullable();
            $table->tinyInteger('performance')->nullable();
            $table->tinyInteger('proposal_ability')->nullable();
            $table->tinyInteger('free_choice')->nullable();
            $table->tinyInteger('maintenance_support')->nullable();
            $table->string('review_title')->nullable();
            $table->text('review_content')->nullable();
            $table->integer('review_show')->nullable()->default(0);
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
