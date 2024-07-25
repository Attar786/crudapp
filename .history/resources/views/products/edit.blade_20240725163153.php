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
      <div class="row justify-content-center mt-4">
         <div class="col-md-10 d-flex justify-content-end">
            <a href="{{ route('products.index') }}" class="btn btn-dark">Back</a>
         </div>
      </div>
      <div class="row d-flex justify-content-center">
         <div class="col-md-10">
            <div class="card border-0 shadow-lg my-3">
               <div class="card-header bg-dark">
                  <h3 class="text-white">Edit Product</h3>
               </div>
               <form enctype="multipart/form-data" action="{{ route('products.update', $product->id) }}" method="post">
                  @method('put')
                  @csrf
                  <div class="card-body">
                     <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input value="{{ old('name', $product->name) }}" type="text" placeholder="Name" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name">
                        @error('name')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                     </div>
                     <div class="mb-3">
                        <label for="sku">Sku</label>
                        <input value="{{ old('sku', $product->sku) }}" type="text" placeholder="Sku" class="form-control form-control-lg @error('sku') is-invalid @enderror" name="sku">
                        @error('sku')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                     </div>
                     <div class="mb-3">
                        <label for="price">Price</label>
                        <input value="{{ old('price', $product->price) }}" type="text" placeholder="Price" class="form-control form-control-lg @error('price') is-invalid @enderror" name="price">
                        @error('price')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                     </div>
                     <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" placeholder="Description" name="description" cols="20" rows="5">{{ old('description', $product->description) }}</textarea>
                     </div>
                     <div class="mb-3">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image">
                        @if($product->image != "")
                        <img class="w-50 my-3" src="{{ asset('uploads/products/'.$product->image) }}"/>
                        @endif
                     </div>
                     <div class="d-grid">
                        <button class="btn btn-lg bg-primary text-white">Update</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>
</html>
