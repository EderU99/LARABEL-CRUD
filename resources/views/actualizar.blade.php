@extends('layout/plantilla')

@section("titulopagina", "Crear un Nuevo Registro")

@section('contenido')

<div class="card">
    <h5 class="card-header">Actualizar Persona</h5>
    <div class="card-body">
      <p class="card-text">
          <form action="{{ route('personas.update', $personas->id) }}" method="POST">
              @csrf
              @method("PUT")
            <label for="">Número de Empleado</label>
            <input type="text" name="NumeroEmpleado" class="form-control" required value="{{$personas->NumeroEmpleado }}">
            <label for="">Nombre</label>
            <input type="text" name="Nombre" class="form-control" required value="{{$personas->Nombre}}">
            <label for="">Apellido Paterno</label>
            <input type="text" name="ApellidoPaterno" class="form-control" required value="{{$personas->ApellidoPaterno}}">
            <label for="">Apellido Materno</label>
            <input type="text" name="ApellidoMaterno" class="form-control" required value="{{$personas->ApellidoMaterno}}">
            <label for="">Departamento</label>
            <input type="text" name="Departamento" class="form-control" required value="{{$personas->Departamento}}">
            <label for="">Puesto</label>
            <input type="text" name="Puesto" class="form-control" required value="{{$personas->Puesto}}">
            <label for="">Estatus</label>
            <input type="text" name="Estatus" class="form-control" required value="{{$personas->Estatus}}">
            <label for="">Fecha Nacimiento</label>
            <input type="date" name="FechaNacimiento" class="form-control" required value="{{$personas->FechaNacimiento}}">
            <br>
            <a href="{{ route ("personas.index")}}" class="btn btn-info ">
                <span class="fa-solid fa-person-walking-arrow-loop-left"></span>  Regresar
            </a>
            <button class="btn btn-warning">
                <span class="fa-solid fa-user-pen"></span>  Actualizar
            </button>
          </form>
      </p>

    </div>
  </div>

@endsection
