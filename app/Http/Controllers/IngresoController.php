<?php

namespace App\Http\Controllers;


use App\Ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresos= Ingreso::All();
        return view('ingresos.ingresos', compact('ingresos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('ingresos.CreateIngreso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   
    {
        $validatedData = $request->validate([
            'nombreingreso'=>'required',
            'monto'=>'required|int'
            ]);
       $ingresos = new Ingreso(); 
        
        $ingresos->descripcion = $request->input('descripcion');
        $ingresos->nombreingreso = $request->input('nombreingreso');
        $ingresos->monto = $request->input('monto');
        $ingresos->fechaingreso = $request->input('fechaingreso');
        $ingresos->save();

        $ingresos = Ingreso::All();
        return view('ingresos.ingresos', compact('ingresos'));    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function show(Ingreso $ingreso)
    {
        $ingresos = Ingreso::All();
        return view('ingresos.ingresos', compact('ingresos'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingreso  $ingreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingreso  $ingreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingreso  $ingreso)
    {
        //
    }
}
