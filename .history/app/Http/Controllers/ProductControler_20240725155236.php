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
        $products = Product::orderBy('created_at' , 'DESC')->get();
        return view('products/list' , ['products'=> $products]);

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
        if ($request->image != "") {
            $rules['image'] = 'image';
        }
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('products.create')->withInput()->withErrors($validator);
        }
        ;
        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        // Image storage code
        if($request->image !='')
        {
            $image = $request->image;
        $ext = $image->getClientOriginalExtension();
        $imageName = time().'.'.$ext;


        $image->move(public_path('uploads/products'), $imageName);

        $product->image = $imageName;
        $product->save();
        }


        return redirect()->route('products.index')->with('success', 'product created Successfully');
    }
    // This method is for edit products
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit' , ['product' => $product]);
    }
    // this method is for update product
    public function update($id, Request $request)
    {
        $rules = [
            'name' => 'required |min:5',
            'sku' => 'required |min:3',
            'price' => 'required |numeric'
        ];
        if ($request->image != "") {
            $rules['image'] = 'image';
        }
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('products.create')->withInput()->withErrors($validator);
        }
        ;
        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        // Image storage code
        if($request->image !='')
        {
            $image = $request->image;
        $ext = $image->getClientOriginalExtension();
        $imageName = time().'.'.$ext;


        $image->move(public_path('uploads/products'), $imageName);

        $product->image = $imageName;
        $product->save();
        }


        return redirect()->route('products.index')->with('success', 'product created Successfully');

    }
    public function destroy()
    {

    }
}
