<?php

namespace App\Http\Controllers;

use App\Models\BusinessDetail;
use Illuminate\Http\Request;

class BusinessDetailController extends Controller
{
    public function create() {
        return view('business-details.create');  // Form view for adding details
    }

    public function store(Request $request) {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_type' => 'required|string|max:255',
            'pan_card_number' => 'required|string|max:255',
            'email' => 'required|email',
            'website' => 'nullable|url',
            'company_logo' => 'nullable|file|mimes:jpg,png,jpeg|max:2048'
        ]);

        $businessDetail = new BusinessDetail($request->all());

        if ($request->hasFile('company_logo')) {
            $logoPath = $request->file('company_logo')->store('logos', 'public');
            $businessDetail->company_logo = $logoPath;
        }

        $businessDetail->save();

        return redirect()->route('business-details.show', $businessDetail->id);
    }

    public function show($id) {
        $businessDetail = BusinessDetail::findOrFail($id);
        return view('business-details.show', compact('businessDetail'));
    }

    public function edit($id) {
        $businessDetail = BusinessDetail::findOrFail($id);
        return view('business-details.edit', compact('businessDetail'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_type' => 'required|string|max:255',
            'pan_card_number' => 'required|string|max:255',
            'email' => 'required|email',
            'website' => 'nullable|url',
            'company_logo' => 'nullable|file|mimes:jpg,png,jpeg|max:2048'
        ]);

        $businessDetail = BusinessDetail::findOrFail($id);
        $businessDetail->fill($request->all());

        if ($request->hasFile('company_logo')) {
            $logoPath = $request->file('company_logo')->store('logos', 'public');
            $businessDetail->company_logo = $logoPath;
        }

        $businessDetail->save();

        return redirect()->route('business-details.show', $businessDetail->id);
    }

    public function destroy($id) {
        $businessDetail = BusinessDetail::findOrFail($id);
        $businessDetail->delete();
        
        return redirect()->route('business-details.index');  // You might have an index to list all entries
    }
}
