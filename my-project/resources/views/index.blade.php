@extends('estatico')

@section('contenido')
   {{--  @foreach ($chollos as $chollo)
        <div class="card-deck">
            <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$chollo->titulo}}</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        
    @endforeach     --}}

<table class="table w-75 m-auto">
        <thead>
            <tr>
                <th>prueba1</th>
                <th>prueba2</th>
                <th>prueba3</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>
@endsection