<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('');
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
     * @param  \App\Models\Registro  $registroPais
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registroPais)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registroPais
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registroPais)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro  $registroPais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registroPais)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registroPais
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registroPais)
    {
        //
    }
}
