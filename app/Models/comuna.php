<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class comuna
 *
 * @property $idComuna
 * @property $nombreComuna
 * @property $ciudad_idCiudad
 * @property $estado
 * @property $created_at
 * @property $updated_at
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class comuna extends Model
{
  public $table = "comuna";
  static $rules = [
    'idComuna' => 'required',
    'nombreComuna' => 'required',
    'ciudad_idCiudad' => 'required',
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
  protected $fillable = ['idComuna', 'nombreComuna', 'ciudad_idCiudad','estado','created_at', 'update_at'];
  protected $primaryKey = 'idComuna';

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
//   public function arriendos()
//   {
//     return $this->hasMany('App\Models\Arriendo', 'cliente_idRegion', 'idRegion');
//   }
}