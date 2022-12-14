<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //LA TABLA A CONECTAR
    protected $table  = "continents";
    //La clave primaria de esa tabla
    protected $primaryKey = "continent_id";
    //omitir campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion entre continente y sus regiones
    public function regiones(){
        //Parameter
        //1. Linked model
        //2.Foreign Key of current model 
        // into related model Region

        return $this->hasMany(Region::class, 'continent_id'); 
    }
}
