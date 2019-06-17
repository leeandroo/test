<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cita;

class DetalleUsuario extends Model
{
    protected $table = "detalle_usuario";
    protected $primaryKey = "iddetalle_usuario";
    public $timestamps = false;

    protected $fillable =[
        'iduser',
    	'telefono',
        'direccion',
        'tipo_cliente'
    ];

    protected $guarded =[

    ];
}
