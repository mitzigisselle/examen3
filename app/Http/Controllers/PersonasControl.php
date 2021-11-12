<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasControl extends Controller
{
    public function index(){
        $persona = Personas::orderBy('id','desc')->paginate();
        return view('personas.index', compact('persona'));
    }

    public function ingresar(){
        return view('personas.ingresar');
    }

    public function store(Request $request){
        $persona = new Personas();

        $persona->Apaterno = $request->Apaterno;
        $persona->Amaterno = $request->Amaterno;
        $persona->nombre = $request->nombre;
        $persona->fecha = $request->fecha;
        $persona->sexo = $request->sexo;

       $persona->save();

       return redirect()->route('personas.index', $persona);


    }


    public function edit(Personas $persona){

        return view ('personas.edit', compact('persona'));

    }

    public function update(Request $request, Personas $persona){

        $persona->Apaterno = $request->Apaterno;
        $persona->Amaterno = $request->Amaterno;
        $persona->nombre = $request->nombre;
        $persona->fecha = $request->fecha;
        $persona->sexo = $request->sexo;
       
        $persona->save();

        return redirect()->route('personas.index', $persona);
    }

    public function destroy(Personas $persona){
        $persona->delete();
        return redirect()->route('personas.index');
    }


}
