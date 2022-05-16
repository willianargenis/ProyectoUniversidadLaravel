<?php

namespace ProyectoUniversidad;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    protected $table='grado'
    protected $primaryKey='IdGrado';
    public $timestamps=false;

    protected $fillable=[
      'Grado'
    ];

    protected $guarded =[
       
    ];




    

}
