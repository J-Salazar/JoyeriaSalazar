<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ProductoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = DB::table('productos')->paginate(9);

        return view('usuario.productos', ['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
//        $request->validate([
//            'name' => 'required',
//        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('product', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $product = new Producto([
                $cod = bin2hex(random_bytes(4)),
                "codigo" => $cod,
                "materiales" => $request->get('materiales'),
                "peso" => $request->get('peso'),
                "tipo" => $request->get('tipo'),
                "precio" => $request->get('precio'),
                "stock" => $request->get('stock'),

                "direccion" => $request->file->hashName()
            ]);
            $product->save(); // Finally, save the record.
        }

        return redirect(url('/home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $product, Request $request, $productoid)
    {
        //
        Producto::Find($productoid)->update([
'materiales' => $request->get('materiales'),
'peso' => $request->get('peso'),
'tipo' => $request->get('tipo'),
'precio' => $request->get('precio'),
'stock'=> $request->get('stock')]);

        return redirect(url('/inventario'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inventario()
    {
        $productos = DB::table('productos')->paginate(5);

        return view('usuario.inventario', ['productos' => $productos]);
    }

    protected function agregar()
    {


        return view('usuario.nuevoproducto');
    }

    public function editar($productoid){

        $producto = Producto::Find($productoid);

        return view('usuario.editarproducto')->with('producto',$producto);

    }


}
