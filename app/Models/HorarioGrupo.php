<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HorarioGrupo extends Model
{
    protected $table = 'horarios_grupo';
    public $timestamps = false;

    protected $fillable = [
        'grupo_id',
        'dia_semana',
        'hora_inicio',
        'hora_fin',
    ];

    // Un Horario pertenece a un Grupo
    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'grupo_id');
    }
}
