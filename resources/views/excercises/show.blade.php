@extends('layouts.app')
@section('titulo', 'Curso seleccionado')
@section('contenido')
<br>
<br>
<div class="col-lg">
            <br>
            <div class="card text-center" style="width: 18rem;">
                <img src="{{ Storage::url($curso->imagen) }}" class="card-img-top mx-auto" alt="Imagen del curso" >
                <div class="card-body">
                    <h5 class="card-title">{{$curso->nombre}}</h5>
                    <p class="card-text">{{$curso->descripcion}}</p>
                    <a href="/cursos/{{$curso->id}}/edit" class="btn btn-primary btn-dark">Editar</a>
                </div>
            </div>
        </div>
@endsection
