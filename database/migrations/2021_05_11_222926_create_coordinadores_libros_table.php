<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCoordinadoresLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       DB::statement("
        CREATE TABLE coordinadores_libros(
        id int NOT NULL AUTO_INCREMENT,
        libro_id int NOT NULL,
        coordinador_id int NOT NULL,        
        CONSTRAINT pk_coordinadores_libros PRIMARY KEY(id),
        CONSTRAINT fk_coordinadores_libros1 FOREIGN KEY(coordinador_id) REFERENCES coordinadores(id),
        CONSTRAINT fk_coordinadores_libros2 FOREIGN KEY(libro_id) REFERENCES libros(id)
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
        Schema::dropIfExists('coordinadores_libros');
    }
}
