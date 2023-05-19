<?php

namespace App\Http\Controllers;

use App\Models\Cuestion;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function storeCuestion(Request $request)
    {
        $cuestion = Cuestion::create($request->all());

        return response()->json($cuestion, 201);
    }

    public function callApiStoreCuestion(Request $request){
        $cuestion = new Cuestion();
        $cuestion->enunciado= $request->enunciado;
        $cuestion->estado= $request->estado;

        Http::withBody(json_encode($cuestion), 'application/json')

    ->post("http://localhost:80/quick-list/public/api/cuestiones");
    $cuestiones = Cuestion::all();
    return view('listado', ['cuestiones' => $cuestiones]);


    }

    public function getCuestiones(Request $request){
        $cuestiones = Cuestion::all();
        return $cuestiones;
    }

}
