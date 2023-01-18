@extends('layouts.bodytemp')
@section('title',"Food Section")
@section('content')

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
        <div class="row mt-5 m-2 ml-5">
            <form class="form-inline">
                <div class="row">
                    <div class="form-group mx-sm-3 col-md-7">
                        <input type="search" name="search" class="form-control" placeholder="Search by Name or Price" value="{{$search}}">
                    </div>
                    <div class="col-md-4 form-group mx-sm-3">
                        <button type="submit" class="btn btn-warning text-light mb-2">Search</button>
                        <a href="{{url('/allfoods')}}">
                            <button class="btn btn-warning text-light mb-2 mx-2" type="button">Clear</button>
                        </a>
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
                        <span class="px-3 text-success">In Stock</span>
                        @else
                        <span class="px-3 text-danger">Out of Stock</span>
                        @endif
                        <span class="px-5">${{$prod->ProductPrice}}</span>
                    </div>

                </div>
            </div>
            @empty
            <div class="container text-center text-danger">
                <h3>No product available for {{$search}}</h3>
            </div>
            @endforelse
        </div>
        <div class="d-flex">
            <div class="mx-auto">
                {!! $allProducts->links() !!}
            </div>

        </div>
    </section>
    @endsection