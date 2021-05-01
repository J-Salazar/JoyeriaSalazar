<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes = DB::table('clientes')->paginate(5);

        return view('usuario.clientes', ['clientes' => $clientes]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }

    public function registrar()
    {
        return view('usuario.agregarclientes');
    }

    public function registro(Request $request)
    {
        $cliente = new Cliente([

            "nombre" => $request->get('nombre'),
            "apellido" => $request->get('apellido'),
            "correo" => $request->get('correo'),
            "dni" => $request->get('dni'),
            "telefono" => $request->get('telefono'),


        ]);
        $cliente->save(); // Finally, save the record.


        return redirect(url('/clientes'));
    }
}
