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
                                <a class="nav-link" href="#">Clientes</a>
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
                                        <a href="#" class="nav-link active">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                                            Inicio
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link link-dark">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                                            Consulta
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link link-dark">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                                            Proforma
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link link-dark">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                                            Clientes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link link-dark">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                                            Proveedores
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link link-dark">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                                            Control Interno
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link link-dark">
                                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                                            Historial
                                        </a>
                                    </li>
                                </ul>



                            </div>

                            <div class=" p-3 bg-light col overflow-auto flex-shrink-0  " style=" margin-left: 8px">


                                <div class="container ">
                                    <div class="row">
                                        <div class="col-12">

                                            <div id="accordion">
                                                @foreach ($productos as $producto)
                                                <div class="card">
                                                    <div class="card-header" id="heading{{$producto->id}}">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$producto->id}}" aria-expanded="false" aria-controls="collapse{{$producto->id}}">
                                                                <span>{{$producto->codigo}}</span>
                                                            </button>
                                                        </h5>
                                                    </div>

                                                    <div id="collapse{{$producto->id}}" class="collapse" aria-labelledby="heading{{$producto->id}}" data-parent="#accordion">
                                                        <div class="card-body d-inline-flex">
                                                            <img class="rounded-top rounded-bottom pr-2" src="https://loremflickr.com/150/150"  alt="">
                                                            <p class="">Materiales: {{$producto->materiales}} <br>
                                                                Peso: {{$producto->peso}}gr <br>
                                                                Tipo: {{$producto->tipo}} <br>
                                                                Precio: {{$producto->precio}} <br>
                                                                Stock: {{$producto->stock}} <br>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach

                                                {{ $productos->links() }}


                                            </div>

                                        </div>
                                    </div>
                                </div>


@endsection
