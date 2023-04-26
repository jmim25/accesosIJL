<?php

namespace App\Http\Controllers;

use App\Models\Acceso;
use Illuminate\Http\Request;

class AccesoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $acceso = new Acceso;

        $acceso->nombre = $request->nombre;
        $acceso->area = $request->area;
        $acceso->descripcion = $request->proposito;

        $acceso->save();

        return redirect('/accesos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Acceso $acceso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Acceso $acceso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Acceso $acceso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acceso $acceso)
    {
        //
    }
}
