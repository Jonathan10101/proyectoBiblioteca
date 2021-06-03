<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lugar;
use App\Models\Editorial;
use App\Models\Coleccion;
use App\Models\Ubicacion;
use App\Models\Coordinador;

class Libro extends Model
{
    use HasFactory;
    protected $timestamp = false;
    public $table = "libros";



    public function lugar()
    {
        return $this->belongsTo(Lugar::class);
    }


    public function editorial()
    {
        return $this->belongsTo(Editorial::class);
    }


    public function coleccion(){
        return $this->belongsTo(Coleccion::class);
    }

    public function ubicacion(){
        return $this->belongsToMany(Ubicacion::class);
    }

    public function autor(){
        return $this->belongsToMany(Autor::class);
    }

    public function coordinador(){
        return $this->belongsToMany(Coordinador::class);
    }

}
