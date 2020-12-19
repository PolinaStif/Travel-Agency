<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $customers = Customer::isProcessed($request->is_processed)->paginate(10);

        return view('admin.customers.index', compact('customers'));
    }

    public function show(Customer $customer)
    {
        return view('admin.customers.show', compact('customer'));
    }

    public function processed(Customer $customer)
    {
        $customer->update(['is_processed' => 1]);

        return back();
    }

    public function unprocessed(Customer $customer)
    {
        $customer->update(['is_processed' => 0]);

        return back();
    }
}
