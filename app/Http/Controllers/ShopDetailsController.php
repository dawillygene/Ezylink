<?php

namespace App\Http\Controllers;

use App\Models\ShopDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShopDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $shops = ShopDetails::all();
        return view('shops.index', compact('shops'));
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
    public function store(Request $request)
    {

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'phone_number' => 'nullable|string|max:20',
            'email' => 'required|email|unique:shop_details',
            'birth_of_date' => 'required|date',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'zip_code' => 'required|string|max:20',
            'description' => 'nullable|string',

            'company_name' => 'required|string|max:255',
            'company_type' => 'required|string|max:255',
            'pan_card_number' => 'required|string|max:20',
            'fax_number' => 'nullable|string|max:20',
            'website' => 'nullable|url',
            'number' => 'nullable|string|max:20',
            'company_logo' => 'nullable|file|image|max:2048',

            'bank_name' => 'required|string|max:255',
            'branch' => 'required|string|max:255',
            'account_holder_name' => 'required|string|max:255',
            'account_number' => 'required|string|unique:shop_details',
            'ifsc_code' => 'nullable|string|max:20',
        ]);

        // dd($validated);
        if ($request->hasFile('company_logo')) {
            $logoPath = $request->file('company_logo')->store('logos', 'public');
        }


        ShopDetails::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'contact_number' => $request->contact_number,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'birth_of_date' => $request->birth_of_date,
            'city' => $request->city,
            'country' => $request->country,
            'zip_code' => $request->zip_code,
            'description' => $request->description,

            'company_name' => $request->company_name,
            'company_type' => $request->company_type,
            'pan_card_number' => $request->pan_card_number,
            'fax_number' => $request->fax_number,
            'website' => $request->website,
            'number' => $request->number,
            'company_logo' => isset($logoPath) ? $logoPath : null,

            'bank_name' => $request->bank_name,
            'branch' => $request->branch,
            'account_holder_name' => $request->account_holder_name,
            'account_number' => $request->account_number,
            'ifsc_code' => $request->ifsc_code,
        ]);

        return redirect()->back()->with('success', 'Data saved successfully!');
    }



    public function show($id)
    {

        $shopDetail = ShopDetails::findOrFail($id);
        return view('shops.shopdetails', compact('shopDetail'));
    }



    public function edit(ShopDetails $shopDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'phone_number' => 'nullable|string|max:20',
            'email' => 'required|email|unique:shop_details,email,' . $id,
            'birth_of_date' => 'required|date',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'zip_code' => 'required|string|max:20',
            'description' => 'nullable|string',

            'company_name' => 'required|string|max:255',
            'company_type' => 'required|string|max:255',
            'pan_card_number' => 'required|string|max:20',
            'fax_number' => 'nullable|string|max:20',
            'website' => 'nullable|url',
            'number' => 'nullable|string|max:20',
            'company_logo' => 'nullable|file|image|max:2048',

            'bank_name' => 'required|string|max:255',
            'branch' => 'required|string|max:255',
            'account_holder_name' => 'required|string|max:255',
            'account_number' => 'required|string|unique:shop_details,account_number,' . $id,
            'ifsc_code' => 'nullable|string|max:20',
        ]);


        $shopDetail = ShopDetails::findOrFail($id);

        if ($request->hasFile('company_logo')) {
            if ($shopDetail->company_logo) {
                Storage::disk('public')->delete($shopDetail->company_logo);
            }


            $logoPath = $request->file('company_logo')->store('logos', 'public');
            $shopDetail->company_logo = $logoPath;
        }

        $shopDetail->first_name = $request->first_name;
        $shopDetail->last_name = $request->last_name;
        $shopDetail->contact_number = $request->contact_number;
        $shopDetail->phone_number = $request->phone_number;
        $shopDetail->email = $request->email;
        $shopDetail->birth_of_date = $request->birth_of_date;
        $shopDetail->city = $request->city;
        $shopDetail->country = $request->country;
        $shopDetail->zip_code = $request->zip_code;
        $shopDetail->description = $request->description;

        $shopDetail->company_name = $request->company_name;
        $shopDetail->company_type = $request->company_type;
        $shopDetail->pan_card_number = $request->pan_card_number;
        $shopDetail->fax_number = $request->fax_number;
        $shopDetail->website = $request->website;
        $shopDetail->number = $request->number;

        $shopDetail->bank_name = $request->bank_name;
        $shopDetail->branch = $request->branch;
        $shopDetail->account_holder_name = $request->account_holder_name;
        $shopDetail->account_number = $request->account_number;
        $shopDetail->ifsc_code = $request->ifsc_code;

        $shopDetail->save();

        return redirect()->back()->with('success', 'Data updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShopDetails $shopDetails)
    {
        //
    }
}
