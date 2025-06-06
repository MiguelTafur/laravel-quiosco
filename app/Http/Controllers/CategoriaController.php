<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriaColletion;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index() 
    {
        // return response()->json(['categorias' => Categoria::all()]);

        return new CategoriaColletion(Categoria::all());
    }
}
