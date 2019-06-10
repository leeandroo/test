<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cita;

class Cliente extends Model
{
    protected $table = "cliente";
    protected $primaryKey = "idcliente";
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable =[
        'idcliente',
        'nombre',
        'apellido',
    	'telefono',
    	'correo',
    	'direccion',
    	'tipo_cliente'
    ];

    protected $guarded =[

    ];

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}
