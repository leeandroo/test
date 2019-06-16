<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "empleado";
    protected $primaryKey = "idempleado";
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable =[
        'idempleado',
        'nombre',
        'cargo',
        'depto',
    	'valor_hora',
    	'tipo_empleado',
    	'estado'
    ];

    protected $guarded =[

    ];
}
