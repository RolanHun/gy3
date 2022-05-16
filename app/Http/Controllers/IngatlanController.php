<?php

namespace App\Http\Controllers;

use App\Models\Ingatlan;
use Illuminate\Http\Request;

class IngatlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $ingatlan = Ingatlan::with('kategoria')->get();
        return $ingatlan;
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
       
        $ingatlan = new Ingatlan();
        $ingatlan->id = $request->id;
        $ingatlan->leiras = $request->leiras;
        $ingatlan->kep = $request->kep;
        $ingatlan->kategoria = $request->kategoria;
        $ingatlan->tehermentes = $request->tehermentes;
        $ingatlan->hirdetesDatuma = $request->hirdetesDatuma;
        $ingatlan->save();
    }   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingatlan  $ingatlan
     * @return \Illuminate\Http\Response
     */
    public function show(Ingatlan $ingatlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingatlan  $ingatlan
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingatlan $ingatlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingatlan  $ingatlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingatlan $ingatlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingatlan  $ingatlan
     * @return \Illuminate\Http\Response
     */
    public function destroy($ingatlan)
    {  
        $torolendo = Ingatlan::find($ingatlan);
        $torolendo->delete();
    }
}
