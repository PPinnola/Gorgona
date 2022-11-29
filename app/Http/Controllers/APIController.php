<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index()
    {
       $response = 
            Http::get('http://107.20.132.122:8000/api/queryallcompraventa');
       //return response()->json($response);
       $data = json_decode($response->getBody(), true);
       dd($data);
    }

    public function create(Request $request)
    {
        $response = 
        Http::post('http://107.20.132.122:8000/api/addcompraventa', [
                'compraventaid' => 'DESDELARAVEL',
                'comprador' => 'Laravel Contributor',
                'conservador' => 'Laravel Contributor',
                'contrato' => 'Laravel Contributor',
                'notario' => 'Laravel Contributor',
                'vendedor' => 'Laravel Contributor',
        ]);
        return $response;
    }

    public function edit(Request $request)
    {
        $response = 
        Http::put('http://107.20.132.122:8000/api/changecompraventaconservador/DESDELARAVEL', [
                'compraventa_index' => 'DESDELARAVEL',
                'conservador' => 'firmado',
        ]);
        return $response;
    }
    public function queryone()
    {
       $response = 
            Http::get('http://107.20.132.122:8000/api/query/DESDELARAVEL');
       //return response()->json($response);
       $data = json_decode($response->getBody(), true);
       dd($data);
    }

}
