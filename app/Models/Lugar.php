<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Libro;

class Lugar extends Model
{
    use HasFactory;
    protected $table = "lugares";
    protected $fillable = ["ciudad"];
    public $timestamps = false;


    
    public function libro(){
        return $this->hasOne(Libro::class);
    }
    
}
