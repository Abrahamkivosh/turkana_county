<?php

namespace App\Http\Controllers;

use App\Models\KPI;
use App\Http\Requests\StoreKPIRequest;
use App\Http\Requests\UpdateKPIRequest;

class KPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreKPIRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKPIRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KPI  $kPI
     * @return \Illuminate\Http\Response
     */
    public function show(KPI $kPI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KPI  $kPI
     * @return \Illuminate\Http\Response
     */
    public function edit(KPI $kPI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKPIRequest  $request
     * @param  \App\Models\KPI  $kPI
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKPIRequest $request, KPI $kPI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KPI  $kPI
     * @return \Illuminate\Http\Response
     */
    public function destroy(KPI $kPI)
    {
        //
    }
}
