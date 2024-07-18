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
    <div class="row d-flex justify-content-center">
<div class="col-md-10">
    <div class="card border-0 shadow-lg my-3">
<div class="card-header bg-dark">
<h3 class="text-white">Create Products</h3>
</div>
<div class="card-body">
    <div class="mb-3 ">
        <label for="" class="form-label">Name</label>
        <input type="text" placeholder="Name" class="form-control form-control-lg" name="name">
    </div>
    <div class="mb-3">
        <label for="">Sku</label>
        <input type="text" placeholder="sku" class="form-control form-control-lg" name="sku">
    </div>
    <div class="mb-3">
        <label for="">Price </label>
        <input type="text" placeholder="Price" class="form-control form-control-lg" name="price">
    </div>
    <div class="mb-3">
        <label for="">Description</label>
<textarea class="form-control" placeholder="Description" name="description" cols="20" rows="5"></textarea>
    </div>
    <div class="mb-3">
        <label for="">Image</label>
<input type="file" name="image" id="image">
    </div>
<div class="d-grid" >
    <button class="btn btn-lg bg-primary text-white">Submit</button>
</div>

</div>
</div>
    </div>
</div>
   </div>
  </body>
</html>
