<?php

namespace App\Http\Controllers;

use App\Models\WardBudget;
use App\Http\Requests\StoreWardBudgetRequest;
use App\Http\Requests\UpdateWardBudgetRequest;

class WardBudgetController extends Controller
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
     * @param  \App\Http\Requests\StoreWardBudgetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWardBudgetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WardBudget  $wardBudget
     * @return \Illuminate\Http\Response
     */
    public function show(WardBudget $wardBudget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WardBudget  $wardBudget
     * @return \Illuminate\Http\Response
     */
    public function edit(WardBudget $wardBudget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWardBudgetRequest  $request
     * @param  \App\Models\WardBudget  $wardBudget
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWardBudgetRequest $request, WardBudget $wardBudget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WardBudget  $wardBudget
     * @return \Illuminate\Http\Response
     */
    public function destroy(WardBudget $wardBudget)
    {
        //
    }
}
