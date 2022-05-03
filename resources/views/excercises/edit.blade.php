@extends('layouts.app')
@section('titulo', 'Editar curso' )
@section('contenido')
        <br>
        <br>
        <h3>Editar curso</h3>
        <form action="/cursos/{{$curso->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">    
            <label for="nombre">Modifique el nombre del curso</label>
            <input id= "nombre" class="form-control" type="text" name="nombre" value="{{$curso->nombre}}">
        </div>
        <div class="form-group">    
            <label for="desc">Modifique descripción del curso</label>
            <input id= "desc" class="form-control" type="text" name="descripcion" value="{{$curso->descripcion}}">
        </div>
        <div class="form-group">    
            <label for="img">Cargue una nueva imagen para el curso</label>
            <br>
            <input id= "img" type="file" name="imagen">
        </div>
        <button class="btn btn-dark" type="submit">Actualizar</button>
        </form>
@endsection
