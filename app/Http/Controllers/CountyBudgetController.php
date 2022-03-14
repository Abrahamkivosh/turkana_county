<?php

namespace App\Http\Controllers;

use App\Models\CountyBudget;
use App\Http\Requests\StoreCountyBudgetRequest;
use App\Http\Requests\UpdateCountyBudgetRequest;

class CountyBudgetController extends Controller
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
     * @param  \App\Http\Requests\StoreCountyBudgetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountyBudgetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CountyBudget  $countyBudget
     * @return \Illuminate\Http\Response
     */
    public function show(CountyBudget $countyBudget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CountyBudget  $countyBudget
     * @return \Illuminate\Http\Response
     */
    public function edit(CountyBudget $countyBudget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCountyBudgetRequest  $request
     * @param  \App\Models\CountyBudget  $countyBudget
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCountyBudgetRequest $request, CountyBudget $countyBudget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CountyBudget  $countyBudget
     * @return \Illuminate\Http\Response
     */
    public function destroy(CountyBudget $countyBudget)
    {
        //
    }
}
