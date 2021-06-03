<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Libro;

class Editorial extends Model
{
    use HasFactory;
    protected $table = "editoriales";
    public $timestamps = false;


    public function libro()
    {
        return $this->hasMany(Libro::class);
    }
}
