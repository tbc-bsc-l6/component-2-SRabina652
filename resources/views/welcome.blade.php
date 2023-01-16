<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awasome link -->

    <script src="https://kit.fontawesome.com/e08a171d43.js" crossorigin="anonymous"></script>

    <title>Home Page</title>
</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg nav-wrap">
            <div class="container">
                <!-- <a class="navbar-brand" href="#"> -->
                <img src="{{asset('/images/logo.png')}}" alt="Logo" width="150" height="35">
                <!-- </a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="color:#000; font-size:28px;">
                        <!-- <i class="fa-sharp fa-solid fa-bars-staggered" style="color:#000; font-size:28px;"></i> -->
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <!-- <li class="nav-item">
                        <a class="nav-link" href="#">AboutUs</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Foods</a>
                        </li>
                        <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Reviews</a>
                        </li> -->
                        @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                        @endif
                        @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div>



        </div>
    </header>

    <section class="container mx-auto mt-5">
    <div class="container banner mt-4">
      <div class="row" style="gap: 3rem;">
        <div class="col-lg-5 col-md-6 pt-1 ps-5">
          <h2>A troubled intestine can send signals to the brain, just as a troubled brain can send signals to the gut.
          </h2>

          <div class="mt-4">
            <button class="main-btn">Explore</button>
          </div>

        </div>
        <div class="col-lg-6 col-md-6 ">
          <img src="/images/foodpng4.png" alt="image" class="img-responsive banner-img">
        </div>
      </div>
    </div>
        </div>
        <!-- <h2 class="text-center">A troubled intestine can send signals to the brain, just as a troubled brain can send signals to the gut.
  </h2> -->

    </section>


    <!-- foods section div -->
    <div class="foods">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 pt-1 ">

                    <span class="fa-solid fa-leaf d-flex justify-content-center mb-2" style="font-size:48px;"></span>

                    <h5 class="text-center">Healthy Foods</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, laborum.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 pt-1">
                    <i class="fa-solid fa-motorcycle d-flex justify-content-center mb-2" style="font-size:48px;"></i>
                    <h5 class="text-center">Fast Delivery</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, laborum.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 pt-1">
                    <i class="fa-solid fa-utensils d-flex justify-content-center mb-2" style="font-size:48px;"></i>
                    <h5 class="text-center">Quality food</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, laborum.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container  banner text-center">
        <div class="card-body">
            <h2 class="card-title text-danger">Special title treatment</h2>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <button class="main-btn">Contact Us</button>
            <div>
                <a href="https://www.facebook.com/home.php" target="_blank"><i class="fa-brands fa-facebook footericon"></i></a>
                <a href="https://www.facebook.com/home.php" target="_blank"><i class="fa-brands fa-twitter footericon"></i></a>
                <a href="https://www.facebook.com/home.php" target="_blank"><i class="fa-solid fa-envelope footericon"></i></a>
            </div>
        </div>
    </div>



    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- our js -->
    <script src="/js/index.js"></script>

    <!-- font awesome  -->
</body>

</html>