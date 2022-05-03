@extends('layouts.app')
@section('titulo', 'Editar docente' )
@section('contenido')
        <br>
        <br>
        <h3>Editar docente</h3>
        <form action="/docentes/{{$docente->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Modifique el nombre del docente</label>
            <input id= "nombre" class="form-control" type="text" name="nombre" value="{{$docente->nombre}}">
        </div>
        <div class="form-group">
            <label for="titulo">Ingrese el titulo del docente</label>
            <input id= "titulo" class="form-control" type="text" name="titulo" value="{{$docente->titulo}}">
        </div>
        <div class="form-group">
            <label for="desc">Modifique descripción del docente</label>
            <input id= "desc" class="form-control" type="text" name="descripcion" value="{{$docente->descripcion}}">
        </div>
        <div class="form-group">
            <label for="edad">Ingrese la edad del docente</label>
            <input id= "edad" class="form-control" type="number" name="edad" value="{{$docente->edad}}">
        </div>
        <div class="form-group">
            <label for="img">Cargue una nueva imagen para el docente</label>
            <br>
            <input id= "img" type="file" name="imagen">
        </div>
        <button class="btn btn-dark" type="submit">Actualizar</button>
        </form>
@endsection
