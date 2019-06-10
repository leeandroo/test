<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = "cita";
    protected $primaryKey = "idcita";
    protected $foreignKey = "idcliente";
    public $timestamps = false;
    public $cliente;

    protected $fillable =[
    	'idcliente',
        'servicio',
    	'fecha',
    	'estado_whatsapp',
    	'estado_cita'
    ];

    protected $guarded =[

    ];
}
