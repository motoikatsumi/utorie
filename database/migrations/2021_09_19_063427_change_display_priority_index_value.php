<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDisplayPriorityIndexValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('companies', function (Blueprint $table) {
        //     $table->integer('display_priority')->default('100')->change();
        //     $table->string('index')->default('yes')->change();
        // });
        Schema::table('companies', function (Blueprint $table) {
            DB::statement('ALTER TABLE `companies` MODIFY `display_priority` INTEGER default 100;');
            DB::statement("ALTER TABLE `companies` MODIFY `index` varchar(10) default 'yes';");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
        });
    }
}
