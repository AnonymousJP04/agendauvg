<?php
// En este modelo se define la estructura de la tabla contactos en la base de datos
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    //
    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'email',
    ]; // Campos que se pueden llenar masivamente. Se utiliza para proteger contra la asignación masiva
}
