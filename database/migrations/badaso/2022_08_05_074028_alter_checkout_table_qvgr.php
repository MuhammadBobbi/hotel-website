<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCheckoutTableQvgr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::table('checkout', function (Blueprint $table) {
            $table->dropColumn('name');
        });

        Schema::table('checkout', function (Blueprint $table) {
            $table->bigInteger('no_kamar')->unsigned()->charset('')->collation('')->change();
        });

        } catch (PDOException $ex) {
            $this->down();
            throw $ex;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('checkout', function (Blueprint $table) {
            $table->string('name', 50);
        });

        Schema::table('checkout', function (Blueprint $table) {
            $table->bigInteger('no_kamar')->unsigned(false)->charset('')->collation('')->change();
        });
    }
}
