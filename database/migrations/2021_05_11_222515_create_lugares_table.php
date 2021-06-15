<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateLugaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE lugares(
            id int NOT NULL AUTO_INCREMENT,
            ciudad varchar(99) NOT NULL,
            estado varchar(99) DEFAULT ' ',
            pais varchar(99) DEFAULT ' ',
            CONSTRAINT pk_lugar PRIMARY KEY(id)
            )ENGINE=INNODB;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lugares');
    }
}
