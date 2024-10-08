<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request)
    {

        $customer = new Customer();
        $customer->fill($request->all());
        $customer->save();
        return redirect()->route('customers.index')->with('success', 'Data updated successfully!');
    }


    public function index()
    {
        $countAll = Customer::all()->countBy('id');
        $customers = Customer::paginate(30);
        $active = Customer::where('status', 'active')->get();
        $blocked = Customer::where('status', 'blocked')->get();
        return view('customers.index', compact('countAll','customers','active','blocked'));
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.viewcustomer', compact('customer'));
    }

    public function create()
    {
        return view('customers.addcustomer');
    }




   
}