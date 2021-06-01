<?php

namespace App\Http\Controllers;

use App\Venta;
use App\Combo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            
            return Venta::join('combos','ventas.combo_id','=','combos.id_combo')->where('user_id',auth()->id())->get();
        }else{
            return view('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $venta =  new Venta();
        $venta->user_id = auth()->id();
        $venta->combo_id = $request->combo_id;
        $venta->save();
        return Venta::join('combos','ventas.combo_id','=','combos.id_combo')->where('user_id',auth()->id())->get();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Venta::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $venta =  Venta::find($id);
        $venta->user_id = auth()->id();
        $venta->combo_id = $request->combo_id;
        $venta->save();
        return $venta;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venta = Venta::find($id);
        $venta->delete();
    }
}
