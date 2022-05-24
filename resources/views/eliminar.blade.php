@extends('layout/plantilla')

@section("titulopagina", "Crear un Nuevo Registro")

@section('contenido')

<div class="card">
    <h5 class="card-header">Eliminar una Persona</h5>
    <div class="card-body">
      <p class="card-text">
        <div class="alert alert-danger" role="alert">
            ¿Estas seguro de Eliminar a esta Persona?

            <table class="table table-sm table-hover table-bordered" style="background-color:yellow">
                <thead>
                    <th>Número Empleado</th>
                    <th>Nombre</th>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                    <th>Departamento/Área</th>
                    <th>Puesto</th>
                    <th>Estatus</th>
                    <th>Fecha Nacimiento</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $personas->NumeroEmpleado }}</td>
                        <td>{{ $personas->Nombre }}</td>
                        <td>{{ $personas->ApellidoPaterno}}</td>
                        <td>{{ $personas->ApellidoMaterno}}</td>
                        <td>{{ $personas->Departamento}}</td>
                        <td>{{ $personas->Puesto}}</td>
                        <td>{{ $personas->Estatus}}</td>
                        <td>{{ $personas->FechaNacimiento}}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="{{route('personas.destroy', $personas->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{ route ("personas.index")}}" class="btn btn-info ">
                    <span class="fa-solid fa-person-walking-arrow-loop-left"></span> Regresar
                 </a>
                <button class="btn btn-danger">
                <span class="fa-solid fa-user-xmark"></span>    Eliminar
                </button>
            </form>
          </div>

      </p>

    </div>
  </div>

@endsection
