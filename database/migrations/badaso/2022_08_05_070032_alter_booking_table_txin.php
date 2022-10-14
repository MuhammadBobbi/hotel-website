<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterBookingTableTxin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::table('booking', function (Blueprint $table) {
            $table->dropForeign(['no_kamar']);
			$table->foreign('no_kamar')->references('id')->on('room')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::table('booking', function (Blueprint $table) {
            $table->dropForeign(['no_kamar']);
			$table->foreign('no_kamar')->references('id')->on('room')->onUpdate('cascade');
        });

    }
}
