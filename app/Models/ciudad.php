<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ciudad
 *
 * @property $idCiudad
 * @property $nombreCiudad
 * @property $region_idRegion
 * @property $estado
 * @property $created_at
 * @property $updated_at

 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class ciudad extends Model
{
  public $table = "ciudad";
  static $rules = [
    'idCiudad' => 'required',
    'nombreCiudad' => 'required',
    'region_idRegion' => 'required',
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
  protected $fillable = ['idCiudad', 'nombreCiudad', 'region_idRegion', 'estado','created_at', 'update_at'];
  protected $primaryKey = 'idCiudad';

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
//   public function arriendos()
//   {
//     return $this->hasMany('App\Models\Arriendo', 'cliente_idRegion', 'idRegion');
//   }
}