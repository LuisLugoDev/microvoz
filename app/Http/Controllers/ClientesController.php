<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Log;

class clientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = clientes::latest()->paginate(10);

        return Inertia::render('clientes/Index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('clientes/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(Request::all());
        clientes::create(
            Request::validate([
                'nombre' => ['required', 'max:90'],
                'apellido' => ['required'],
                'email' => ['required'],
                'organizacion' => ['required'],
                'numero_telefonico' => ['required'],
                'id_tipo_cliente' => ['required'],
                'descripcion_tipo_cliente' => ['required'],
            ])
        );

        return Redirect::route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(clientes $cliente)
    {
        // dd($cliente->all());
        
        return Inertia::render('clientes/Edit', [
            'clientes' => [
                'id' => $cliente->id,
                'nombre' => $cliente->nombre,
                'apellido' => $cliente->apellido,
                'email' => $cliente->email,
                'organizacion' => $cliente->organizacion,
                'numero_telefonico' => $cliente->numero_telefonico,
                'id_tipo_cliente' => $cliente->id_tipo_cliente,
                'descripcion_tipo_cliente' => $cliente->descripcion_tipo_cliente,
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clientes $clientes)
    {

        $request = Request::all();

        $data = Request::validate([
            'nombre' => ['required', 'max:90'],
            'apellido' => ['required'],
            'email' => ['required'],
            'organizacion' => ['required'],
            'numero_telefonico' => ['required'],
            'id_tipo_cliente' => ['required'],
            'descripcion_tipo_cliente' => ['required'],
            ]);
           
            $cliente = clientes::find($request['id']);
            $cliente->nombre = $data['nombre'];
            $cliente->apellido = $data['apellido'];
            $cliente->email = $data['email'];
            $cliente->organizacion = $data['organizacion'];
            $cliente->numero_telefonico = $data['numero_telefonico'];
            $cliente->id_tipo_cliente = $data['id_tipo_cliente'];
            $cliente->descripcion_tipo_cliente = $data['descripcion_tipo_cliente'];
            $cliente->save();
    

        return Redirect::route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(clientes $cliente)
    {
        $cliente->delete();
        
        return Redirect::route('clientes.index');
    }
}