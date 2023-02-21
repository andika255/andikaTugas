<?php

namespace App\Http\Controllers;

use App\Katagori;
use Illuminate\Http\Request;

class KatagoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('katagori.index');
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
     * @param  \App\Katagori  $katagori
     * @return \Illuminate\Http\Response
     */
    public function show(Katagori $katagori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Katagori  $katagori
     * @return \Illuminate\Http\Response
     */
    public function edit(Katagori $katagori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Katagori  $katagori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Katagori $katagori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Katagori  $katagori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Katagori $katagori)
    {
        //
    }
}
