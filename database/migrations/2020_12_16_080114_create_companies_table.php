<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_name_2')->nullable();
            $table->string('order_character')->nullable();
            $table->string('company_title')->nullable();
            $table->string('company_content')->nullable();
            $table->tinyInteger('sticking_point')->nullable();
            $table->string('possible_area')->nullable();
            $table->string('impossible_area')->nullable();
            $table->string('address')->nullable();
            $table->string('establishment_date')->nullable();
            $table->string('representative')->nullable();
            $table->string('capital')->nullable();
            $table->string('employees')->nullable();
            $table->string('unit_price')->nullable();
            $table->string('construction_results')->nullable();
            $table->string('handling_method')->nullable();
            $table->string('after_warranty')->nullable();
            $table->string('construction_permit')->nullable();
            $table->string('home_page')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('line')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('youtube')->nullable();
            $table->string('email')->nullable();
            $table->string('html')->nullable();
            $table->string('remarks')->nullable();
            $table->tinyInteger('display_priority')->nullable()->default(0);
            $table->tinyInteger('display_flg')->nullable()->default(0);
            $table->tinyInteger('index')->nullable();
            $table->tinyInteger('star_review')->nullable();
            $table->tinyInteger('delete_flg')->nullable()->default(0);
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
        Schema::dropIfExists('stores');
    }
}
