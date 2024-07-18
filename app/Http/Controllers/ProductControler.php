<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductControler extends Controller
{
    //this method is for show product controller
    public function index()
    {

    }
        //this method is for show create product page

    public function create()
    {
return view('products.create');
    }
    // this methos is for store product
    public function store()
    {

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
