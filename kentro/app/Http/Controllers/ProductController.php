<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function add(Request $request)
    {
        // Validate the incoming request data
        

        // Create a new product record
        Product::create([
            'name' => $request->input('name'),
            'farmername' => $request->input('farmername'),
            'predictprice' => $request->input('predictprice'),
            'predictdate' => $request->input('predictdate'),
            'predictquantity' => $request->input('predictquantity'),
        ]);

        // Redirect back with a success message
        return redirect()->route('form.view')->with('status', 'Successfully added the product.');
    }

    public function showProduct()
{
    $accidents = Product::all();
    return view('profile.product',compact('accidents'));
}

public function store()
{
    $accidents = Product::all();
    return view('productadd',compact('accidents'));
}


}