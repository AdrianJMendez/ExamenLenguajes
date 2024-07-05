<?php

namespace App\Http\Controllers;
use App\Models\contacto;
use Illuminate\Http\Request;

class contactoController extends Controller
{
    public function directorioMostrar(){
        $contactos = contacto::all();
        return view('directorio', compact('contactos'));
    }

    public function buscarContacto(){
        return view('buscar');
    }
  
    public function agregarContacto(){
        return view('crearEntrada');
    }

    public function guardarContacto(Request $request){
        $nvocontacto = new contacto();
        $nvocontacto->codigoEntrada = $request->codigoEntrada;
        $nvocontacto->nombre = $request->nombre;
        $nvocontacto->apellido = $request->apellido;
        $nvocontacto->telefono = $request->telefono;
        $nvocontacto->save();

        return view('directorio');
    }

    public function eliminarContacto($codigoEntrada){
        $nvocontacto = contacto::find($codigoEntrada);
        $nvocontacto->delete();

        return redirect('/directorio');
    }
}
