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
                                <a class="nav-link" aria-current="page"  href="{{route('inventario')}}">Inventario</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('clientes')}}">Clientes</a>
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
                                            Todos los clientes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('registrarcliente') }}" class="nav-link active">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                                            Registrar cliente
                                        </a>
                                    </li>
                                </ul>



                            </div>

                            <div class=" p-3 bg-light col overflow-auto flex-shrink-0  " style=" margin-left: 8px">


                                <div class="container ">
                                    <div class="row">
                                        <div class="col-12">

                                            <form action="{{ url('/registrocliente') }}" method="post" enctype="multipart/form-data">
                                                @csrf

                                                <label for="nombre" class="col-form-label text-md-left">Nombre</label>
                                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre">

                                                <label for="apellido" class="col-form-label text-md-left">Apellido</label>
                                                <input id="apellido" type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido">

                                                <label for="correo" class="col-form-label text-md-left">Correo</label>
                                                <input id="correo" type="email" class="form-control" name="correo" value="{{ old('correo') }}" required autocomplete="correo">


                                                <div class="form-row mt-4">
                                                    <div class="input-group col-8">
                                                        <label for="dni" class="col-form-label text-md-left mr-3">DNI</label>
                                                        <input id="dni" type="text" class="form-control col-2" name="dni" value="{{ old('dni') }}" required autocomplete="dni">

                                                    </div>


                                                    <div class="input-group col-4">
                                                        <label for="telefono" class="col-form-label text-md-left mr-3">Telefono</label>
                                                        <input id="telefono" type="text" class="form-control " name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono">

                                                    </div>

                                                    <div class="d-grid gap-2 col-12 mt-4">
                                                        <button class="btn btn-primary" type="submit">Registrar</button>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>


@endsection
