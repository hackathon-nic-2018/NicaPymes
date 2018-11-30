<?php

namespace Nicapymes;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'Categoria';
    protected $primaryKey = 'idcategoria';
    protected $fillable = [
    	'Nombre'
    	'Descripcion'
    	'Estado'
    ];
}
