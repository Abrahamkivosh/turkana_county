<?php

namespace App\Http\Controllers;

use App\Models\ProjectBudget;
use App\Http\Requests\StoreProjectBudgetRequest;
use App\Http\Requests\UpdateProjectBudgetRequest;

class ProjectBudgetController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectBudgetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectBudgetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectBudget  $projectBudget
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectBudget $projectBudget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectBudget  $projectBudget
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectBudget $projectBudget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectBudgetRequest  $request
     * @param  \App\Models\ProjectBudget  $projectBudget
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectBudgetRequest $request, ProjectBudget $projectBudget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectBudget  $projectBudget
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectBudget $projectBudget)
    {
        //
    }
}
