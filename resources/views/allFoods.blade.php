<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Products</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awasome link -->

    <script src="https://kit.fontawesome.com/e08a171d43.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <div>
            <nav class="navbar navbar-expand-lg nav-wrap">
                <div class="container">
                    <x-navbar />
                </div>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="row mt-5 m-2 mx-5">
            <form action="" class="col-7">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search by Name">
                </div>
            </form>
        </div>
    </div>
    <section class="container pt-5">
    <div class="row">
      @forelse ($allProducts as $prod)
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="{{asset('uploads/'.$prod->ProductImage)}}" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title capitalLetter">{{$prod->ProductName}}</h5>
          </div>
          <div class="d-inline p-3">
            @if($prod->Quantity > 0)
            <span class="px-4 text-success">In Stock</span>
            @else
            <span class="px-4 text-danger">Out of Stock</span>
            @endif
            <span class="px-5">${{$prod->ProductPrice}}</span>
          </div>

        </div>
      </div>
      @empty
      <div class="container text-center text-danger">
        <h3>No product available for {{$productCategory->name}}</h3>
      </div>
      @endforelse
    </div>

  </section>
</body>
</html>