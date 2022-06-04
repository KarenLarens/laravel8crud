<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detalle;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Vista index()';
        $detalles = Detalle::all();
        return view('detalle.index')->with('detalles',$detalles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detalle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalles = new Detalle();
        $detalles->venta_id = $request->get('venta_id');
        $detalles->articulo_id = $request->get('articuloo_id');
        $detalles->cantidad = $request->get('cantidad');
        $detalles->save();

        return redirect('/detalles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $detalle = Detalle::find($id);
         return view('detalle.edit')->with('detalle',$detalle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detalle = Detalle::find($id);
        $detalle->venta_id = $request->get('venta_id');
        $detalle->articulo_id = $request->get('articulo_id');
        $detalle->cantidad = $request->get('cantidad');
        $detalle->save();

        return redirect('/detalles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle = Detalle::find($id);        
        $detalle->delete();

        return redirect('/detalles');
    }
} 