<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTableUpnv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('bookings', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->string('name', 50);
			$table->dateTime('tgl_checkin');
			$table->dateTime('tgl_checkout');
			$table->bigInteger('no_kamar')->unsigned();
			$table->integer('total_harga');
			$table->integer('total_bayar');
			$table->timestamps();
        });

        Schema::table('bookings', function (Blueprint $table) {
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
        Schema::dropIfExists('bookings');
    }
}
