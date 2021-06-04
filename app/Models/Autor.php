<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Libro;

class Autor extends Model
{
    use HasFactory;
    protected $table = "autores";
    public $timestamps = false;
    protected $guarded = [];

    public function libro(){
        return $this->belongsToMany(Libro::class);
    }
    
}
