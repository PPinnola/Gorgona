<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class documento
 *
 * @property $idDocumento
 * @property $codigo1
 * @property $codigo2
 * @property $ciudadDoc
 * @property $fechaDoc
 * @property $nombreNotario
 * @property $calleNotaria
 * @property $nCalleNotaria
 * @property $comunaNotaria
 * @property $nombreVendedor
 * @property $nacionalidadVendedor
 * @property $estadoCivilVendedor
 * @property $profesionVendedor
 * @property $cedulaVendedor
 * @property $calleVendedor
 * @property $numDomicilioVendedor
 * @property $comunaVendedor
 * @property $correoVendedor
 * @property $nombreComprador
 * @property $nacionalidadComprador
 * @property $estadoCivilComprador
 * @property $profesionComprador
 * @property $cedulaComprador
 * @property $calleComprador
 * @property $numDomicilioComprador
 * @property $comunaComprador
 * @property $correoComprador
 * @property $contrasena
 * @property $nombreCondominio
 * @property $calleCondominio
 * @property $numeroCondominio
 * @property $pisoDepartamento
 * @property $numeroDepartamento
 * @property $comunaDepartamento
 * @property $numeroPlano
 * @property $numeroDocumento
 * @property $fojaPropiedad
 * @property $numeroFoja
 * @property $norte
 * @property $sur
 * @property $este
 * @property $oeste
 * @property $precio
 * @property $formaDePago
 * @property $fechaInscripcionNotario
 * @property $fechaInscripcionConservador
 * @property $firmaNotario
 * @property $firmaConservador
 * @property $firmaVendedor
 * @property $firmaComprador
 * @property $created_at
 * @property $updated_at
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class documento extends Model
{
    public $table = "documento";
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idDocumento',
        'ciudadDoc',
        'fechaDoc',
        'nombreNotarioDoc',
        'calleNotarioDoc',
        'numeroCalleNotarioDoc',
        'comunaCalleNotarioDoc',
        'nombreVendedor',
        'nacionalidadVendedor',
        'estadoCivilVendedor',
        'profesionVendedor',
        'rutVendedor',
        'calleVendedor',
        'numeroVendedor',
        'comunaVendedor',
        'nombreComprador',
        'nacionalidadComprador',
        'estadoCivilComprador',
        'profesionComprador',
        'rutComprador',
        'calleComprador',
        'numeroComprador',
        'comunaComprador',
        'nombreEdificio',
        'calleEdificio',
        'numeroEdificio',
        'numeroPisoDpto',
        'numeroDpto',
        'comunaDpto',
        'numeroPlanoDpto',
        'numeroDocumentoDpto',
        'coordenadaNorte',
        'coordenadaSur',
        'coordenadaEste',
        'coordenadaOeste',
        'dominioFojaDpto',
        'numeroFojaDpto',
        'precioDpto',
        'metodoPagoDpto',
        'idAsset',
        'fechaCreacionDoc',
    ];
    protected $primaryKey = 'idDocumento';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function arriendos()
    // {
    //   return $this->hasMany('App\Models\Arriendo', 'cliente_idDocumento', 'idDocumento');
    // }
    public static function getDocumentoNotario($id)
    {
        $documento = documento::select('*')
            ->where('cedulaNotario', '=', $id)
            ->get();


        return $documento;
    }

    public static function getDocumentoConservador($id)
    {
        $documento = documento::select('*')
            ->where('cedulaConservador', '=', $id)
            ->get();


        return $documento;
    }

    public static function getDocumentoClienteCompras($id)
    {
        $documento = documento::select('*')
            ->where('rutComprador', '=', $id)
            ->get();


        return $documento;
    }
    public static function getDocumentoClienteVentas($id)
    {
        $documento = documento::select('*')
            ->where('rutVendedor', '=', $id)
            ->get();


        return $documento;
    }
    public static function getDocumentoEspecifico($id)
    {
        $documento = documento::select('*')
            ->where('idDocumento', '=', $id)
            ->first();


        return $documento;
    }

    public static function editDocumentoEspecifico($id)
    {
        $documento = DB::update('update documento set firmaNotario = true where idDocumento = ?', [$id]);
        return $documento;
    }
    public static function rechazarDocumentoEspecifico($id)
    {
        $documento = DB::table('documento')
            ->where('idDocumento', $id)
            ->update(['firmaNotario' => "RECHAZADO"]);
        return $documento;
    }

    public static function editDocumentoEspecificoConservador($id)
    {
        $documento = DB::update('update documento set firmaConservador = true where idDocumento = ?', [$id]);
        return $documento;
    }
    public static function rechazarDocumentoEspecificoConservador($id)
    {
        $documento = DB::table('documento')
            ->where('idDocumento', $id)
            ->update(['firmaConservador' => "RECHAZADO"]);
        return $documento;
    }
    public static function editDocumentoEspecificoComprador($id)
    {
        $documento = DB::update('update documento set firmaComprador = true where idDocumento = ?', [$id]);
        return $documento;
    }
    public static function rechazarDocumentoEspecificoComprador($id)
    {
        $documento = DB::table('documento')
            ->where('idDocumento', $id)
            ->update(['firmaComprador' => "RECHAZADO"]);
        return $documento;
    }
    public static function editDocumentoEspecificoVendedor($id)
    {
        $documento = DB::update('update documento set firmaVendedor = true where idDocumento = ?', [$id]);
        return $documento;
    }
    public static function rechazarDocumentoEspecificoVendedor($id)
    {
        $documento = DB::table('documento')
            ->where('idDocumento', $id)
            ->update(['firmaVendedor' => "RECHAZADO"]);
        return $documento;
    }
    //   public static function boot()
    //   {
    //       parent::boot();
    //       self::creating(function ($documento) {
    //           $documento->idAsset = $documento->max('idAsset') + 1;
    //       });
    //   }


}
