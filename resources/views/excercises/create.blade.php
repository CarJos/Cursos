@extends('layouts.app')
@section('titulo', 'Crear curso' )
@section('contenido')
        <br>
        <br>
        @if(Session::has('success'))
  <div class="alert alert-success">
      {{Session::get('success')}}
   </div>
@endif
        <h3>Creación de nuevo curso</h3>
        <form action="/cursos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Ingrese el nombre del curso</label>
            <input id= "nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="desc">Ingrese una descripción del curso</label>
            <input id= "desc" class="form-control" type="text" name="descripcion">
        </div>
        <div class="form-group">
            <label for="img">Cargue una imagen para el curso</label>
            <br>
            <input id= "img" type="file" name="imagen">
        </div>
        <button class="btn btn-dark" type="submit">Crear curso</button>
        </form>
@endsection
