<?php

namespace Nicapymes\Http\Controllers;

use Illuminate\Http\Request;
use Nicapymes\Http\Requests;
use Nicapymes\Categoria;
use Illuminate\Support\Facades\Redirect;
use Nicapymes\Http\Requests\CategoriaFormRequest;
use DB;

class ControlaadorVista extends Controller
{
    public function vi(){
    	return view();
    }
}
