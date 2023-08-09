<?php
namespace Puikepixels\PuikCrmCore\Http\Controllers;

use Puikepixels\PuikCrmCore\Models\Customer;
use Puikepixels\PuikCrmCore\Models\Project;
use Puikepixels\PuikCrmCore\Models\Task;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
       /**
     * Display the specified resource.
     */
    public function show()
    {
        $customerCount = Customer::count();
        $taskCount = Task::count();
        $projectCount = Project::count();

        return view('dashboard',compact('customerCount', 'taskCount', 'projectCount'));       
    } 
}
