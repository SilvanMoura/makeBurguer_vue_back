<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class BurguerController extends Controller
{
    public function burguerIngredients()
    {
        $tabela = 'ingredients';
        
        $dados = DB::table($tabela)->get();

        return response()->json($dados);
    }
}
