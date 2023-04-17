<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;
class EmpleadosController extends Controller
{
    //

    public function index(){ return Empleados::paginate(); }

    public function show($id){ return Empleados::find($id); }

    public function create(Request $request){

        $empleados = new Empleados();
        $empleados->nombre = $request->input('nombre');
        $empleados->apellidos = $request->input('apellidos');
        $empleados->edad = $request->input('edad');
        $empleados->salario = $request->input('salario');
        $empleados->save();
        return json_encode(["msg"=>"agregado"]);

    }

    public function eliminar($id){

        Empleados::destroy($id);
        return json_encode(["msg"=>"eliminado"]);

    }

    public function editar(Request $request, $id){

        $nombre = $request->input('nombre');
        $apellidos = $request->input('apellidos');
        $edad = $request->input('edad');
        $salario = $request->input('salario');

        Empleados::where('id', $id)->update([ 'nombre'=>$nombre, 'apellidos'=>$apellidos, 'edad'=>$edad,'salario'=>$salario ]);

        return json_encode(["msg"=>"Actualizado"]);

    }


}

