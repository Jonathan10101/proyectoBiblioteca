<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionesLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE libro_ubicacion(
            id int NOT NULL AUTO_INCREMENT,
            libro_id int NOT NULL,
            ubicacion_id int NOT NULL,
            CONSTRAINT pk_ubicaciones_libros PRIMARY KEY(id),
            CONSTRAINT fk_ubicaciones_libros1 FOREIGN KEY(ubicacion_id) REFERENCES ubicaciones(id) ON DELETE CASCADE ,
            CONSTRAINT fk_ubicaciones_libros2 FOREIGN KEY(libro_id) REFERENCES libros(id) ON DELETE CASCADE 
            )ENGINE=INNODB;"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libro_ubicacion');
    }
}
