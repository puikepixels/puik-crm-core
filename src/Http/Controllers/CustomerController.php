<?php
namespace Puikepixels\PuikCrmCore\Http\Controllers;

use Puikepixels\PuikCrmCore\Http\Requests\StoreCustomerRequest;
use Puikepixels\PuikCrmCore\Http\Requests\UpdateCustomerRequest;
use Puikepixels\PuikCrmCore\Models\Customer;

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

        return view('customers.index',compact('data', 'model'));
        
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
    public function store(StoreCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {


        $item = Customer::with(['tasks', 'projects','customerNotes' ])->findOrFail($id);
        $this->authorize('view', $item);

        $model = strtolower((new \ReflectionClass($item))->getShortName());
       
        return view('customers.show',compact('item', 'model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $item = Customer::with(['tasks', 'projects','customerNotes' ])->findOrFail($id);
        return view('customers.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
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
