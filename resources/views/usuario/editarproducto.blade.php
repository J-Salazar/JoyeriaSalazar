@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="min-height: 80vh">
                    <div class="card-header">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('productos')}}">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"  href="{{route('inventario')}}">Inventario</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('clientes')}}">Clientes</a>
                            </li>
                            {{--                        <li class="nav-item">--}}
                            {{--                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
                            {{--                        </li>--}}
                        </ul>

                    </div>

                    <div class="container-fluid">
                        {{--                    @if (session('status'))--}}
                        {{--                        <div class="alert alert-success" role="alert">--}}
                        {{--                            {{ session('status') }}--}}
                        {{--                        </div>--}}
                        {{--                    @endif--}}
                        <div class="row card-body p-3">
                            <div class="d-block p-3 bg-light col-2" style="width: 280px;">

                                <ul class="nav nav-pills flex-column mb-auto">
                                    <li class="nav-item">
                                        <a href="{{ route('inventario') }}" class="nav-link link-dark">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                                            Listado
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('nuevoproducto') }}" class="nav-link link-dark">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                                            Agregar producto
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('nuevoproducto') }}" class="nav-link active">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                                            Editar producto
                                        </a>
                                    </li>
                                </ul>



                            </div>

                            <div class=" p-3 bg-light col overflow-auto flex-shrink-0  " style=" margin-left: 8px">


                                <div class="container ">
                                    <div class="row">
                                        <div class="col-12">

                                            <form action="{{ url('/editar/'.$producto->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <img src="{{ asset('storage/product/'.$producto->direccion) }}" width="600" height="400" alt=""><br>

                                                <label for="materiales" class="col-form-label text-md-left">Materiales</label>
                                                <input id="materiales" type="text" class="form-control" name="materiales" value="{{ $producto->materiales }}" required autocomplete="materiales">
                                                <label for="peso" class="col-form-label text-md-left">Peso</label>
                                                <input id="peso" type="text" class="form-control" name="peso" value="{{ $producto->peso }}" required autocomplete="peso">
                                                <label for="tipo" class="col-form-label text-md-left">Tipo</label>
                                                <input id="tipo" type="text" class="form-control" name="tipo" value="{{ $producto->tipo }}" required autocomplete="tipo">


                                                <div class="form-row mt-4">
                                                    <div class="input-group col-8">
                                                        <label for="precio" class="col-form-label text-md-left mr-3">Precio</label>
                                                        <input id="precio" type="text" class="form-control col-2" name="precio" value="{{ $producto->precio }}" required autocomplete="precio">
                                                        <input id="" type="text" class="form-control col-2 disabled" name="" value="soles" readonly>
                                                    </div>


                                                    <div class="input-group col-4">
                                                        <label for="stock" class="col-form-label text-md-left mr-3">Stock</label>
                                                        <input id="stock" type="number" class="form-control " name="stock" value="{{ $producto->stock }}" required autocomplete="stock">
                                                        <input id="" type="text" class="form-control disabled" name="" value="unidades" readonly>
                                                    </div>

                                                    <div class="d-grid gap-2 col-12 mt-4">
                                                        <button class="btn btn-primary" type="submit">Agregar</button>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>


@endsection
