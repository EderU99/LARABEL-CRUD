@extends('layout/plantilla')

@section("titulopagina", "Crear un Nuevo Registro")

@section('contenido')

<div class="card">
    <h5 class="card-header">Agregar Nuevo</h5>
    <div class="card-body">
      <p class="card-text">
          <form action="{{ route ('personas.store')}}" method="POST">
            @csrf
            <label for="">Número de Empleado</label>
            <input type="text" name="NumeroEmpleado" class="form-control" required>
            <label for="">Nombre</label>
            <input type="text" name="Nombre" class="form-control" required>
            <label for="">Apellido Paterno</label>
            <input type="text" name="ApellidoPaterno" class="form-control" required>
            <label for="">Apellido Materno</label>
            <input type="text" name="ApellidoMaterno" class="form-control" required>
            <label for="">Departamento</label>
            <input type="text" name="Departamento" class="form-control" required>
            <label for="">Puesto</label>
            <input type="text" name="Puesto" class="form-control" required>
            <label for="">Estatus</label>
            <input type="text" name="Estatus" class="form-control" required>
            <label for="">Fecha Nacimiento</label>
            <input type="date" name="FechaNacimiento" class="form-control" required>
            <br>
            <a href="{{ route ("personas.index")}}" class="btn btn-info ">
               <span class="fa-solid fa-person-walking-arrow-loop-left"></span> Regresar
            </a>
            <button class="btn btn-primary">
                <span class="fa-solid fa-user-plus"></span> Agregar
            </button>
          </form>
      </p>

    </div>
  </div>

@endsection
