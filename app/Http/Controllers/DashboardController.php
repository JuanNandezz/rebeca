<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Alumno;
use App\Models\Docente;
use App\Models\Grupo;
use App\Models\Carrera;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Muestra el panel principal según el rol del usuario autenticado.
     * Carga estadísticas relevantes para cada rol.
     */
    public function index()
    {
        $usuario = Usuario::with('rol')->find(Auth::id());
        $rol     = $usuario->rol->nombre ?? '';
        $stats   = [];

        switch ($rol) {
            case 'Admin':
                $stats = [
                    'total_usuarios' => Usuario::count(),
                    'total_alumnos'  => Alumno::count(),
                    'total_docentes' => Docente::count(),
                    'total_carreras' => Carrera::count(),
                    'total_grupos'   => Grupo::count(),
                ];
                break;

            case 'Director':
                $stats = [
                    'total_usuarios'  => Usuario::count(),
                    'total_alumnos'   => Alumno::count(),
                    'total_docentes'  => Docente::count(),
                    'total_grupos'    => Grupo::count(),
                ];
                break;

            case 'Coordinador de Carrera':
                $stats = [
                    'total_alumnos'  => Alumno::count(),
                    'total_docentes' => Docente::count(),
                    'total_grupos'   => Grupo::count(),
                ];
                break;

            case 'Personal Administrativo':
                $stats = [
                    'total_alumnos'  => Alumno::count(),
                    'total_docentes' => Docente::count(),
                    'total_grupos'   => Grupo::count(),
                ];
                break;

            case 'Docente':
                $docente = Auth::user()->docente;
                $stats = [
                    'mis_grupos'  => $docente ? Grupo::where('docente_id', $docente->id)->count() : 0,
                    'mis_alumnos' => $docente
                        ? \App\Models\KardexInscripcion::whereHas('grupo', fn($q) => $q->where('docente_id', $docente->id))->distinct('alumno_id')->count('alumno_id')
                        : 0,
                ];
                break;

            case 'Alumno':
                $alumno = Auth::user()->alumno;
                $stats  = ['alumno' => $alumno?->load('carrera')];
                break;
        }

        return view('dashboard.index', compact('usuario', 'stats'));
    }
}

