<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropCheckoutTableXkvp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::dropIfExists('checkout');

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
        Schema::create('checkout', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
			$table->string('name', 200);
			$table->bigInteger('no_kamar');
			$table->timestamps();
			$table->dateTime('checkout_date');
        });
    }
}
