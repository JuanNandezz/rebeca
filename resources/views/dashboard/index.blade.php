@extends('layouts.app')
@section('titulo', 'Dashboard')

@section('contenido')
<div class="py-3">
    <h5 class="fw-bold mb-1">Bienvenido, {{ auth()->user()->correo_institucional }}</h5>
    <p class="text-muted">Rol: <span class="badge bg-primary">{{ auth()->user()->rol->nombre }}</span></p>
</div>

@php $rol = auth()->user()->rol->nombre; @endphp

<div class="row g-3">

    {{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• ADMIN â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
    @if($rol === 'Admin')
        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-primary bg-opacity-10 p-3">
                        <i class="bi bi-people-fill text-primary fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Usuarios</div>
                        <div class="fw-bold fs-5">{{ $stats['total_usuarios'] }}</div>
                        <a href="{{ route('usuarios.index') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Gestionar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-success bg-opacity-10 p-3">
                        <i class="bi bi-person-badge text-success fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Alumnos</div>
                        <div class="fw-bold fs-5">{{ $stats['total_alumnos'] }}</div>
                        <a href="{{ route('alumnos.index') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Gestionar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-secondary bg-opacity-10 p-3">
                        <i class="bi bi-person-workspace text-secondary fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Docentes</div>
                        <div class="fw-bold fs-5">{{ $stats['total_docentes'] }}</div>
                        <a href="{{ route('docentes.index') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Gestionar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-info bg-opacity-10 p-3">
                        <i class="bi bi-building text-info fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Carreras</div>
                        <div class="fw-bold fs-5">{{ $stats['total_carreras'] }}</div>
                        <a href="{{ route('carreras.index') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Gestionar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-warning bg-opacity-10 p-3">
                        <i class="bi bi-collection text-warning fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Grupos</div>
                        <div class="fw-bold fs-5">{{ $stats['total_grupos'] }}</div>
                        <a href="{{ route('grupos.index') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Ver Grupos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-warning bg-opacity-10 p-3">
                        <i class="bi bi-shield-lock text-warning fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Roles</div>
                        <a href="{{ route('roles.index') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Gestionar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-danger bg-opacity-10 p-3">
                        <i class="bi bi-display text-danger fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">BitÃ¡cora</div>
                        <a href="{{ route('bitacora.index') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Ver Monitor</a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• DIRECTOR â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
    @if($rol === 'Director')
        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-primary bg-opacity-10 p-3">
                        <i class="bi bi-people-fill text-primary fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Usuarios</div>
                        <div class="fw-bold fs-5">{{ $stats['total_usuarios'] }}</div>
                        <a href="{{ route('usuarios.index') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Gestionar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-success bg-opacity-10 p-3">
                        <i class="bi bi-person-badge text-success fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Alumnos inscritos</div>
                        <div class="fw-bold fs-5">{{ $stats['total_alumnos'] }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-secondary bg-opacity-10 p-3">
                        <i class="bi bi-person-workspace text-secondary fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Docentes activos</div>
                        <div class="fw-bold fs-5">{{ $stats['total_docentes'] }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-danger bg-opacity-10 p-3">
                        <i class="bi bi-display text-danger fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Monitor del Sistema</div>
                        <a href="{{ route('bitacora.index') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Ver BitÃ¡cora</a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• COORDINADOR DE CARRERA â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
    @if($rol === 'Coordinador de Carrera')
        <div class="col-sm-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-success bg-opacity-10 p-3">
                        <i class="bi bi-person-badge text-success fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Alumnos</div>
                        <div class="fw-bold fs-5">{{ $stats['total_alumnos'] }}</div>
                        <a href="{{ route('usuarios.index') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Gestionar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-secondary bg-opacity-10 p-3">
                        <i class="bi bi-person-workspace text-secondary fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Docentes</div>
                        <div class="fw-bold fs-5">{{ $stats['total_docentes'] }}</div>
                        <a href="{{ route('usuarios.index') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Ver Docentes</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-danger bg-opacity-10 p-3">
                        <i class="bi bi-display text-danger fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Monitor del Sistema</div>
                        <a href="{{ route('bitacora.index') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Ver BitÃ¡cora</a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• PERSONAL ADMINISTRATIVO â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
    @if($rol === 'Personal Administrativo')
        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-success bg-opacity-10 p-3">
                        <i class="bi bi-person-badge text-success fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Alumnos</div>
                        <div class="fw-bold fs-5">{{ $stats['total_alumnos'] }}</div>
                        <a href="{{ route('alumnos.index') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Gestionar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-secondary bg-opacity-10 p-3">
                        <i class="bi bi-person-workspace text-secondary fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Docentes</div>
                        <div class="fw-bold fs-5">{{ $stats['total_docentes'] }}</div>
                        <a href="{{ route('docentes.index') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Gestionar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-primary bg-opacity-10 p-3">
                        <i class="bi bi-collection text-primary fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Grupos</div>
                        <div class="fw-bold fs-5">{{ $stats['total_grupos'] }}</div>
                        <a href="{{ route('grupos.index') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Ver Grupos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-warning bg-opacity-10 p-3">
                        <i class="bi bi-card-list text-warning fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Kardex</div>
                        <a href="{{ route('kardex.index') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Gestionar</a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• DOCENTE â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
    @if($rol === 'Docente')
        <div class="col-sm-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-primary bg-opacity-10 p-3">
                        <i class="bi bi-collection text-primary fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Mis Grupos</div>
                        <div class="fw-bold fs-5">{{ $stats['mis_grupos'] }}</div>
                        <a href="{{ route('kardex.mis-grupos') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Calificaciones</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-success bg-opacity-10 p-3">
                        <i class="bi bi-person-badge text-success fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Mis Alumnos</div>
                        <div class="fw-bold fs-5">{{ $stats['mis_alumnos'] }}</div>
                        <a href="{{ route('kardex.mis-grupos') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Ver Kardex</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-success bg-opacity-10 p-3">
                        <i class="bi bi-check2-square text-success fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Asistencias</div>
                        <a href="{{ route('asistencias.index') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Registrar</a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• ALUMNO â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
    @if($rol === 'Alumno')
        @php $alumno = $stats['alumno'] ?? null; @endphp
        @if($alumno)
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-primary bg-opacity-10 p-3">
                        <i class="bi bi-person-circle text-primary fs-3"></i>
                    </div>
                    <div>
                        <h6 class="mb-0 fw-bold">{{ $alumno->nombres }} {{ $alumno->apellidos }}</h6>
                        <small class="text-muted">
                            MatrÃ­cula: <strong>{{ $alumno->matricula }}</strong>
                            @if($alumno->carrera)
                                &nbsp;Â·&nbsp; Carrera: <strong>{{ $alumno->carrera->nombre }}</strong>
                            @endif
                            &nbsp;Â·&nbsp;
                            <span class="badge {{ $alumno->estatus === 'Activo' ? 'bg-success' : 'bg-secondary' }}">{{ $alumno->estatus }}</span>
                        </small>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="col-sm-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-primary bg-opacity-10 p-3">
                        <i class="bi bi-card-list text-primary fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Mis Calificaciones</div>
                        <a href="{{ route('kardex.mi-kardex') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Ver Kardex</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-success bg-opacity-10 p-3">
                        <i class="bi bi-check2-square text-success fs-4"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Mis Asistencias</div>
                        <a href="{{ route('asistencias.mis-asistencias') }}" class="stretched-link fw-semibold text-decoration-none text-dark small">Ver</a>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>
@endsection
