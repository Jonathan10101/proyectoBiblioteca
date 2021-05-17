<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE autores(
            id int NOT NULL AUTO_INCREMENT,
            nombre1 varchar(99) NOT NULL,
            nombre2 varchar(99),
            apellido1 varchar(99),
            apellido2 varchar(99),
            CONSTRAINT pk_autor PRIMARY KEY(id)
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
        Schema::dropIfExists('autores');
    }
}
