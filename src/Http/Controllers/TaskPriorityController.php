<?php

namespace Puikepixels\PuikCrmCore\Http\Controllers;

use App\Http\Requests\StoreTaskPriorityRequest;
use App\Http\Requests\UpdateTaskPriorityRequest;
use Puikepixels\PuikCrmCore\Models\TaskPriority;

class TaskPriorityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', TaskPriority::class);

        $data = TaskPriority::latest()->paginate(20);

        $model = 'taskprioritie';

        return view('taskpriorities.index',compact('data', 'model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', TaskStatus::class);
        return view('taskpriorities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskPriorityRequest $request)
    {
        TaskPriority::create($request->post());
        return redirect()->route('taskpriorities.index')->with('success', 'TaskPriority has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskPriority $taskpriority)
    {
        $item = $taskpriority;
        $this->authorize('view', $item);

        $model = 'taskprioritie';
       
        return view('taskpriorities.show',compact('item', 'model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskPriority $taskpriority)
    {
        $this->authorize('edit', $taskpriority);
        $item = $taskpriority;
        return view('taskpriorities.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskPriorityRequest $request, TaskPriority $taskpriority)
    {
        $taskpriority->update($request->post());
        return redirect()->route('taskpriorities.index')->with('success', 'Taskpriority Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskPriority $taskpriority)
    {
        $this->authorize('delete', $taskpriority);
        $taskpriority->delete();
        return redirect()->route('taskpriorities.index')->with('success', 'Taskpriority Has Been deleted successfully');
    }
}
