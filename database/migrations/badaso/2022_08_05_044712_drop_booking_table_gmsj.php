<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropBookingTableGmsj extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::dropIfExists('booking');

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
        Schema::create('booking', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
			$table->string('name', 100);
			$table->dateTime('tgl_checkin');
			$table->dateTime('tgl_checkout');
			$table->bigInteger('no_kamar');
			$table->integer('total_harga');
			$table->integer('total_bayar');
			$table->timestamps();
        });
    }
}
