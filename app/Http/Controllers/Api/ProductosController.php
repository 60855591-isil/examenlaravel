<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
        return Categorias::all();
    }

    public function store(Request $request)
    {
        $categoria = Categorias::create($request->all());
        return response()->json($categoria, 201);
    }
}