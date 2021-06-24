<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAutoresLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       DB::statement("
        CREATE TABLE autor_libro(
        id int NOT NULL AUTO_INCREMENT,
        libro_id int NOT NULL,
        autor_id int NOT NULL,
        CONSTRAINT pk_autores_libros PRIMARY KEY(id),
        CONSTRAINT fk_autores_libros1 FOREIGN KEY(autor_id) REFERENCES autores(id) ON DELETE CASCADE,
        CONSTRAINT fk_autores_libros2 FOREIGN KEY(libro_id) REFERENCES libros(id) ON DELETE CASCADE 
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
        Schema::dropIfExists('autor_libro');
    }
}
