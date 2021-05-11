<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCoordinadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE coordinadores(
            id int NOT NULL AUTO_INCREMENT,
            nombre1 varchar(99),
            nombre2 varchar(99),
            apellido1 varchar(99),
            apellido2 varchar(99),
            CONSTRAINT pk_coordinadores PRIMARY KEY(id)
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
        Schema::dropIfExists('coordinadores');
    }
}
