@extends('layouts.app')
@section('titulo', 'docente seleccionado')
@section('contenido')
<br>
<br>
<div class="col-lg">
            <br>
            <div class="card text-center" style="width: 18rem;">
                <img src="{{ Storage::url($docente->imagen) }}" class="card-img-top mx-auto" alt="Imagen del docente" >
                <div class="card-body">
                    <h5 class="card-title">{{$docente->nombre}}</h5>
                    <h6 class="card-title">{{$docente->edad}}</h5>
                    <p class="card-text">{{$docente->descripcion}}</p>
                    <p class="card-text">{{$docente->titulo}}</p>
                    <a href="/docentes/{{$docente->id}}/edit" class="btn btn-primary btn-dark">Editar</a>
                </div>
            </div>
        </div>
@endsection
