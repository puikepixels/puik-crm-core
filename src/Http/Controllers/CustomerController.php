<?php

namespace Puikepixels\PuikCrmCore\Http\Controllers;

use Puikepixels\PuikCrmCore\Http\Requests\StoreCustomerRequest;
use Puikepixels\PuikCrmCore\Http\Requests\UpdateCustomerRequest;
use Puikepixels\PuikCrmCore\Models\Customer;
use Puikepixels\PuikCrmCore\Models\CustomerGroup;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Customer::class);

        $data = Customer::latest()->paginate(20);

        $model = 'customer';

        return view('puik-crm-core::customers.index', compact('data', 'model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Customer::class);

        $customergroups = CustomerGroup::all();

        return view('puik-crm-core::customers.create', compact('customergroups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        $this->authorize('create', Customer::class);

        Customer::create(array_merge($request->all(), ['customer_number' => Customer::max('customer_number') + 1]));

        return redirect()->route('customers.index')->with('success', 'customer has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $item = Customer::with(['tasks', 'projects', 'customerNotes'])->findOrFail($id);
        $this->authorize('view', $item);

        $model = strtolower((new \ReflectionClass($item))->getShortName());

        return view('puik-crm-core::customers.show', compact('item', 'model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $this->authorize('update', $customer);

        $customergroups = CustomerGroup::all();

        $item = $customer;

        return view('puik-crm-core::customers.edit', compact('item', 'customergroups'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->post());

        return redirect()->route('customers.index')->with('success', 'Customer Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $this->authorize('delete', $customer);
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Customer Has Been deleted successfully');
    }
}
