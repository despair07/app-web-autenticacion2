@extends('layouts.layout')

@section('title', 'editar producto')

@section('content')

    <div class="row text-center" >
        <h1>Editar producto </h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-6">
            <form method="POST" action="{{ route('producto.update', $producto->id) }}">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" >

                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" id="nombre" name="descripcion" value="{{ $producto->descripcion }}">

                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="nombre" name="precio" value="{{ $producto->precio }}">

                </div>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-3">
                        <a class="btn btn-warning" href="{{route('producto.index')}}">VER PRODUCTOS</a>
                    </div>
                </div>


            </form>
        </div>
    </div>

@endsection
