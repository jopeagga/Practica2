<?php
namespace App\Http\Controllers;
use App\estudiantes;
use Illuminate\Http\Request;
use App\Http\Requests\validaRequest;

class ControllerEstudiantes extends Controller
{
    public function mostrar()
{
return view ('AgregarEstudiantes');
}
public function store(validaRequest $request)
{
$estudiantes=new estudiantes();
$estudiantes->id=$request->id;
$estudiantes->Matricula=$request->Matricula;
$estudiantes->Nombre=$request->Nombre;
$estudiantes->Edad=$request->Edad;
$estudiantes->Direccion=$request->Direccion;
$estudiantes-> save();
return redirect('estudiantes');
}
}