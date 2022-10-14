<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUnsettingTableEjbx extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::table('unsetting', function (Blueprint $table) {
            $table->boolean('minggu')->charset('')->collation('')->change();
			$table->boolean('selasa')->charset('')->collation('')->change();
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
        Schema::table('unsetting', function (Blueprint $table) {
            $table->tinyInteger('minggu')->charset('')->collation('')->change();
			$table->tinyInteger('selasa')->charset('')->collation('')->change();
        });
    }
}
