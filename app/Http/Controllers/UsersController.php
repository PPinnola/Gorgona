<?php

namespace App\Http\Controllers;

use App\Models\comuna;
use Illuminate\Http\Request;
use App\Models\documento;
use App\Models\entidad;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\BadResponseException;
use Symfony\Component\HttpClient\HttpClient;
use Ramsey\Uuid\Uuid;

class UsersController extends Controller
{

    public function indexNotario()
    {
        $sesion = Session::get('cedulaUsuario');
        $compraventas = documento::getDocumentoNotario($sesion);

        return view('notario.index')->with('compraventas', $compraventas);
    }

    public function verDocumentoNotario($idDoc)
    {
        $compraventas = documento::getDocumentoEspecifico($idDoc);
        //Traer Datos de la blockchain para ver las firmas *Temporales*
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/query', [
            'headers' => [
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer'
            ],
            'func' => 'ReadAsset',
            'args' => [
                "$compraventas->idAsset",
            ],
            'strongread' => 'true',
        ],);
        //
        $var = $response->json("result");
        $rutVen = $compraventas->rutVendedor;
        // if ($var['IdDocumentoTemporal'] != $idDoc) {
        //     $sesion = Session::get('cedulaUsuario');
        //     $compraventas = documento::getDocumentoClienteVentas($sesion);
        //     return view('cliente.ventas')->with('compraventas', $compraventas);
        // }
        if ($idDoc == $var['IdDocumentoTemporal']) {
            if ($var['ValidacionCompradorTemporal'] != "FIRMADO") {
                $boton = "rechazado";
            } else {
                if ($var['ValidacionNotarioTemporal'] == "EMPTY") {
                    $boton = "noFirmado";
                } else if ($var['ValidacionNotarioTemporal'] == "FIRMADO") {
                    $boton = "firmado";
                } else {
                    $boton = "rechazado";
                }
            }
        } else {
            $boton = "rechazado";
        }
        return view('notario.ver')->with('compraventas', $compraventas)->with('boton', $boton);
    }

    public function indexConservador()
    {
        $sesion = Session::get('cedulaUsuario');
        $compraventas = documento::getDocumentoConservador($sesion);

        return view('conservador.index')->with('compraventas', $compraventas);
    }
    public function verDocumentoConservador($idDoc)
    {
        $compraventas = documento::getDocumentoEspecifico($idDoc);
        //Traer Datos de la blockchain para ver las firmas *Temporales*
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/query', [
            'headers' => [
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer'
            ],
            'func' => 'ReadAsset',
            'args' => [
                "$compraventas->idAsset",
            ],
            'strongread' => 'true',
        ],);
        //
        $var = $response->json("result");
        $rutVen = $compraventas->rutVendedor;
        // if ($var['IdDocumentoTemporal'] != $idDoc) {
        //     $sesion = Session::get('cedulaUsuario');
        //     $compraventas = documento::getDocumentoClienteVentas($sesion);
        //     return view('cliente.ventas')->with('compraventas', $compraventas);
        // }
        if ($idDoc == $var['IdDocumentoTemporal']) {
            if ($var['ValidacionNotarioTemporal'] != "FIRMADO") {
                $boton = "rechazado";
            } else {
                if ($var['ValidacionConservadorTemporal'] == "EMPTY") {
                    $boton = "noFirmado";
                } else if ($var['ValidacionConservadorTemporal'] == "FIRMADO") {
                    $boton = "firmado";
                } else {
                    $boton = "rechazado";
                }
            }
        } else {
            $boton = "rechazado";
        }
        return view('conservador.ver')->with('compraventas', $compraventas)->with('boton', $boton);
    }
    public function indexCliente()
    {
        //Mis compras
        $sesion = Session::get('cedulaUsuario');
        $compraventas = documento::getDocumentoClienteCompras($sesion);

        return view('cliente.index')->with('compraventas', $compraventas);
    }
    public function indexClienteVentas()
    {
        //Mis Ventas
        $sesion = Session::get('cedulaUsuario');
        $compraventas = documento::getDocumentoClienteVentas($sesion);

        return view('cliente.ventas')->with('compraventas', $compraventas);
    }
    public function indexClientePropiedades()
    {
        //Mis Ventas
        $sesion = Session::get('cedulaUsuario');
        $compraventas = documento::getDocumentoClienteVentas($sesion);
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/query', [
            'headers' => [
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer'
            ],
            'func' => 'GetAllAssets',
            'args' => [],
            'strongread' => 'true',
        ],);
        //
        $var = $response->json("result");
        $i = 0;
        $array = [];
        $arrayDoc = [];
        foreach ($var as $var) {
            if ($var['Owner'] == $sesion) {
                $array[$i] = $var['IdDocumentoActual'];
                $arrayDoc[$i] = documento::getDocumentoEspecifico($var['IdDocumentoActual']);
                $i += 1;
            }
        };
        if (count($array) > 0) {
            
            return view('cliente.mispropiedades')->with('compraventas', $arrayDoc);
        } else {
            
            return view('cliente.mispropiedades')->with('compraventas', $arrayDoc);
            
        } 
    }
    public function verDocumentoClienteVenta($idDoc)
    {
        $compraventas = documento::getDocumentoEspecifico($idDoc);
        //Traer Datos de la blockchain para ver las firmas *Temporales*
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/query', [
            'headers' => [
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer'
            ],
            'func' => 'ReadAsset',
            'args' => [
                "$compraventas->idAsset",
            ],
            'strongread' => 'true',
        ],);
        //
        $var = $response->json("result");
        $rutVen = $compraventas->rutVendedor;
        // if ($var['IdDocumentoTemporal'] != $idDoc) {
        //     $sesion = Session::get('cedulaUsuario');
        //     $compraventas = documento::getDocumentoClienteVentas($sesion);
        //     return view('cliente.ventas')->with('compraventas', $compraventas);
        // }
        if ($idDoc == $var['IdDocumentoTemporal']) {
            if ($var['ValidacionVendedorTemporal'] == "EMPTY") {
                $boton = "noFirmado";
            } else if ($var['ValidacionVendedorTemporal'] == "FIRMADO") {
                $boton = "firmado";
            } else {
                $boton = "rechazado";
            }
        } else {
            $boton = "rechazado";
        }
        return view('cliente.verVenta')->with('compraventas', $compraventas)->with('boton', $boton);
    }
    public function verDocumentoClientePropiedad($idDoc)
    {
        $compraventas = documento::getDocumentoEspecifico($idDoc);
        return view('cliente.verPropiedad')->with('compraventas', $compraventas);
    }
    public function verDocumentoClienteCompra($idDoc)
    {
        $compraventas = documento::getDocumentoEspecifico($idDoc);
        //Traer Datos de la blockchain para ver las firmas *Temporales*
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/query', [
            'headers' => [
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer'
            ],
            'func' => 'ReadAsset',
            'args' => [
                "$compraventas->idAsset",
            ],
            'strongread' => 'true',
        ],);
        //
        $var = $response->json("result");
        $rutCom = $compraventas->rutComprador;
        // if ($var['IdDocumentoTemporal'] != $idDoc) {
        //     $sesion = Session::get('cedulaUsuario');
        //     $compraventas = documento::getDocumentoClienteVentas($sesion);
        //     return view('cliente.ventas')->with('compraventas', $compraventas);
        // }
        if ($idDoc == $var['IdDocumentoTemporal']) {
            if ($var['ValidacionVendedorTemporal'] != "FIRMADO") {
                $boton = "rechazado";
            } else {
                if ($var['ValidacionCompradorTemporal'] == "EMPTY") {
                    $boton = "noFirmado";
                } else if ($var['ValidacionCompradorTemporal'] == "FIRMADO") {
                    $boton = "firmado";
                } else {
                    $boton = "rechazado";
                }
            }
        } else {
            $boton = "rechazado";
        }

        return view('cliente.verCompra')->with('compraventas', $compraventas)->with('boton', $boton);
    }

    public function indexTrabajador()
    {
        $comuna = comuna::all();
        return view('trabajador.formfinal')->with('comuna', $comuna);
    }
    public function registrarTrabajador()
    {
        $comuna = comuna::all();
        return view('trabajador.registrar')->with('comuna', $comuna);
    }

    public function enrollUsuario(Request $request)
    {
        $usuario = new Entidad;
        // $validator =  Validator::make($request->all(), [
        //     'primerNombre' => 'required|string|max:255|regex:/^[a-zA-Z]+$/u',
        //     'segundoNombre' => 'nullable|string|max:255|regex:/^[a-zA-Z]+$/u',
        //     'tercerNombre' => 'nullable|string|max:255|regex:/^[a-zA-Z]+$/u',
        //     'cedulaIdentidad' => 'required|unique:entidad,rutEntidad',
        //     'primerApellido' => 'required|string|max:255|regex:/^[a-zA-Z]+$/u',
        //     'segundoApellido' => 'nullable|string|max:255|regex:/^[a-zA-Z]+$/u',
        //     'correoElectronico' => 'required|email|regex:/(.+)@(.+)\.(.+)/i',
        //     'telefono' => 'required|digits_between:9,9|integer|numeric',
        // ]); else {
        //REGISTRA EL USUARIO EN LA BLOCKCHAIN
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/identities', [
            'name' => $request->input('rut'),
            'type' => 'client',
            'maxEnrollments' => 0,
            'attributes' => [
                "nombre" => $request->input('nombre'),
                "estadoCivil" => $request->input('estadoCivil'),
                "nacionalidad" => $request->input('nacionalidad'),
                "fechaNacimiento" => $request->input('fechaNacimiento'),
                "profesion" => $request->input('profesion'),
                "correoElectronico" => $request->input('correo'),
                "telefono" => $request->input('telefono'),
                "calleDireccion" => $request->input('calle'),
                "numeroDireccion" => $request->input('numero'),
                "comunaDireccion" => $request->input('comuna')
            ]
        ]);
        // dd($response);
        // SE LE DEVUELVE EL SECRET Y SE GUARDA
        $apiResult = json_decode($response->getBody(), false);
        $contrasenaTemporal = rand(0, 99999);
        $usuario->rutEntidad = $request->input('rut');
        $usuario->secreto = $apiResult->secret;
        $usuario->contrasenaEntidad = Hash::make($contrasenaTemporal);
        $usuario->rolEntidad = "3";
        $usuario->estado = "1";
        $usuario->save();
        // SE LE ENVÍA UN CORREO A LA PERSONA CON SU CONTRASEÑA TEMPORAL
        $mail_data = [
            'recipient' => $request->input('correo'),
            'fromEmail' => 'gorgonablockchain@gmail.com',
            'fromName' => 'Bienvenido/a',
            'subject' => 'Contraseña provisoria',
            'clave' => $contrasenaTemporal,
        ];
        Mail::send('email-login', $mail_data, function ($message) use ($mail_data) {
            $message->to($mail_data['recipient'])
                ->from($mail_data['fromEmail'], $mail_data['fromName'])
                ->subject($mail_data['subject']);
        });
        // SE HABILITA EL USUARIO PARA PODER FIRMAR EN LA BLOCKCHAIN
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/identities/' . $request->input('cedulaIdentidad') . '/enroll', [
            'name' => $request->input('cedulaIdentidad'),
            'secret' => $apiResult->secret,
            'attributes' => [
                "nombre" => $request->input('nombre'),
                "estadoCivil" => $request->input('estadoCivil'),
                "nacionalidad" => $request->input('nacionalidad'),
                "fechaNacimiento" => $request->input('fechaNacimiento'),
                "profesion" => $request->input('profesion'),
                "correoElectronico" => $request->input('correo'),
                "telefono" => $request->input('telefono'),
                "calleDireccion" => $request->input('calle'),
                "numeroDireccion" => $request->input('numero'),
                "comunaDireccion" => $request->input('comuna')
            ]
        ]);
        //AQUI FALTA UN MENSAJE BONITO DE EXITO EN EL FRONT
        return ['success' => true, $response];
    }
    public function indexAdmin()
    {
        return view('admin.index');
    }


    public function firmaDocumentoNotario($idDoc)
    {
        documento::editDocumentoEspecifico($idDoc);
        $doc = documento::getDocumentoEspecifico($idDoc);
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/query', [
            'headers' => [
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer'
            ],
            'func' => 'ReadAsset',
            'args' => [
                "$doc->idAsset",
            ],
            'strongread' => 'true',
        ],);
        $var = $response->json("result");
        $idbc = $var["ID"];
        $ownerbc = $var["Owner"];
        $nombreEdificiobc = $var["NombreEdificio"];
        $calleEdificiobc = $var["CalleEdificio"];
        $numeroEdificiobc = $var["NumeroEdificio"];
        $numeroPisoEdificiobc = $var["NumeroPisoEdificio"];
        $numeroDepartamentobc = $var["NumeroDepartamento"];
        $comunaDepartamentobc = $var["ComunaDepartamento"];
        $numeroPlanoDptobc = $var["NumeroPlanoDpto"];
        $numeroDocumentoDptobc = $var["NumeroDocumentoDpto"];
        $coordenadaNortebc = $var["CoordenadaNorte"];
        $coordenadaSurbc = $var["CoordenadaSur"];
        $coordenadaEstebc = $var["CoordenadaEste"];
        $coordenadaOestebc = $var["CoordenadaOeste"];
        $dominioFojaDptobc = $var["DominioFojaDpto"];
        $numeroFojaDptobc = $var["NumeroFojaDpto"];
        $precioDptobc = $var["PrecioDpto"];
        $metodoPagoDptobc = $var["MetodoPagoDpto"];
        $idDocumentoActualbc = $var["IdDocumentoActual"];
        $idDocumentoTemporalbc = $var["IdDocumentoTemporal"];
        $validacionCompradorActualbc = $var["ValidacionCompradorActual"];
        $validacionVendedorActualbc = $var["ValidacionVendedorActual"];
        $validacionNotarioActualbc = $var["ValidacionNotarioActual"];
        $validacionConservadorActualbc = $var["ValidacionConservadorActual"];
        $validacionCompradorTemporalbc = $var["ValidacionCompradorTemporal"];
        $validacionVendedorTemporalbc = $var["ValidacionVendedorTemporal"];
        $validacionNotarioTemporalbc = $var["ValidacionNotarioTemporal"];
        $validacionConservadorTemporalbc = $var["ValidacionConservadorTemporal"];
        //LLENAR LOS INPUT CON ESTOOOOOO
        //Cambiar el signer por el conservador!!!!!!!!!!
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/transactions?fly-sync=true&fly-signer=prueba&fly-channel=default-channel&fly-chaincode=asset_transfer', [
            'headers' => [
                'type' => 'SendTransaction',
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer',
                'Authorization' => 'Basic dTBjb2tocWJyMDp4M2trOXZuZU9nN25Wd1poT3V4YjFiUVdoUWZXMlRpTGVWNkF5c2xwalhj',
                'Content-Type' => 'application/json'
            ],
            'type' => 'SendTransaction',
            'func' => 'UpdateAsset',
            'args' => [
                "$idbc",
                "$ownerbc",
                "$nombreEdificiobc",
                "$calleEdificiobc",
                "$numeroEdificiobc",
                "$numeroPisoEdificiobc",
                "$numeroDepartamentobc",
                "$comunaDepartamentobc",
                "$numeroPlanoDptobc",
                "$numeroDocumentoDptobc",
                "$coordenadaNortebc",
                "$coordenadaSurbc",
                "$coordenadaEstebc",
                "$coordenadaOestebc",
                "$dominioFojaDptobc",
                "$numeroFojaDptobc",
                "$precioDptobc",
                "$metodoPagoDptobc",
                "$idDocumentoActualbc",
                "$idDocumentoTemporalbc",
                "$validacionCompradorActualbc",
                "$validacionVendedorActualbc",
                "$validacionNotarioActualbc",
                "$validacionConservadorActualbc",
                "$validacionCompradorTemporalbc",
                "$validacionVendedorTemporalbc",
                "FIRMADO",
                "$validacionConservadorTemporalbc",
            ],
            'init' => 'false',
        ],);
        return  redirect()->route('notario.index');
    }

    public function firmaDocumentoConservador($idDoc)
    {
        documento::editDocumentoEspecificoConservador($idDoc);
        $doc = documento::getDocumentoEspecifico($idDoc);
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/query', [
            'headers' => [
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer'
            ],
            'func' => 'ReadAsset',
            'args' => [
                "$doc->idAsset",
            ],
            'strongread' => 'true',
        ],);
        $var = $response->json("result");
        $idbc = $var["ID"];
        $ownerbc = $var["Owner"];
        $nombreEdificiobc = $var["NombreEdificio"];
        $calleEdificiobc = $var["CalleEdificio"];
        $numeroEdificiobc = $var["NumeroEdificio"];
        $numeroPisoEdificiobc = $var["NumeroPisoEdificio"];
        $numeroDepartamentobc = $var["NumeroDepartamento"];
        $comunaDepartamentobc = $var["ComunaDepartamento"];
        $numeroPlanoDptobc = $var["NumeroPlanoDpto"];
        $numeroDocumentoDptobc = $var["NumeroDocumentoDpto"];
        $coordenadaNortebc = $var["CoordenadaNorte"];
        $coordenadaSurbc = $var["CoordenadaSur"];
        $coordenadaEstebc = $var["CoordenadaEste"];
        $coordenadaOestebc = $var["CoordenadaOeste"];
        $dominioFojaDptobc = $var["DominioFojaDpto"];
        $numeroFojaDptobc = $var["NumeroFojaDpto"];
        $precioDptobc = $var["PrecioDpto"];
        $metodoPagoDptobc = $var["MetodoPagoDpto"];
        $idDocumentoActualbc = $var["IdDocumentoActual"];
        $idDocumentoTemporalbc = $var["IdDocumentoTemporal"];
        $validacionCompradorActualbc = $var["ValidacionCompradorActual"];
        $validacionVendedorActualbc = $var["ValidacionVendedorActual"];
        $validacionNotarioActualbc = $var["ValidacionNotarioActual"];
        $validacionConservadorActualbc = $var["ValidacionConservadorActual"];
        $validacionCompradorTemporalbc = $var["ValidacionCompradorTemporal"];
        $validacionVendedorTemporalbc = $var["ValidacionVendedorTemporal"];
        $validacionNotarioTemporalbc = $var["ValidacionNotarioTemporal"];
        $validacionConservadorTemporalbc = $var["ValidacionConservadorTemporal"];
        //LLENAR LOS INPUT CON ESTOOOOOO
        //Cambiar el signer por el conservador!!!!!!!!!!
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/transactions?fly-sync=true&fly-signer=prueba&fly-channel=default-channel&fly-chaincode=asset_transfer', [
            'headers' => [
                'type' => 'SendTransaction',
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer',
                'Authorization' => 'Basic dTBjb2tocWJyMDp4M2trOXZuZU9nN25Wd1poT3V4YjFiUVdoUWZXMlRpTGVWNkF5c2xwalhj',
                'Content-Type' => 'application/json'
            ],
            'type' => 'SendTransaction',
            'func' => 'UpdateAsset',
            'args' => [
                "$idbc",
                "$doc->rutComprador",
                "$nombreEdificiobc",
                "$calleEdificiobc",
                "$numeroEdificiobc",
                "$numeroPisoEdificiobc",
                "$numeroDepartamentobc",
                "$comunaDepartamentobc",
                "$numeroPlanoDptobc",
                "$numeroDocumentoDptobc",
                "$coordenadaNortebc",
                "$coordenadaSurbc",
                "$coordenadaEstebc",
                "$coordenadaOestebc",
                "$dominioFojaDptobc",
                "$numeroFojaDptobc",
                "$precioDptobc",
                "$metodoPagoDptobc",
                "$doc->idDocumento",
                "$idDocumentoTemporalbc",
                "FIRMADO",
                "FIRMADO",
                "FIRMADO",
                "FIRMADO",
                "EMPTY",
                "EMPTY",
                "EMPTY",
                "EMPTY",
            ],
            'init' => 'false',
        ],);
        $document= documento::find($idDoc);
        $random = rand(1, 999999999);
        $document->dominioFojaActual = Uuid::fromInteger($random)->toString();
        $document->numeroFojaActual = Uuid::fromInteger($random)->toString();
        $document->save();
        return  redirect()->route('conservador.index');
    }


    public function firmaDocumentoComprador($idDoc)
    {
        documento::editDocumentoEspecificoComprador($idDoc);
        $doc = documento::getDocumentoEspecifico($idDoc);
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/query', [
            'headers' => [
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer'
            ],
            'func' => 'ReadAsset',
            'args' => [
                "$doc->idAsset",
            ],
            'strongread' => 'true',
        ],);
        $var = $response->json("result");
        $idbc = $var["ID"];
        $ownerbc = $var["Owner"];
        $nombreEdificiobc = $var["NombreEdificio"];
        $calleEdificiobc = $var["CalleEdificio"];
        $numeroEdificiobc = $var["NumeroEdificio"];
        $numeroPisoEdificiobc = $var["NumeroPisoEdificio"];
        $numeroDepartamentobc = $var["NumeroDepartamento"];
        $comunaDepartamentobc = $var["ComunaDepartamento"];
        $numeroPlanoDptobc = $var["NumeroPlanoDpto"];
        $numeroDocumentoDptobc = $var["NumeroDocumentoDpto"];
        $coordenadaNortebc = $var["CoordenadaNorte"];
        $coordenadaSurbc = $var["CoordenadaSur"];
        $coordenadaEstebc = $var["CoordenadaEste"];
        $coordenadaOestebc = $var["CoordenadaOeste"];
        $dominioFojaDptobc = $var["DominioFojaDpto"];
        $numeroFojaDptobc = $var["NumeroFojaDpto"];
        $precioDptobc = $var["PrecioDpto"];
        $metodoPagoDptobc = $var["MetodoPagoDpto"];
        $idDocumentoActualbc = $var["IdDocumentoActual"];
        $idDocumentoTemporalbc = $var["IdDocumentoTemporal"];
        $validacionCompradorActualbc = $var["ValidacionCompradorActual"];
        $validacionVendedorActualbc = $var["ValidacionVendedorActual"];
        $validacionNotarioActualbc = $var["ValidacionNotarioActual"];
        $validacionConservadorActualbc = $var["ValidacionConservadorActual"];
        $validacionCompradorTemporalbc = $var["ValidacionCompradorTemporal"];
        $validacionVendedorTemporalbc = $var["ValidacionVendedorTemporal"];
        $validacionNotarioTemporalbc = $var["ValidacionNotarioTemporal"];
        $validacionConservadorTemporalbc = $var["ValidacionConservadorTemporal"];
        //LLENAR LOS INPUT CON ESTOOOOOO
        //Cambiar el signer por el conservador!!!!!!!!!!
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/transactions?fly-sync=true&fly-signer=prueba&fly-channel=default-channel&fly-chaincode=asset_transfer', [
            'headers' => [
                'type' => 'SendTransaction',
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer',
                'Authorization' => 'Basic dTBjb2tocWJyMDp4M2trOXZuZU9nN25Wd1poT3V4YjFiUVdoUWZXMlRpTGVWNkF5c2xwalhj',
                'Content-Type' => 'application/json'
            ],
            'type' => 'SendTransaction',
            'func' => 'UpdateAsset',
            'args' => [
                "$idbc",
                "$ownerbc",
                "$nombreEdificiobc",
                "$calleEdificiobc",
                "$numeroEdificiobc",
                "$numeroPisoEdificiobc",
                "$numeroDepartamentobc",
                "$comunaDepartamentobc",
                "$numeroPlanoDptobc",
                "$numeroDocumentoDptobc",
                "$coordenadaNortebc",
                "$coordenadaSurbc",
                "$coordenadaEstebc",
                "$coordenadaOestebc",
                "$dominioFojaDptobc",
                "$numeroFojaDptobc",
                "$precioDptobc",
                "$metodoPagoDptobc",
                "$idDocumentoActualbc",
                "$idDocumentoTemporalbc",
                "$validacionCompradorActualbc",
                "$validacionVendedorActualbc",
                "$validacionNotarioActualbc",
                "$validacionConservadorActualbc",
                "FIRMADO",
                "$validacionVendedorTemporalbc",
                "$validacionNotarioTemporalbc",
                "$validacionConservadorTemporalbc",
            ],
            'init' => 'false',
        ],);
        return  redirect()->route('cliente.index');
    }

    public function firmaDocumentoVendedor($idDoc)
    {
        documento::editDocumentoEspecificoVendedor($idDoc);
        $doc = documento::getDocumentoEspecifico($idDoc);
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/query', [
            'headers' => [
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer'
            ],
            'func' => 'ReadAsset',
            'args' => [
                "$doc->idAsset",
            ],
            'strongread' => 'true',
        ],);
        $var = $response->json("result");
        $idbc = $var["ID"];
        $ownerbc = $var["Owner"];
        $nombreEdificiobc = $var["NombreEdificio"];
        $calleEdificiobc = $var["CalleEdificio"];
        $numeroEdificiobc = $var["NumeroEdificio"];
        $numeroPisoEdificiobc = $var["NumeroPisoEdificio"];
        $numeroDepartamentobc = $var["NumeroDepartamento"];
        $comunaDepartamentobc = $var["ComunaDepartamento"];
        $numeroPlanoDptobc = $var["NumeroPlanoDpto"];
        $numeroDocumentoDptobc = $var["NumeroDocumentoDpto"];
        $coordenadaNortebc = $var["CoordenadaNorte"];
        $coordenadaSurbc = $var["CoordenadaSur"];
        $coordenadaEstebc = $var["CoordenadaEste"];
        $coordenadaOestebc = $var["CoordenadaOeste"];
        $dominioFojaDptobc = $var["DominioFojaDpto"];
        $numeroFojaDptobc = $var["NumeroFojaDpto"];
        $precioDptobc = $var["PrecioDpto"];
        $metodoPagoDptobc = $var["MetodoPagoDpto"];
        $idDocumentoActualbc = $var["IdDocumentoActual"];
        $idDocumentoTemporalbc = $var["IdDocumentoTemporal"];
        $validacionCompradorActualbc = $var["ValidacionCompradorActual"];
        $validacionVendedorActualbc = $var["ValidacionVendedorActual"];
        $validacionNotarioActualbc = $var["ValidacionNotarioActual"];
        $validacionConservadorActualbc = $var["ValidacionConservadorActual"];
        $validacionCompradorTemporalbc = $var["ValidacionCompradorTemporal"];
        $validacionVendedorTemporalbc = $var["ValidacionVendedorTemporal"];
        $validacionNotarioTemporalbc = $var["ValidacionNotarioTemporal"];
        $validacionConservadorTemporalbc = $var["ValidacionConservadorTemporal"];
        //LLENAR LOS INPUT CON ESTOOOOOO
        //Cambiar el signer por el conservador!!!!!!!!!!
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/transactions?fly-sync=true&fly-signer=prueba&fly-channel=default-channel&fly-chaincode=asset_transfer', [
            'headers' => [
                'type' => 'SendTransaction',
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer',
                'Authorization' => 'Basic dTBjb2tocWJyMDp4M2trOXZuZU9nN25Wd1poT3V4YjFiUVdoUWZXMlRpTGVWNkF5c2xwalhj',
                'Content-Type' => 'application/json'
            ],
            'type' => 'SendTransaction',
            'func' => 'UpdateAsset',
            'args' => [
                "$idbc",
                "$ownerbc",
                "$nombreEdificiobc",
                "$calleEdificiobc",
                "$numeroEdificiobc",
                "$numeroPisoEdificiobc",
                "$numeroDepartamentobc",
                "$comunaDepartamentobc",
                "$numeroPlanoDptobc",
                "$numeroDocumentoDptobc",
                "$coordenadaNortebc",
                "$coordenadaSurbc",
                "$coordenadaEstebc",
                "$coordenadaOestebc",
                "$dominioFojaDptobc",
                "$numeroFojaDptobc",
                "$precioDptobc",
                "$metodoPagoDptobc",
                "$idDocumentoActualbc",
                "$idDocumentoTemporalbc",
                "$validacionCompradorActualbc",
                "$validacionVendedorActualbc",
                "$validacionNotarioActualbc",
                "$validacionConservadorActualbc",
                "$validacionCompradorTemporalbc",
                "FIRMADO",
                "$validacionNotarioTemporalbc",
                "$validacionConservadorTemporalbc",
            ],
            'init' => 'false',
        ],);
        return  redirect()->route('cliente.ventas');
    }
    public function confirmarRUTVendedor(Request $request)
    {
        //return response()->json(['response' => 'error']);
        //return response()->json(['response' => 'success', $usuario]); //SUCCESS
        //return response()->json(['msg' => 'No result found!'], 404); //ERROR
        // dd("AQUI");
        $data = request()->get('data');
        $rut = ['rutVendedor' => $data];
        $user = entidad::where('rutEntidad', '=', request('rutVendedor'))->first();
        if ($user === null) {
            return response()->json(['msg' => 'No result found!'], 404);
        } else {
            $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->get('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/identities/' . $user->rutEntidad . '', []);
            $apiResult = json_decode($response->getBody(), false);
            // return response()->json(['status' => 'success',
            // 'result' =>[
            //     'nombreVendedor' => $apiResult->nombreVendedor

            // ],
            // ]);
            return ['success' => true, 'result' => [
                'rutVendedor' => $user->rutEntidad,
                'nombre' => $apiResult->attributes->nombre,
                'nacionalidad' => $apiResult->attributes->nacionalidad,
                'estadoCivil' => $apiResult->attributes->estadoCivil,
                'fecha' => $apiResult->attributes->fechaNacimiento,
                'profesion' => $apiResult->attributes->profesion,
                'correo' => $apiResult->attributes->correoElectronico,
                'telefono' => $apiResult->attributes->telefono,
                'calle' => $apiResult->attributes->calleDireccion,
                'numero' => $apiResult->attributes->numeroDireccion,
                'comuna' => $apiResult->attributes->comunaDireccion
            ]];
        }
    }

    public function confirmarRUTComprador(Request $request)
    {
        //return response()->json(['response' => 'error']);
        //return response()->json(['response' => 'success', $usuario]); //SUCCESS
        //return response()->json(['msg' => 'No result found!'], 404); //ERROR
        // dd("AQUI");
        $data = request()->get('data');
        $rut = ['rutComprador' => $data];
        $user = entidad::where('rutEntidad', '=', request('rutComprador'))->first();
        if ($user === null) {
            return response()->json(['msg' => 'No result found!'], 404);
        } else {
            $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->get('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/identities/' . $user->rutEntidad . '', []);
            $apiResult = json_decode($response->getBody(), false);
            // return response()->json(['status' => 'success',
            // 'result' =>[
            //     'nombreVendedor' => $apiResult->nombreVendedor

            // ],
            // ]);
            return ['success' => true, 'result' => [
                'rutComprador' => $user->rutEntidad,
                'nombre' => $apiResult->attributes->nombre,
                'nacionalidad' => $apiResult->attributes->nacionalidad,
                'estadoCivil' => $apiResult->attributes->estadoCivil,
                'fecha' => $apiResult->attributes->fechaNacimiento,
                'profesion' => $apiResult->attributes->profesion,
                'correo' => $apiResult->attributes->correoElectronico,
                'telefono' => $apiResult->attributes->telefono,
                'calle' => $apiResult->attributes->calleDireccion,
                'numero' => $apiResult->attributes->numeroDireccion,
                'comuna' => $apiResult->attributes->comunaDireccion
            ]];
        }
    }

    public function ingresarCompraventa(Request $request)
    {
        $data = request()->get('data');
        if($request->input('rutVendedor')== "8.227.920-2" or $request->input('rutVendedor') == "19.771.256-2" or $request->input('rutVendedor')== "10.466.156-4"){
            return ['error' => ""];
            //Pao, captar error, mientras no pueden comprar notarios o conservadores xd
        }
        if($request->input('rutComprador')== "8.227.920-2" or $request->input('rutComprador') == "19.771.256-2" or $request->input('rutComprador')== "10.466.156-4"){
            // $response = [
            //     'err_msg' => 'No se puede',

            // ];
            // return response()->json($response);  
            //Pao, captar error, mientras no pueden comprar notarios o conservadores xd
        }
        $results = documento::where('numeroPlanoDpto', '=', $request->input('numeroPlanoDpto'))
            ->where('numeroDocumentoDpto', '=', $request->input('numeroDocumentoDpto'))
            ->where('dominioFojaActual', '=', $request->input('dominioFojaDpto'))
            ->where('numeroFojaActual', '=', $request->input('numeroFojaDpto'))
            ->first();
        if ($results != null) {
            $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/query', [
                'headers' => [
                    'signer' => 'prueba',
                    'channel' => 'default-channel',
                    'chaincode' => 'asset_transfer'
                ],
                'func' => 'ReadAsset',
                'args' => [
                    "$results->idAsset",
                ],
                'strongread' => 'true',
            ],);
            $var = $response->json("result");
            if ($var["Owner"] == $request->input('rutVendedor')) {
                if($var["IdDocumentoActual"] == $results->idDocumento){
                    $doc = new documento;
                    $doc->ciudadDoc = "Coquimbo";
                    $doc->fechaDoc = Carbon::now()->format('Y-m-d');
                    $doc->nombreNotarioDoc = "Juan Pérez Pérez";
                    $doc->calleNotarioDoc = "Melgarejo";
                    $doc->numeroCalleNotarioDoc = "366";
                    $doc->comunaCalleNotarioDoc = "Coquimbo";
                    $doc->nombreVendedor =  $request->input('nombreVendedor');
                    $doc->nacionalidadVendedor =  $request->input('nacionalidadVendedor');
                    $doc->estadoCivilVendedor = $request->input('estadoCivilVendedor');
                    $doc->profesionVendedor = $request->input('profesionVendedor');
                    $doc->rutVendedor = $request->input('rutVendedor');
                    $doc->calleVendedor = $request->input('calleVendedor');
                    $doc->numeroVendedor = $request->input('numeroVendedor');
                    $doc->comunaVendedor = $request->input('comunaVendedor');
                    $doc->nombreComprador = $request->input('nombreComprador');
                    $doc->nacionalidadComprador = $request->input('nacionalidadComprador');
                    $doc->estadoCivilComprador = $request->input('estadoCivilComprador');
                    $doc->profesionComprador = $request->input('profesionComprador');
                    $doc->rutComprador = $request->input('rutComprador');
                    $doc->calleComprador = $request->input('calleComprador');
                    $doc->numeroComprador = $request->input('numeroComprador');
                    $doc->comunaComprador = $request->input('comunaComprador');
                    $doc->nombreEdificio = $results->nombreEdificio;
                    $doc->calleEdificio = $results->calleEdificio;
                    $doc->numeroEdificio = $results->numeroEdificio;
                    $doc->numeroPisoDpto = $results->numeroPisoDpto;
                    $doc->numeroDpto = $results->numeroDpto;
                    $doc->comunaDpto = $results->comunaDpto;
                    $doc->numeroPlanoDpto = $results->numeroPlanoDpto;
                    $doc->numeroDocumentoDpto = $results->numeroDocumentoDpto;
                    $doc->coordenadaNorte = $results->coordenadaNorte;
                    $doc->coordenadaSur = $results->coordenadaSur;
                    $doc->coordenadaEste = $results->coordenadaEste;
                    $doc->coordenadaOeste = $results->coordenadaOeste;
                    $doc->dominioFojaDpto = $results->dominioFojaActual;
                    $doc->numeroFojaDpto = $results->numeroFojaActual;
                    $doc->precioDpto = $request->input('precioDpto');
                    $doc->metodoPagoDpto = $request->input('metodoPagoDpto');
                    $doc->cedulaNotario = "19.771.256-2";
                    $doc->cedulaConservador = "10.466.156-4";
                    $doc->idAsset = $results->idAsset;
                    $doc->fechaCreacionDoc = Carbon::now()->format('Y-m-d');
                    if ($doc->rutVendedor == $doc->rutComprador) {
                        // $response = [
                        //     'data' =>"valor duplicado",
    
                        // ];
                        // return response()->json($response);
                        //PAo, captar error, el vendedor no se puede comprar a sí mismo
                    } // LO CAPTE EN EL FRONT SOLAMENTE 
                    $doc->save();
                    $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/query', [
                        'headers' => [
                            'signer' => 'prueba',
                            'channel' => 'default-channel',
                            'chaincode' => 'asset_transfer'
                        ],
                        'func' => 'ReadAsset',
                        'args' => [
                            "$doc->idAsset",
                        ],
                        'strongread' => 'true',
                    ],);
                    $var = $response->json("result");
                    $idbc = $var["ID"];
                    $ownerbc = $var["Owner"];
                    $nombreEdificiobc = $var["NombreEdificio"];
                    $calleEdificiobc = $var["CalleEdificio"];
                    $numeroEdificiobc = $var["NumeroEdificio"];
                    $numeroPisoEdificiobc = $var["NumeroPisoEdificio"];
                    $numeroDepartamentobc = $var["NumeroDepartamento"];
                    $comunaDepartamentobc = $var["ComunaDepartamento"];
                    $numeroPlanoDptobc = $var["NumeroPlanoDpto"];
                    $numeroDocumentoDptobc = $var["NumeroDocumentoDpto"];
                    $coordenadaNortebc = $var["CoordenadaNorte"];
                    $coordenadaSurbc = $var["CoordenadaSur"];
                    $coordenadaEstebc = $var["CoordenadaEste"];
                    $coordenadaOestebc = $var["CoordenadaOeste"];
                    $dominioFojaDptobc = $var["DominioFojaDpto"];
                    $numeroFojaDptobc = $var["NumeroFojaDpto"];
                    $precioDptobc = $var["PrecioDpto"];
                    $metodoPagoDptobc = $var["MetodoPagoDpto"];
                    $idDocumentoActualbc = $var["IdDocumentoActual"];
                    $validacionCompradorActualbc = $var["ValidacionCompradorActual"];
                    $validacionVendedorActualbc = $var["ValidacionVendedorActual"];
                    $validacionNotarioActualbc = $var["ValidacionNotarioActual"];
                    $validacionConservadorActualbc = $var["ValidacionConservadorActual"];
                    $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/transactions?fly-sync=true&fly-signer=prueba&fly-channel=default-channel&fly-chaincode=asset_transfer', [
                        'headers' => [
                            'type' => 'SendTransaction',
                            'signer' => 'prueba',
                            'channel' => 'default-channel',
                            'chaincode' => 'asset_transfer',
                            'Authorization' => 'Basic dTBjb2tocWJyMDp4M2trOXZuZU9nN25Wd1poT3V4YjFiUVdoUWZXMlRpTGVWNkF5c2xwalhj',
                            'Content-Type' => 'application/json'
                        ],
                        'type' => 'SendTransaction',
                        'func' => 'UpdateAsset',
                        'args' => [
                            "$idbc",
                            "$ownerbc",
                            "$nombreEdificiobc",
                            "$calleEdificiobc",
                            "$numeroEdificiobc",
                            "$numeroPisoEdificiobc",
                            "$numeroDepartamentobc",
                            "$comunaDepartamentobc",
                            "$numeroPlanoDptobc",
                            "$numeroDocumentoDptobc",
                            "$coordenadaNortebc",
                            "$coordenadaSurbc",
                            "$coordenadaEstebc",
                            "$coordenadaOestebc",
                            "$dominioFojaDptobc",
                            "$numeroFojaDptobc",
                            "$precioDptobc",
                            "$metodoPagoDptobc",
                            "$idDocumentoActualbc",
                            "$doc->idDocumento",
                            "$validacionCompradorActualbc",
                            "$validacionVendedorActualbc",
                            "$validacionNotarioActualbc",
                            "$validacionConservadorActualbc",
                            "EMPTY",
                            "EMPTY",
                            "EMPTY",
                            "EMPTY",
                        ],
                        'init' => 'false',
                    ],);
                    return ['success' => true, $response];
                }
            } else {
                //PAO MANDA UN MENSAJE DICIENDO QUE NO SE PUEDE REALIZAR LA COMPRAVENTAAAAAAAAAAAAAAAAAAAAAAAA PQ NO ES EL DUEÑO
                // return ['error' => "duplicado"];
                $msg = [
                    'data' => "no es el dueño del departamento",

                ];
                return response()->json($msg, 500); // paola revisaaaaaaar
                
            }
        } else {
            $doc = new documento;
            $doc->ciudadDoc = "Coquimbo";
            $doc->fechaDoc = Carbon::now()->format('Y-m-d');
            $doc->nombreNotarioDoc = "Juan Pérez Pérez";
            $doc->calleNotarioDoc = "Melgarejo";
            $doc->numeroCalleNotarioDoc = "366";
            $doc->comunaCalleNotarioDoc = "Coquimbo";
            $doc->nombreVendedor =  $request->input('nombreVendedor');
            $doc->nacionalidadVendedor =  $request->input('nacionalidadVendedor');
            $doc->estadoCivilVendedor = $request->input('estadoCivilVendedor');
            $doc->profesionVendedor = $request->input('profesionVendedor');
            $doc->rutVendedor = $request->input('rutVendedor');
            $doc->calleVendedor = $request->input('calleVendedor');
            $doc->numeroVendedor = $request->input('numeroVendedor');
            $doc->comunaVendedor = $request->input('comunaVendedor');
            $doc->nombreComprador = $request->input('nombreComprador');
            $doc->nacionalidadComprador = $request->input('nacionalidadComprador');
            $doc->estadoCivilComprador = $request->input('estadoCivilComprador');
            $doc->profesionComprador = $request->input('profesionComprador');
            $doc->rutComprador = $request->input('rutComprador');
            $doc->calleComprador = $request->input('calleComprador');
            $doc->numeroComprador = $request->input('numeroComprador');
            $doc->comunaComprador = $request->input('comunaComprador');
            $doc->nombreEdificio = $request->input('nombreEdificio');
            $doc->calleEdificio = $request->input('calleEdificio');
            $doc->numeroEdificio = $request->input('numeroEdificio');
            $doc->numeroPisoDpto = $request->input('numeroPisoDpto');
            $doc->numeroDpto = $request->input('numeroDpto');
            $doc->comunaDpto = $request->input('comunaDpto');
            $doc->numeroPlanoDpto = $request->input('numeroPlanoDpto');
            $doc->numeroDocumentoDpto = $request->input('numeroDocumentoDpto');
            $doc->coordenadaNorte = $request->input('coordenadaNorte');
            $doc->coordenadaSur = $request->input('coordenadaSur');
            $doc->coordenadaEste = $request->input('coordenadaEste');
            $doc->coordenadaOeste = $request->input('coordenadaOeste');
            $doc->dominioFojaDpto = $request->input('dominioFojaDpto');
            $doc->numeroFojaDpto = $request->input('numeroFojaDpto');
            $doc->precioDpto = $request->input('precioDpto');
            $doc->metodoPagoDpto = $request->input('metodoPagoDpto');
            $doc->cedulaNotario = "19.771.256-2";
            $doc->cedulaConservador = "10.466.156-4";
            $random = rand(1, 999999999);
            $doc->idAsset = Uuid::fromInteger($random)->toString();
            $doc->fechaCreacionDoc = Carbon::now()->format('Y-m-d');
            if ($doc->rutVendedor == $doc->rutComprador) {
                return ['error' => "duplicado"];
                //lo mismo de arriba (pao)
            }
            $doc->save();
            $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/transactions?fly-sync=true&fly-signer=prueba&fly-channel=default-channel&fly-chaincode=asset_transfer', [
                'headers' => [
                    'type' => 'SendTransaction',
                    'signer' => 'prueba',
                    'channel' => 'default-channel',
                    'chaincode' => 'asset_transfer',
                    'Authorization' => 'Basic dTBjb2tocWJyMDp4M2trOXZuZU9nN25Wd1poT3V4YjFiUVdoUWZXMlRpTGVWNkF5c2xwalhj',
                    'Content-Type' => 'application/json'
                ],
                'type' => 'SendTransaction',
                'func' => 'CreateAsset',
                'args' => [
                    "$doc->idAsset",
                    "$doc->rutVendedor",
                    "$doc->nombreEdificio",
                    "$doc->calleEdificio",
                    "$doc->numeroEdificio",
                    "$doc->numeroPisoDpto",
                    "$doc->numeroDpto",
                    "$doc->comunaDpto",
                    "$doc->numeroPlanoDpto",
                    "$doc->numeroDocumentoDpto",
                    "$doc->coordenadaNorte",
                    "$doc->coordenadaSur",
                    "$doc->coordenadaEste",
                    "$doc->coordenadaOeste",
                    "$doc->dominioFojaDpto",
                    "$doc->numeroFojaDpto",
                    "$doc->precioDpto",
                    "$doc->metodoPagoDpto",
                    "$doc->idDocumento",
                    "$doc->idDocumento",
                    "EMPTY",
                    "EMPTY",
                    "EMPTY",
                    "EMPTY",
                    "EMPTY",
                    "EMPTY",
                    "EMPTY",
                    "EMPTY",
                ],
                'init' => 'false',
            ],);
            if ($response->json("status") == "VALID") {
                return ['success' => true, $response];
            } else {
                return response()->json(['msg' => 'error 500 xd'], 500);
                //pao: por cualquier error que no sea de los de arriba, aquí tira un error genérico y di que lo vuelva a intentar
            }
        }
    }

    public function rechazarDocumentoNotario($idDoc){
        documento::rechazarDocumentoEspecifico($idDoc);
        $doc = documento::getDocumentoEspecifico($idDoc);
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/query', [
            'headers' => [
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer'
            ],
            'func' => 'ReadAsset',
            'args' => [
                "$doc->idAsset",
            ],
            'strongread' => 'true',
        ],);
        $var = $response->json("result");
        $idbc = $var["ID"];
        $ownerbc = $var["Owner"];
        $nombreEdificiobc = $var["NombreEdificio"];
        $calleEdificiobc = $var["CalleEdificio"];
        $numeroEdificiobc = $var["NumeroEdificio"];
        $numeroPisoEdificiobc = $var["NumeroPisoEdificio"];
        $numeroDepartamentobc = $var["NumeroDepartamento"];
        $comunaDepartamentobc = $var["ComunaDepartamento"];
        $numeroPlanoDptobc = $var["NumeroPlanoDpto"];
        $numeroDocumentoDptobc = $var["NumeroDocumentoDpto"];
        $coordenadaNortebc = $var["CoordenadaNorte"];
        $coordenadaSurbc = $var["CoordenadaSur"];
        $coordenadaEstebc = $var["CoordenadaEste"];
        $coordenadaOestebc = $var["CoordenadaOeste"];
        $dominioFojaDptobc = $var["DominioFojaDpto"];
        $numeroFojaDptobc = $var["NumeroFojaDpto"];
        $precioDptobc = $var["PrecioDpto"];
        $metodoPagoDptobc = $var["MetodoPagoDpto"];
        $idDocumentoActualbc = $var["IdDocumentoActual"];
        $idDocumentoTemporalbc = $var["IdDocumentoTemporal"];
        $validacionCompradorActualbc = $var["ValidacionCompradorActual"];
        $validacionVendedorActualbc = $var["ValidacionVendedorActual"];
        $validacionNotarioActualbc = $var["ValidacionNotarioActual"];
        $validacionConservadorActualbc = $var["ValidacionConservadorActual"];
        $validacionCompradorTemporalbc = $var["ValidacionCompradorTemporal"];
        $validacionVendedorTemporalbc = $var["ValidacionVendedorTemporal"];
        $validacionNotarioTemporalbc = $var["ValidacionNotarioTemporal"];
        $validacionConservadorTemporalbc = $var["ValidacionConservadorTemporal"];
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/transactions?fly-sync=true&fly-signer=prueba&fly-channel=default-channel&fly-chaincode=asset_transfer', [
            'headers' => [
                'type' => 'SendTransaction',
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer',
                'Authorization' => 'Basic dTBjb2tocWJyMDp4M2trOXZuZU9nN25Wd1poT3V4YjFiUVdoUWZXMlRpTGVWNkF5c2xwalhj',
                'Content-Type' => 'application/json'
            ],
            'type' => 'SendTransaction',
            'func' => 'UpdateAsset',
            'args' => [
                "$idbc",
                "$ownerbc",
                "$nombreEdificiobc",
                "$calleEdificiobc",
                "$numeroEdificiobc",
                "$numeroPisoEdificiobc",
                "$numeroDepartamentobc",
                "$comunaDepartamentobc",
                "$numeroPlanoDptobc",
                "$numeroDocumentoDptobc",
                "$coordenadaNortebc",
                "$coordenadaSurbc",
                "$coordenadaEstebc",
                "$coordenadaOestebc",
                "$dominioFojaDptobc",
                "$numeroFojaDptobc",
                "$precioDptobc",
                "$metodoPagoDptobc",
                "$idDocumentoActualbc",
                "$idDocumentoTemporalbc",
                "$validacionCompradorActualbc",
                "$validacionVendedorActualbc",
                "$validacionNotarioActualbc",
                "$validacionConservadorActualbc",
                "$validacionCompradorTemporalbc",
                "$validacionVendedorTemporalbc",
                "RECHAZADO",
                "$validacionConservadorTemporalbc",
            ],
            'init' => 'false',
        ],);
        return  redirect()->route('notario.index');
    }
    public function rechazarDocumentoConservador($idDoc){
        documento::rechazarDocumentoEspecificoConservador($idDoc);
        $doc = documento::getDocumentoEspecifico($idDoc);
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/query', [
            'headers' => [
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer'
            ],
            'func' => 'ReadAsset',
            'args' => [
                "$doc->idAsset",
            ],
            'strongread' => 'true',
        ],);
        $var = $response->json("result");
        $idbc = $var["ID"];
        $ownerbc = $var["Owner"];
        $nombreEdificiobc = $var["NombreEdificio"];
        $calleEdificiobc = $var["CalleEdificio"];
        $numeroEdificiobc = $var["NumeroEdificio"];
        $numeroPisoEdificiobc = $var["NumeroPisoEdificio"];
        $numeroDepartamentobc = $var["NumeroDepartamento"];
        $comunaDepartamentobc = $var["ComunaDepartamento"];
        $numeroPlanoDptobc = $var["NumeroPlanoDpto"];
        $numeroDocumentoDptobc = $var["NumeroDocumentoDpto"];
        $coordenadaNortebc = $var["CoordenadaNorte"];
        $coordenadaSurbc = $var["CoordenadaSur"];
        $coordenadaEstebc = $var["CoordenadaEste"];
        $coordenadaOestebc = $var["CoordenadaOeste"];
        $dominioFojaDptobc = $var["DominioFojaDpto"];
        $numeroFojaDptobc = $var["NumeroFojaDpto"];
        $precioDptobc = $var["PrecioDpto"];
        $metodoPagoDptobc = $var["MetodoPagoDpto"];
        $idDocumentoActualbc = $var["IdDocumentoActual"];
        $idDocumentoTemporalbc = $var["IdDocumentoTemporal"];
        $validacionCompradorActualbc = $var["ValidacionCompradorActual"];
        $validacionVendedorActualbc = $var["ValidacionVendedorActual"];
        $validacionNotarioActualbc = $var["ValidacionNotarioActual"];
        $validacionConservadorActualbc = $var["ValidacionConservadorActual"];
        $validacionCompradorTemporalbc = $var["ValidacionCompradorTemporal"];
        $validacionVendedorTemporalbc = $var["ValidacionVendedorTemporal"];
        $validacionNotarioTemporalbc = $var["ValidacionNotarioTemporal"];
        $validacionConservadorTemporalbc = $var["ValidacionConservadorTemporal"];
        //LLENAR LOS INPUT CON ESTOOOOOO
        //Cambiar el signer por el conservador!!!!!!!!!!
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/transactions?fly-sync=true&fly-signer=prueba&fly-channel=default-channel&fly-chaincode=asset_transfer', [
            'headers' => [
                'type' => 'SendTransaction',
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer',
                'Authorization' => 'Basic dTBjb2tocWJyMDp4M2trOXZuZU9nN25Wd1poT3V4YjFiUVdoUWZXMlRpTGVWNkF5c2xwalhj',
                'Content-Type' => 'application/json'
            ],
            'type' => 'SendTransaction',
            'func' => 'UpdateAsset',
            'args' => [
                "$idbc",
                "$ownerbc",
                "$nombreEdificiobc",
                "$calleEdificiobc",
                "$numeroEdificiobc",
                "$numeroPisoEdificiobc",
                "$numeroDepartamentobc",
                "$comunaDepartamentobc",
                "$numeroPlanoDptobc",
                "$numeroDocumentoDptobc",
                "$coordenadaNortebc",
                "$coordenadaSurbc",
                "$coordenadaEstebc",
                "$coordenadaOestebc",
                "$dominioFojaDptobc",
                "$numeroFojaDptobc",
                "$precioDptobc",
                "$metodoPagoDptobc",
                "$idDocumentoActualbc",
                "$idDocumentoTemporalbc",
                "$validacionCompradorActualbc",
                "$validacionVendedorActualbc",
                "$validacionNotarioActualbc",
                "$validacionConservadorActualbc",
                "$validacionCompradorTemporalbc",
                "$validacionVendedorTemporalbc",
                "$validacionNotarioTemporalbc",
                "RECHAZADO",
            ],
            'init' => 'false',
        ],);

        return  redirect()->route('conservador.index');
    }

    public function rechazarDocumentoComprador($idDoc){
        documento::rechazarDocumentoEspecificoComprador($idDoc);
        $doc = documento::getDocumentoEspecifico($idDoc);
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/query', [
            'headers' => [
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer'
            ],
            'func' => 'ReadAsset',
            'args' => [
                "$doc->idAsset",
            ],
            'strongread' => 'true',
        ],);
        $var = $response->json("result");
        $idbc = $var["ID"];
        $ownerbc = $var["Owner"];
        $nombreEdificiobc = $var["NombreEdificio"];
        $calleEdificiobc = $var["CalleEdificio"];
        $numeroEdificiobc = $var["NumeroEdificio"];
        $numeroPisoEdificiobc = $var["NumeroPisoEdificio"];
        $numeroDepartamentobc = $var["NumeroDepartamento"];
        $comunaDepartamentobc = $var["ComunaDepartamento"];
        $numeroPlanoDptobc = $var["NumeroPlanoDpto"];
        $numeroDocumentoDptobc = $var["NumeroDocumentoDpto"];
        $coordenadaNortebc = $var["CoordenadaNorte"];
        $coordenadaSurbc = $var["CoordenadaSur"];
        $coordenadaEstebc = $var["CoordenadaEste"];
        $coordenadaOestebc = $var["CoordenadaOeste"];
        $dominioFojaDptobc = $var["DominioFojaDpto"];
        $numeroFojaDptobc = $var["NumeroFojaDpto"];
        $precioDptobc = $var["PrecioDpto"];
        $metodoPagoDptobc = $var["MetodoPagoDpto"];
        $idDocumentoActualbc = $var["IdDocumentoActual"];
        $idDocumentoTemporalbc = $var["IdDocumentoTemporal"];
        $validacionCompradorActualbc = $var["ValidacionCompradorActual"];
        $validacionVendedorActualbc = $var["ValidacionVendedorActual"];
        $validacionNotarioActualbc = $var["ValidacionNotarioActual"];
        $validacionConservadorActualbc = $var["ValidacionConservadorActual"];
        $validacionCompradorTemporalbc = $var["ValidacionCompradorTemporal"];
        $validacionVendedorTemporalbc = $var["ValidacionVendedorTemporal"];
        $validacionNotarioTemporalbc = $var["ValidacionNotarioTemporal"];
        $validacionConservadorTemporalbc = $var["ValidacionConservadorTemporal"];
        //LLENAR LOS INPUT CON ESTOOOOOO
        //Cambiar el signer por el conservador!!!!!!!!!!
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/transactions?fly-sync=true&fly-signer=prueba&fly-channel=default-channel&fly-chaincode=asset_transfer', [
            'headers' => [
                'type' => 'SendTransaction',
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer',
                'Authorization' => 'Basic dTBjb2tocWJyMDp4M2trOXZuZU9nN25Wd1poT3V4YjFiUVdoUWZXMlRpTGVWNkF5c2xwalhj',
                'Content-Type' => 'application/json'
            ],
            'type' => 'SendTransaction',
            'func' => 'UpdateAsset',
            'args' => [
                "$idbc",
                "$ownerbc",
                "$nombreEdificiobc",
                "$calleEdificiobc",
                "$numeroEdificiobc",
                "$numeroPisoEdificiobc",
                "$numeroDepartamentobc",
                "$comunaDepartamentobc",
                "$numeroPlanoDptobc",
                "$numeroDocumentoDptobc",
                "$coordenadaNortebc",
                "$coordenadaSurbc",
                "$coordenadaEstebc",
                "$coordenadaOestebc",
                "$dominioFojaDptobc",
                "$numeroFojaDptobc",
                "$precioDptobc",
                "$metodoPagoDptobc",
                "$idDocumentoActualbc",
                "$idDocumentoTemporalbc",
                "$validacionCompradorActualbc",
                "$validacionVendedorActualbc",
                "$validacionNotarioActualbc",
                "$validacionConservadorActualbc",
                "RECHAZADO",
                "$validacionVendedorTemporalbc",
                "$validacionNotarioTemporalbc",
                "$validacionConservadorTemporalbc",
            ],
            'init' => 'false',
        ],);
        return  redirect()->route('cliente.index');
    }
    public function rechazarDocumentoVendedor($idDoc){
        documento::rechazarDocumentoEspecificoVendedor($idDoc);
        $doc = documento::getDocumentoEspecifico($idDoc);
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/query', [
            'headers' => [
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer'
            ],
            'func' => 'ReadAsset',
            'args' => [
                "$doc->idAsset",
            ],
            'strongread' => 'true',
        ],);
        $var = $response->json("result");
        $idbc = $var["ID"];
        $ownerbc = $var["Owner"];
        $nombreEdificiobc = $var["NombreEdificio"];
        $calleEdificiobc = $var["CalleEdificio"];
        $numeroEdificiobc = $var["NumeroEdificio"];
        $numeroPisoEdificiobc = $var["NumeroPisoEdificio"];
        $numeroDepartamentobc = $var["NumeroDepartamento"];
        $comunaDepartamentobc = $var["ComunaDepartamento"];
        $numeroPlanoDptobc = $var["NumeroPlanoDpto"];
        $numeroDocumentoDptobc = $var["NumeroDocumentoDpto"];
        $coordenadaNortebc = $var["CoordenadaNorte"];
        $coordenadaSurbc = $var["CoordenadaSur"];
        $coordenadaEstebc = $var["CoordenadaEste"];
        $coordenadaOestebc = $var["CoordenadaOeste"];
        $dominioFojaDptobc = $var["DominioFojaDpto"];
        $numeroFojaDptobc = $var["NumeroFojaDpto"];
        $precioDptobc = $var["PrecioDpto"];
        $metodoPagoDptobc = $var["MetodoPagoDpto"];
        $idDocumentoActualbc = $var["IdDocumentoActual"];
        $idDocumentoTemporalbc = $var["IdDocumentoTemporal"];
        $validacionCompradorActualbc = $var["ValidacionCompradorActual"];
        $validacionVendedorActualbc = $var["ValidacionVendedorActual"];
        $validacionNotarioActualbc = $var["ValidacionNotarioActual"];
        $validacionConservadorActualbc = $var["ValidacionConservadorActual"];
        $validacionCompradorTemporalbc = $var["ValidacionCompradorTemporal"];
        $validacionVendedorTemporalbc = $var["ValidacionVendedorTemporal"];
        $validacionNotarioTemporalbc = $var["ValidacionNotarioTemporal"];
        $validacionConservadorTemporalbc = $var["ValidacionConservadorTemporal"];
        //LLENAR LOS INPUT CON ESTOOOOOO
        //Cambiar el signer por el conservador!!!!!!!!!!
        $response = Http::withBasicAuth('u0cokhqbr0', 'x3kk9vneOg7nVwZhOuxb1bQWhQfW2TiLeV6AyslpjXc')->post('https://u0fjfxled9-u0pq00wajx-connect.us0-aws-ws.kaleido.io/transactions?fly-sync=true&fly-signer=prueba&fly-channel=default-channel&fly-chaincode=asset_transfer', [
            'headers' => [
                'type' => 'SendTransaction',
                'signer' => 'prueba',
                'channel' => 'default-channel',
                'chaincode' => 'asset_transfer',
                'Authorization' => 'Basic dTBjb2tocWJyMDp4M2trOXZuZU9nN25Wd1poT3V4YjFiUVdoUWZXMlRpTGVWNkF5c2xwalhj',
                'Content-Type' => 'application/json'
            ],
            'type' => 'SendTransaction',
            'func' => 'UpdateAsset',
            'args' => [
                "$idbc",
                "$ownerbc",
                "$nombreEdificiobc",
                "$calleEdificiobc",
                "$numeroEdificiobc",
                "$numeroPisoEdificiobc",
                "$numeroDepartamentobc",
                "$comunaDepartamentobc",
                "$numeroPlanoDptobc",
                "$numeroDocumentoDptobc",
                "$coordenadaNortebc",
                "$coordenadaSurbc",
                "$coordenadaEstebc",
                "$coordenadaOestebc",
                "$dominioFojaDptobc",
                "$numeroFojaDptobc",
                "$precioDptobc",
                "$metodoPagoDptobc",
                "$idDocumentoActualbc",
                "$idDocumentoTemporalbc",
                "$validacionCompradorActualbc",
                "$validacionVendedorActualbc",
                "$validacionNotarioActualbc",
                "$validacionConservadorActualbc",
                "$validacionCompradorTemporalbc",
                "RECHAZADO",
                "$validacionNotarioTemporalbc",
                "$validacionConservadorTemporalbc",
            ],
            'init' => 'false',
        ],);
        return  redirect()->route('cliente.ventas');
    }
}
