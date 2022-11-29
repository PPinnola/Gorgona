<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class region
 *
 * @property $idRegion
 * @property $nombreRegion
 * @property $estado
 * @property $created_at
 * @property $updated_at
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class region extends Model
{
  public $table = "region";
  static $rules = [
    'idRegion' => 'required',
    'nombreRegion' => 'required',
    'estado' => 'required',
    'created_at' => 'required',
    'update_at' => 'required',

  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['idRegion', 'nombreRegion', 'propiedad_idPropiedad', 'idNotario', 'idConservador', 'idComprador', 'idVendedor', 'fojaDocumento', 'fojaNumeroDocumento', 'fechaInscripcionConservador', 'fechaInscripcionNotario', 'firmaNotario', 'firmaConservador', 'firmaVendedor', 'firmaComprador', 'estado','created_at', 'update_at'];
  protected $primaryKey = 'idRegion';

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  // public function arriendos()
  // {
  //   return $this->hasMany('App\Models\Arriendo', 'cliente_idRegion', 'idRegion');
  // }
}
