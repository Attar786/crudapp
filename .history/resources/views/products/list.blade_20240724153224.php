<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 11 Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
   <div class="bg-dark py-3">
    <h2 class="text-white text-center">Laravel 11 Application</h2>
   </div>
   <div class="container">
    <div class="row justify-content-center mt-4 ">
<div class="col-md-10 d-flex justify-content-end">
    <a href="{{ route('products.create') }}" class="btn btn-dark">Create</a>

</div>

    </div>
    <div class="row d-flex justify-content-center">
        @if(Session::has('success'))
        <div class="col-md-10">
          <div class="alert alert-success">
            {{ Session::get('success') }}
          </div>
        </div>
        @endif
        <div class="col-md-10">
          <div class="card border-0 shadow-lg my-3">
            <div class="card-header bg-dark text-white">
                <h3>Products </h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Sku</th>
    <th>Price</th>
    <th>Created at</th>
    <th>Action </th>
</tr>
@if($products->isNotEmpty())
@foreach ($products as $product)
<tr>
    <td>{{ $product->id }}</td>
    <td>

@if($product->image != "")
<img width="45px" src="{{ asset('uploads/products/'.$product-> image) }}"/>

@endif

    </td>
    <td>{{ $product->name }}</td>
    <td>{{ $product->sku }}</td>
    <td>{{ $product->price }}</td>
    <td>{{ \carbon\carbon::parse($product->created_at)->format('d,M,Y') }}</td>
    <td>
<a href="#" class="btn btn-dark">Edit</a>
<a href="#" class="btn btn-danger">Delete</a>

    </td>
</tr>
@endforeach
@endif

        </table>
    </div>







