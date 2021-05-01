@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="min-height: 80vh">
                <div class="card-header">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('productos')}}">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="{{route('inventario')}}">Inventario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Clientes</a>
                        </li>
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

                                </ul>



                            </div>

{{--                            <div class="col-1"></div>--}}

                            <div class=" p-3 bg-light col overflow-auto flex-shrink-0  " style=" margin-left: 8px">


                                <div class="container ">
                                    <div class="row">

                                            @foreach ($datos as $dato)
                                                <div class="col-12 bg-white rounded-bottom rounded-top">
                                                    <h1 class="text-center">Misión</h1>
                                                    <p class="pt-3 ">
                                                        {{ $dato->mision }}
                                                    </p>

                                                    <h1 class="text-center">Visión</h1>
                                                    <p class="pt-3">{{ $dato->vision }}</p>

                                                </div>
                                            @endforeach

                                    </div>

                                    {{ $datos->links() }}
                                </div>







                            </div>

                        </div>







                </div>
            </div>
        </div>
    </div>
</div>
@endsection
