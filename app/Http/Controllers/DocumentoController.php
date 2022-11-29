<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
class DocumentoController extends Controller
{
    public function submitCompraventa(Request $request)
    {
        //CAMBIAR POR EL INGRESO DE CADA CAMPOOOOOOOOO
        $data = $request->all();
        DB::table('documento')->insert($data);
        $status = "200";

        return $status;
        // SE GUARDA LA COPIA DEL DOCUMENTO PARA TENER EL HISTORIAL.
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/identities', [
            'headers' => [
                "type" => 'SendTransaction',
                "signer" => 'prueba',
                "channel" => 'default-channel',
                "chaincode" => 'asset_transfer'
            ],
            'func' => 'CreateAsset',
            'args' => [
                $request->input('id'), //llamar la funcion autoincrementable, es el idAsset del documento
                $request->input('owner'),
                $request->input('nombre'),
                $request->input('calle'),
                $request->input('ncalle'),
                $request->input('piso'),
                $request->input('npiso'),
                $request->input('comuna'),
                $request->input('precio'),
                $request->input('metodopago'),
                $request->input('nplano'),
                $request->input('ndocumento'),
                $request->input('fojapropiedad'),
                $request->input('nfoja'),
                $request->input('norte'),
                $request->input('sur'),
                $request->input('este'),
                $request->input('oeste'),
                $request->input('validacioncomprador'),
                $request->input('validacionvendedor'),
                $request->input('validacionnotario'),
                $request->input('validacionconservador')
            ]
        ]);
    }

    public function firmar(){
        
    }
}
