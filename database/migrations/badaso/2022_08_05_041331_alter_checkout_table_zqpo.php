<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCheckoutTableZqpo extends Migration
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
            $table->string('name', 200)->charset('')->collation('')->change();
			$table->bigInteger('no_kamar')->charset('')->collation('')->change();
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
            $table->text('name')->charset('')->collation('')->change();
			$table->integer('no_kamar')->charset('')->collation('')->change();
        });
    }
}
