<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCoolecionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE colecciones(
            id int NOT NULL AUTO_INCREMENT,
            nombre varchar(99) NOT NULL UNIQUE,
            CONSTRAINT pk_coleccion PRIMARY KEY(id)
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
        Schema::dropIfExists('cooleciones');
    }
}
