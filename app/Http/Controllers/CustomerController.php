<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create(CustomerRequest $request)
    {
        Customer::create($request->all());

        return redirect('/contact')->with('success', 'Message sent!');
    }
}
