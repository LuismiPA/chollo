@extends('estatico')

@section('title')
    Detalle chollo
@endsection

@section('contenido')   
    <div class="d-flex flex-row bd-highlight mb-3 w-50 ml-5">
        <div class="imageDetalle p-2 bd-highlight"><img src={{asset('assets/images/'.$chollo->id.'-chollo-severo.jpg')}} width="200px" height="auto" alt="imagen chollo"></div>
        <div class="contentDetalle p-2 bd-highlight my-auto ml-5">
            {{-- <h3>ID: {{ $chollo -> id }}</h3> --}}
            <h3>Nombre: {{ $chollo -> titulo}}</h3>
            <h5 class="precioAntes d-inline">{{$chollo->precio}} </h5>
            <h5 class="precioOferta d-inline ml-2">{{$chollo->precio_descuento}}</h5>
            <h5><a href={{$chollo->url}}>Enlace al CHOLLO</a></h5>
        </div>
    </div>
    <h6 class="mt-4 ml-5 descripcionDetalles">{{ $chollo -> descripcion }}</h6>
    </div>
@endsection