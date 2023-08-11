<?php

namespace Puikepixels\PuikCrmCore\Http\Controllers;

use Puikepixels\PuikCrmCore\Http\Requests\StoreProjectRequest;
use Puikepixels\PuikCrmCore\Http\Requests\UpdateProjectRequest;
use Puikepixels\PuikCrmCore\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Project::class);

        $data = Project::latest()->paginate(20);

        $model = 'project';

        return view('puik-crm-core::projects.index',compact('data', 'model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        dd('works');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
