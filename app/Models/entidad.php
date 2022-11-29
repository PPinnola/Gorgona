<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entidad extends Model
{
    use HasFactory;
    public $table = "entidad";
    static $rules = [
      'idEntidad ' => 'required',
      'rutEntidad' => 'required',
      'contrasenaEntidad' => 'required',
      'rolEntidad' => 'required',
      'estado' => 'required',
  
    ];
    protected $fillable = ['idEntidad','rutEntidad','secreto','certificado','contrasenaEntidad','rolEntidad', 'estado'];
   protected $primaryKey = 'idEntidad';
}
