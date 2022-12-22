<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOverAndOutToNavTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nav', function (Blueprint $table) {
            $table->string('over')->after('color');
            $table->string('out')->after('over');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nav', function (Blueprint $table) {
             $table->dropColumn('over');
             $table->dropColumn('out');
        });
    }
}
