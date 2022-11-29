<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class comuna
 *
 * @property $idUsuario 
 * @property $cedulaUsuario
 * @property $primerNombre
 * @property $segundoNombre
 * @property $tercerNombre
 * @property $primerApellido
 * @property $segundoApellido
 * @property $nacionalidad
 * @property $estadoCivil
 * @property $profesion
 * @property $institucion
 * @property $calle
 * @property $numero
 * @property $comuna_idComuna
 * @property $contrasena
 * @property $correo
 * @property $telefono
 * @property $rol
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class users extends Model
{
  public $table = "users";
  static $rules = [
    'idUsuario ' => 'required',
    'cedulaUsuario' => 'required',
    'primerNombre' => 'required',
    'segundoNombre' => 'required',
    'tercerNombre' => 'required',
    'primerApellido' => 'required',
    'segundoApellido' => 'required',
    'nacionalidad' => 'required',
    'estadoCivil' => 'required',
    'profesion' => 'required',
    'institucion' => 'required',
    'calle' => 'required',
    'numero' => 'required',
    'comuna_idComuna' => 'required',
    'contrasena' => 'required',
    'correo' => 'required',
    'telefono' => 'required',
    'rol' => 'required',

  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['idUsuario ','cedulaUsuario','primerNombre','segundoNombre','nacionalidad','estadoCivil','profesion','institucion', 'calle',
   'numero', 'comuna_idComuna', 'contrasena', 'correo','telefono', 'rol'];
  protected $primaryKey = 'idUsuario ';

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
//   public function arriendos()
//   {
//     return $this->hasMany('App\Models\Arriendo', 'cliente_idRegion', 'idRegion');
//   }
}