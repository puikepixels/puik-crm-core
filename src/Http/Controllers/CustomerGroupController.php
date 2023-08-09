<?php

namespace Puikepixels\PuikCrmCore\Http\Controllers;

use Puikepixels\PuikCrmCore\Http\Requests\StoreCustomerGroupRequest;
use Puikepixels\PuikCrmCore\Http\Requests\UpdateCustomerGroupRequest;
use Puikepixels\PuikCrmCore\Models\CustomerGroup;

class CustomerGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', CustomerGroup::class);
        $data = CustomerGroup::latest()->paginate(20);

        $model = 'customergroup';

        return view('customergroups.index', compact('data', 'model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', CustomerGroup::class);
        return view('customergroups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerGroupRequest $request)
    {
        CustomerGroup::create($request->post());
        return redirect()->route('customergroups.index')->with('success', 'Customergroup has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerGroup $customergroup)
    {
        $item = $customergroup;
        $this->authorize('view', $item);

        $model = 'customergroup';
       
        return view('customergroups.show',compact('item', 'model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerGroup $customergroup)
    {
        $this->authorize('edit', $customergroup);
        $item = $customergroup;
        return view('customergroups.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerGroupRequest $request, CustomerGroup $customergroup)
    {
        $customergroup->update($request->post());

        return redirect()->route('customergroups.index')->with('success', 'Customergroup Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerGroup $customergroup)
    {
        $this->authorize('delete', $customergroup);
        $customergroup->delete();
        return redirect()->route('customergroups.index')->with('success', 'Customergroup Has Been deleted successfully');
    }
}
