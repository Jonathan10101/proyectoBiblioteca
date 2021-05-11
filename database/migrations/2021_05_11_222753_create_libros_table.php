<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE libros(
            id int NOT NULL AUTO_INCREMENT,
            titulo varchar(99), 
            costo double,
            nEjemplares int,
            year int,
            lugar_id int,
            editorial_id int,
            coleccion_id int,
            observacion text,
            CONSTRAINT pk_libros PRIMARY KEY(id),
            CONSTRAINT pk_libros_lugares FOREIGN KEY(lugar_id) REFERENCES lugares(id),
            CONSTRAINT pk_libros_editoriales FOREIGN KEY(editorial_id) REFERENCES editoriales(id),
            CONSTRAINT pk_libros_colecciones FOREIGN KEY(coleccion_id) REFERENCES colecciones(id)
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
        Schema::dropIfExists('libros');
    }
}
