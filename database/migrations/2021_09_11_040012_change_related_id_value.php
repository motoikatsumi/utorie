<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeRelatedIdValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('related_companies', function (Blueprint $table) {
            // $table->bigInteger('related_id')->nullable()->change();
            DB::statement('ALTER TABLE `related_companies` MODIFY `related_id` INTEGER UNSIGNED NULL;');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::statement('ALTER TABLE `related_companies` MODIFY `related_id` INTEGER UNSIGNED NOT NULL;');
    }
}
