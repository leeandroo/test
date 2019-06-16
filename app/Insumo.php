<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $table = "insumo";
    protected $primaryKey = "idinsumo";    
    public $timestamps = false;
    public $categoria;

    protected $fillable =[
        'idcategoria',
        'codigo',
        'nombre',
    	'stock',
    	'estado'
    ];

    protected $guarded =[

    ];

}
