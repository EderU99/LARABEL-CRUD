@extends('layout/plantilla')

@section('tituloPagina', 'Crud con Laravel')

@section('contenido')

<div class="card">
    <h5 class="card-header">CRUD Larabel MYSQL Fuerza Civil</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))

                <div class="alert alert-success" role="alert">
                    {{$mensaje}}
                  </div>
                @endif

            </div>
        </div>
      <h5 class="card-title">Acceso Guardia</h5>
      <p>
          <a href="{{route("personas.create")}}" class="btn btn-primary">
            <span class="fa-solid fa-user-plus"></span> Agregar Nuevo Guardia

        </a>
      </p>
      <hr>
      <p class="card-text">
        <div class="table table-responsive">
            <table class="table table-sm table-bordered">
                <thead>
                    <th>Número Empleado</th>
                    <th>Nombre</th>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                    <th>Departamento/Área</th>
                    <th>Puesto</th>
                    <th>Estatus</th>
                    <th>Fecha Nacimiento</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    @foreach ($datos as $item)
                    <tr>
                        <td>{{ $item->NumeroEmpleado}}</td>
                        <td>{{ $item->Nombre}}</td>
                        <td>{{ $item->ApellidoMaterno}}</td>
                        <td>{{ $item->ApellidoPaterno}}</td>
                        <td>{{ $item->Departamento}}</td>
                        <td>{{ $item->Puesto}}</td>
                        <td>{{ $item->Estatus}}</td>
                        <td>{{ $item->FechaNacimiento}}</td>
                        <td>
                            <form action="{{route ("personas.edit", $item->id )}}" method="GET">
                                <button class="btn btn-warning btn-sm">
                                    <span class="fa-solid fa-user-pen"></span>
                                </button>
                            </form>
                        </td>

                        <td>
                            <form action="{{route("personas.show", $item->id )}}" method="GET">
                                <button class="btn btn-danger btn-sm">
                                <span class="fa-solid fa-user-xmark"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </p>

    </div>
  </div>
@endsection
