<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    ////////////ACABEEEEEEEEEEEEEEE LIBROOOOOOOOOOO
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
            titulo varchar(99) NOT NULL,  
            year INT NOT NULL,
            costo double NOT NULL,
            stock int NOT NULL,
            observacion varchar(255),
            editorial_id int,
            lugar_id int,
            coleccion_id int,
            fondo int,
            CONSTRAINT pk_libros PRIMARY KEY(id),
            CONSTRAINT pk_libros_lugares FOREIGN KEY(lugar_id) REFERENCES lugares(id) ON DELETE CASCADE,
            CONSTRAINT pk_libros_editoriales FOREIGN KEY(editorial_id) REFERENCES editoriales(id) ON DELETE CASCADE,
            CONSTRAINT pk_libros_colecciones FOREIGN KEY(coleccion_id) REFERENCES colecciones(id) ON DELETE CASCADE
            
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
