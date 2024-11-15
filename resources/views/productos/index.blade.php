@extends('layouts.layout')

@section('title', 'listado de producto')
@section('content')

    <div class="row text-center">
        <h1>PRODUCTOS </h1>
    </div>

    <div class="row justify-content-end">
        <div class="col-2">
            <a class="btn btn-success" href="{{ route('producto.create') }}">CREAR PRODUCTO</a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-10">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nombre</th>
                        <th scope="col">descripciont</th>
                        <th scope="col">precio</th>
                        <th scope="col">acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->precio }}</td>
                            <td>descripcion del producto</td>
                            <td>200</td>
                            <td>
                                <div class="row">
                                    <div class="col-4">
                                        <a class="btn btn-primary"
                                            href="{{ route('producto.edit', $producto->id) }}">EDITAR</a>

                                    </div>
                                    <div class="col-1">
                                        <form action="{{route('producto.delete',$producto->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('seguro que desea eliminar el producto?')">
                                                ELIMINAR</button>

                                        </form>

                                    </div>
                                </div>




                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>

@endsection
