<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;


class ProductControler extends Controller
{
    //this method is for show product controller
    public function index()
    {
        return view('products/list');

    }
        //this method is for show create product page

    public function create()
    {
return view('products.create');
    }
    // this methos is for store product
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required |min:5',
            'sku' => 'required |min:3',
            'price' => 'required |numeric'
        ];
$validator = Validator::make($request->all(), $rules);

if($validator->fails())
{
    return redirect()->route('products.create')->withInput()->withErrors($validator);
};
$product = new Product();
$product->name = $request->name;
$product->sku = $request->sku;
$product->price = $request->price;
$product->description = $request->description;
$product->save();
return redirect()->route('products.index')->with('success', 'product created Successfully');
}
    // This method is for edit products
    public function edit()
    {

    }
    // this method is for update product
    public function update()
    {

    }
    public function destroy()
    {

    }
}
