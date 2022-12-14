<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{   
        //LA TABLA A CONECTAR
        protected $table  = "regions";
        //La clave primaria de esa tabla
        protected $primaryKey = "region_id";
        //omitir campos de auditoria
        public $timestamps = false;
    use HasFactory;

    //1. to much : region and country 
    //Relationship

    public function countries(){
        return $this->hasMany(Country::class, 'region_id');
    }
}
