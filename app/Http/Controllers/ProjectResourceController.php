<?php

namespace App\Http\Controllers;

use App\Models\ProjectResource;
use App\Http\Requests\StoreProjectResourceRequest;
use App\Http\Requests\UpdateProjectResourceRequest;

class ProjectResourceController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectResourceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectResourceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectResource  $projectResource
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectResource $projectResource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectResource  $projectResource
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectResource $projectResource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectResourceRequest  $request
     * @param  \App\Models\ProjectResource  $projectResource
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectResourceRequest $request, ProjectResource $projectResource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectResource  $projectResource
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectResource $projectResource)
    {
        //
    }
}
