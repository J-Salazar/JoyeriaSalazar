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
                                <a class="nav-link active" aria-current="page" href="{{route('productos')}}">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"   href="{{route('inventario')}}">Inventario</a>
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

                                        @foreach ($productos as $producto)
                                            <div class="col-4 bg-white rounded-bottom rounded-top p-3">



                                                <figure>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-light"
                                                            data-toggle="modal"
                                                            data-target="#exampleModal"
                                                            data-codigo="{{ $producto->codigo }}"
                                                            data-materiales="{{ $producto->materiales }}"
                                                            data-peso="{{ $producto->peso }}"
                                                            data-tipo="{{ $producto->tipo }}"
                                                            data-precio="{{ $producto->precio }}"
                                                            data-stock="{{ $producto->stock }}"
                                                            data-direccion="{{ $producto->direccion }}"
                                                            >
{{--                                                        <img src="https://loremflickr.com/200/200/jewelry?lock=1" alt="">--}}
                                                        @if($producto->direccion == null)
                                                            <img src="https://loremflickr.com/200/200/jewelry" alt="">
                                                        @else
                                                            <img src="{{ asset('storage/product/'.$producto->direccion) }}" width="200" height="200" alt="">
                                                        @endif



                                                        <figcaption class="pt-2">Codigo: <span>{{ $producto->codigo }}</span></figcaption>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Producto</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-12 d-flex justify-content-center">
{{--                                                                                <img src="https://loremflickr.com/600/600/jewelry?lock=1" alt="">--}}
                                                                                <img id="img" src="{{ asset('storage/product/'.$producto->direccion) }}" alt="">
                                                                            </div>
                                                                            <figcaption class="pt-2 font-weight-bold text-dark">
                                                                                Codigo: <span id="codigo" class="font-italic text-secondary"></span>
                                                                            </figcaption>
                                                                            <figcaption class="pt-2 font-weight-bold">
                                                                                Materiales: <span id="materiales" class="text-secondary"></span>
                                                                            </figcaption>
                                                                            <figcaption class="pt-2 font-weight-bold">
                                                                                Peso: <span id="peso" class="text-secondary"></span> gr.
                                                                            </figcaption>
                                                                            <figcaption class="pt-2 font-weight-bold">
                                                                                Tipo: <span id="tipo" class="text-secondary"></span>
                                                                            </figcaption>
                                                                            <figcaption class="pt-2 font-weight-bold">
                                                                                Precio: $ <span id="precio" class="text-secondary"></span>
                                                                            </figcaption>
                                                                            <figcaption class="pt-2 font-weight-bold">
                                                                                Stock: <span id="stock" class="text-secondary"></span> unidades
                                                                            </figcaption>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
{{--                                                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </figure>




                                            </div>
                                        @endforeach

                                    </div>

                                    {{ $productos->links() }}
                                </div>







                            </div>

                        </div>







                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script>
        $(document).ready(
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var modalcodigo = button.data('codigo')
            var modalmateriales = button.data('materiales')
            var modalpeso = button.data('peso')
            var modaltipo = button.data('tipo')
            var modalprecio = button.data('precio')
            var modalstock = button.data('stock')
            var modaldireccion = button.data('direccion')


            var modal = $(this)
            modal.find('#img').attr("src", "http://joyeriasalazar.test/storage/product/"+modaldireccion)
            modal.find('#codigo').text(modalcodigo)
            modal.find('#materiales').text(modalmateriales)
            modal.find('#peso').text(modalpeso)
            modal.find('#tipo').text(modaltipo)
            modal.find('#precio').text(modalprecio)
            modal.find('#stock').text(modalstock)
        })
        )
    </script>
@endsection
