<?php

namespace Nicapymes\Http\Controllers;

use Illuminate\Http\Request;
use Nicapymes\Http\Requests;
use Nicapymes\Categoria;
use Illuminate\Support\Facades\Redirect;
use Nicapymes\Http\Requests\CategoriaFormRequest;
use DB;

class CategoriaController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $categorias=DB::table('categoria')->where('nombre','LIKE','%'.$query.'%')
            ->where ('condicion','=','1')
            ->orderBy('idcategoria','desc')
            ->paginate(7);
            return view('index',["categorias"=>$categorias,"searchText"=>$query]);
        }
    }
    
}
