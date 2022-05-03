@extends('layouts.app')
@section('titulo', 'Listado docentes')
@section('contenido')
<br>
<br>
@if(Session::has('success'))
  <div class="alert alert-success">
      {{Session::get('success')}}
   </div>
@endif
<h3>Listado de docentes</h3>
<div class="row">
    @foreach($docente as $alias)
        <div class="col-lg">
            <br>
            <div class="card text-center" style="width: 18rem;">
                <img src="{{ Storage::url($alias->imagen) }}" class="card-img-top mx-auto" alt="Imagen del docente" >
                <div class="card-body">
                    <h5 class="card-title">{{$alias->nombre}}</h5>
                    <h6 class="card-title">{{$alias->titulo}}</h5>
                    <a href="/docentes/{{$alias->id}}" class="btn btn-primary btn-dark">Más info...</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
