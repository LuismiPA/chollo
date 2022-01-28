<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        /* $chollos = Chollo::all(); */
        $chollos = Chollo::paginate(6);
        
        return view('index',compact('chollos'));
    }

    public function nuevos()
    {
        return view('nuevos');
    }

    public function destacados()
    {
        return view('destacados');
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
            $cholloNuevo-> disponible=$request->disponible;

            $cholloNuevo->save();

            return back()->with('mensaje', 'Chollo agregado'); 

           
        }
        public function detalles($id){
            $chollo=Chollo::findOrFail($id);

            return view('chollo', compact('chollo'));
        }

    /* public function guardarImagen(Request $request){
        $request->validate([
            'file'=>'required|image/jpg'
        ]
        );
        return $request->file('file')->store('app/images');
    } */
}
