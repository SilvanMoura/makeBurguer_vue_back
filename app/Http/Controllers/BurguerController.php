<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\User;

class BurguerController extends Controller
{
    public function burguerIngredients()
    {
        $tabela = 'ingredients';
        
        $dados = DB::table($tabela)->get();

        return response()->json($dados);
    }

    public function burguerStatus()
    {
        $tabela = 'status';
        
        $dados = DB::table($tabela)->get();

        return response()->json($dados);
    }

    public function burguerCreate(Request $request)
    {
        
    }
}
