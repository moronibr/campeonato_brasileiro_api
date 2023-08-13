<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brasileirao;

class brasileiraoAPIController extends Controller
{
    public function add(Request $request)
    {
        $brasileirao = new Brasileirao;
        $brasileirao->ano = $request->ano;
        $brasileirao->campeao = $request->campeao;
        $brasileirao->vice = $request->vice;
        $brasileirao->terceiro = $request->terceiro;
        $brasileirao->quarto = $request->quarto;
        $brasileirao->quinto = $request->quinto;
        $brasileirao->sexto = $request->sexto;
        $brasileirao->artilheiro = $request->artilheiro;
        $brasileirao->gols = $request->gols;
        $brasileirao->save();
        return response()->json([
            "message" => "Brasileirao record created"
        ], 201);
        
    }

    public function show()
    {
        return Brasileirao::all();
    }

    public function showById($id)
    {
        return Brasileirao::find($id);
    }
}
