<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Libro;

class Coleccion extends Model
{
    use HasFactory;
    protected $table = "colecciones";
    public $timestamps = false;
    protected $guarded = [];


    public function libro(){
        return $this->hasMany(Libro::class);
    }
}
