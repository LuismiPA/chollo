<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function nuevos()
    {
        return view('nuevos');
    }

    public function destacados()
    {
        return view('destacados');
    }

    public function chollos()
    {
        return view('chollos');
    }

        public function formChollo(){
            return view('formChollo');
        }
        
        public function crearChollo(Request $request)
        {
            $cholloNuevo = new Chollo;

            $cholloNuevo-> titulo = $request->titulo;
            $cholloNuevo-> descripcion = $request->descripcion;
            $cholloNuevo-> url = $request->url;
            $cholloNuevo-> categoria=$request->categoria;
            $cholloNuevo-> puntuacion=$request->puntuacion;
            $cholloNuevo-> precio=$request->precio;
            $cholloNuevo-> precio_descuento=$request->precio_descuento;
            $cholloNuevo-> disponible=$request->boolean();

            $cholloNuevo->save();

            return back()->with('mensaje', 'Chollo agregado');
        }
}
