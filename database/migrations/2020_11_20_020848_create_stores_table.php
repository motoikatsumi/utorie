<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('store_name')->nullable();
            $table->string('brand')->unique();
            $table->string('province')->unique();
            $table->string('city');
            $table->string('address');
            $table->string('direction_description');
            $table->string('tel');
            $table->string('bussiness_hours');
            $table->string('regular_holiday');
            $table->tinyInteger('packing_lot')->comment('0: no; 1: yes');;
            $table->string('license_to_hold');
            $table->string('store_subject');
            $table->string('store_content');
            $table->string('store_img');
            $table->string('about_store');
            $table->string('scraping_url');
            $table->string('affiliate_page');
            $table->string('affiliate_banner');
            $table->tinyInteger('product_id');
            $table->string('purchase_method');
            $table->string('other_condition');
            $table->string('correspondence_area');
            $table->string('remake');
            $table->tinyInteger('display_flg');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('html');
            $table->tinyInteger('address_flg')->comment('0: show; 1: hide');
            $table->tinyInteger('noindex')->comment('0: no; 1: yes');
            $table->tinyInteger('delete_flg');
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
