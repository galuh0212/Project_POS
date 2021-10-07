<?php

namespace App\Http\Controllers;

use App\Models\BackendBd;
use Illuminate\Http\Request;

class BackendBdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return backendBd::all();
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
     * @param  \App\Models\BackendBd  $backendBd
     * @return \Illuminate\Http\Response
     */
    public function show(BackendBd $backendBd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BackendBd  $backendBd
     * @return \Illuminate\Http\Response
     */
    public function edit(BackendBd $backendBd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BackendBd  $backendBd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BackendBd $backendBd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BackendBd  $backendBd
     * @return \Illuminate\Http\Response
     */
    public function destroy(BackendBd $backendBd)
    {
        //
    }
}
