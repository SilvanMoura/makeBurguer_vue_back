<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Burguer;

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
        $burguer = new Burguer;

        $resOptionals = "";
        $count = count($request['optionals']);

        foreach ($request['optionals'] as $key => $value) {
            $resOptionals .= "$value";

            if ($key < $count - 2) {
                $resOptionals .= ", ";
            } elseif ($key == $count - 2) {
                $resOptionals .= " e ";
            }
        }

        $burguer->name = $request['name'] ;
        $burguer->bread = $request['bread'];
        $burguer->meat = $request['meat'];
        $burguer->status = $request['status'];
        $burguer->optionals = $resOptionals;

        $burguer->save();
        
        return 'success';
    }
}
