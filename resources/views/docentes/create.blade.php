@extends('layouts.app')
@section('titulo', 'Crear docente' )
@section('contenido')
        <br>
        <br>
        @if(Session::has('success'))
  <div class="alert alert-success">
      {{Session::get('success')}}
   </div>
@endif
        <h3>Creación de nuevo docente</h3>
        <form action="/docentes" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Ingrese el nombre del docente</label>
            <input id= "nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="titulo">Ingrese el titulo del docente</label>
            <input id= "titulo" class="form-control" type="text" name="titulo">
        </div>
        <div class="form-group">
            <label for="desc">Ingrese una descripción del docente</label>
            <input id= "desc" class="form-control" type="text" name="descripcion">
        </div>
        <div class="form-group">
            <label for="edad">Ingrese la edad del docente</label>
            <input id= "edad" class="form-control" type="number" name="edad">
        </div>
        <div class="form-group">
            <label for="img">Cargue una imagen para el docente</label>
            <br>
            <input id= "img" type="file" name="imagen">
        </div>
        <button class="btn btn-dark" type="submit">Crear docente</button>
        </form>
@endsection
