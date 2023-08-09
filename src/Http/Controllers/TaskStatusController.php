<?php

namespace Puikepixels\PuikCrmCore\Http\Controllers;

use Puikepixels\PuikCrmCore\Http\Requests\StoreTaskStatusRequest;
use Puikepixels\PuikCrmCore\Http\Requests\UpdateTaskStatusRequest;
use Puikepixels\PuikCrmCore\Models\TaskStatus;

class TaskStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', TaskStatus::class);

        $data = TaskStatus::latest()->paginate(20);

        $model = 'taskstatuse';

        return view('taskstatuses.index',compact('data', 'model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', TaskStatus::class);
        return view('taskstatuses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskStatusRequest $request)
    {
        TaskStatus::create($request->post());
        return redirect()->route('taskstatuses.index')->with('success', 'Taskstatus has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskStatus $taskstatus)
    {
        $item = $taskstatus;
        $this->authorize('view', $item);

        $model = 'taskstatuse';
       
        return view('taskstatuses.show',compact('item', 'model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskStatus $taskstatus)
    {
        $this->authorize('edit', $taskstatus);
        $item = $taskstatus;
        return view('taskstatuses.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskStatusRequest $request, TaskStatus $taskstatus)
    {
        $taskstatus->update($request->post());
        return redirect()->route('taskstatuses.index')->with('success', 'Taskstatus Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskStatus $taskstatus)
    {
        $this->authorize('delete', $taskstatus);
        $taskstatus->delete();
        return redirect()->route('taskstatuses.index')->with('success', 'Taskstatus Has Been deleted successfully');
    }
}
