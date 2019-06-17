<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = "cita";
    protected $primaryKey = "idcita";
    protected $foreignKey = "iduser";
    public $timestamps = false;

    protected $fillable =[
    	'iduser',
        'servicio',
    	'estado_whatsapp',
        'estado_cita',
        'descripcion'
    ];

    protected $guarded =[

    ];
}
