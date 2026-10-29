<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentoAlumno extends Model
{
    protected $table = 'documentos_alumnos';
    public $timestamps = false;

    protected $fillable = [
        'alumno_id',
        'tipo',
        'ruta_archivo',
        'nombre_original',
        'fecha_subida',
    ];

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'alumno_id');
    }
}
