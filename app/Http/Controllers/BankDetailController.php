<?php

namespace App\Http\Controllers;

use App\Models\BankDetail;
use Illuminate\Http\Request;

class BankDetailController extends Controller
{
    public function index()
    {
        $bankDetails = BankDetail::all();
        return view('bankDetails.index', compact('bankDetails'));
    }

    public function create()
    {
        return view('bankDetails.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'bank_name' => 'required|string|max:255',
            'branch' => 'required|string|max:255',
            'account_holder_name' => 'required|string|max:255',
            'account_number' => 'required|string|unique:bank_details,account_number',
            'ifsc_code' => 'nullable|string|max:20',
        ]);

        BankDetail::create($request->all());

        return redirect()->back()->with('success', 'Bank details added successfully');
    }

    public function show(BankDetail $bankDetail)
    {
        return view('bankDetails.show', compact('bankDetail'));
    }

    public function edit(BankDetail $bankDetail)
    {
        return view('bankDetails.edit', compact('bankDetail'));
    }

    public function update(Request $request, BankDetail $bankDetail)
    {
        $request->validate([
            'bank_name' => 'required|string|max:255',
            'branch' => 'required|string|max:255',
            'account_holder_name' => 'required|string|max:255',
            'account_number' => 'required|string|unique:bank_details,account_number,' . $bankDetail->id,
            'ifsc_code' => 'nullable|string|max:20',
        ]);

        $bankDetail->update($request->all());

        return redirect()->route('bankDetails.index')->with('success', 'Bank details updated successfully');
    }

    public function destroy(BankDetail $bankDetail)
    {
        $bankDetail->delete();
        return redirect()->route('bankDetails.index')->with('success', 'Bank details deleted successfully');
    }
}
