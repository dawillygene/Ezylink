<?php
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Shop;

// class ShopController extends Controller
// {
//     public function store(Request $request)
//     {
//         // Validate input
//         $validatedData = $request->validate([
//             'first_name' => 'required|string|max:255',
//             'last_name' => 'required|string|max:255',
//             'contact_number' => 'required|string|max:20',
//             'phone_number' => 'nullable|string|max:20',
//             'email' => 'required|email|unique:shop_personal_details,email',
//             'birth_of_date' => 'required|date',
//             'city' => 'required|string|max:100',
//             'country' => 'required|string|max:100',
//             'zip_code' => 'required|string|max:10',
//             'description' => 'nullable|string',
//         ]);

//         // Create new shop entry
//         Shop::create($validatedData);

//         // Return a success message as JSON
//         return response()->json(['message' => 'Shop added successfully'], 201);
//     }
// }













namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function create()
    {
        return view('shops.create');
    }

    public function store(Request $request)
    {

        // dd($request);


        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:255',
            'email' => 'required|email|unique:shop_personal_details,email', // Updated table name
            'birth_of_date' => 'required|date',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'zip_code' => 'required|string|max:20',
            'description' => 'nullable|string',
        ]);
        
        Shop::create($request->all());

        return redirect()->back()->with('success', 'Shop added successfully');
    }

    public function index()
    {
        $shops = Shop::all();
        return view('shops.index', compact('shops'));
    }
}
