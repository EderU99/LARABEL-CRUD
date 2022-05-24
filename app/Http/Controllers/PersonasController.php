<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public function index()
    {
        //Pagina de inicio
        $datos= Personas::all();
        return view('inicio', compact('datos'));
    }


    public function create()
    {
        //Formulario para agregar datos
        return view('agregar');
    }

    public function store(Request $request)
    {
        //guarda los datos en la base de datos
        $personas = new Personas();
        $personas->NumeroEmpleado = $request->post('NumeroEmpleado');
        $personas->Nombre = $request->post('Nombre');
        $personas->ApellidoPaterno = $request->post('ApellidoPaterno');
        $personas->ApellidoMaterno = $request->post('ApellidoMaterno');
        $personas->Departamento = $request->post('Departamento');
        $personas->Puesto = $request->post('Puesto');
        $personas->Estatus = $request->post('Estatus');
        $personas->FechaNacimiento = $request->post('FechaNacimiento');
        $personas->save();

        return redirect()->route("personas.index")->with("success", "Agregado con Exito!");
    }

    public function show($id)
    {
        //mostrar un registro de la tabla
        $personas = Personas::find($id);
        return view("eliminar", compact('personas'));

    }


    public function edit($id)
    {
        //editar datos


        $personas = Personas::find($id);
        return view("actualizar", compact('personas'));

    }


    public function update(Request $request, $id)
    {
        //actualiza los datos en la base de datos
        $personas = Personas::find($id);
        $personas->NumeroEmpleado = $request->post('NumeroEmpleado');
        $personas->Nombre = $request->post('Nombre');
        $personas->ApellidoPaterno = $request->post('ApellidoPaterno');
        $personas->ApellidoMaterno = $request->post('ApellidoMaterno');
        $personas->Departamento = $request->post('Departamento');
        $personas->Puesto = $request->post('Puesto');
        $personas->Estatus = $request->post('Estatus');
        $personas->FechaNacimiento = $request->post('FechaNacimiento');
        $personas->save();

        return redirect()->route("personas.index")->with("success", "Actualizado con Exito!");


    }


    public function destroy($id)
    {
        //elimina un registro
        $personas = Personas::find($id);
        $personas->delete();
        return redirect()->route("personas.index")->with("success", "Eliminado con Exito!");

    }
}
