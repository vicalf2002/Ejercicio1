<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistentes extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "asistentes";
    protected $fillable = ['matricula','nombre', 'correo', 'motivo', 'uso_instalaciones', 'fecha_visita', 'hora_ingreso', 'telefono'];
    //protected $hidden = ['matricula'];

    public function obtenerAsistentes()
    {
        return Asistentes::all();
    }

    public function obtenerAsistente($id)
    {
        return Asistentes::find($id);
    }

}
