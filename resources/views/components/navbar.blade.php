<img src="{{asset('/images/logo.png')}}" alt="Logo" width="150" height="35">

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" style="color:#000; font-size:28px;">
       
    </span>
</button>

<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{url('/allfoods')}}">Foods</a>
        </li>

        @if (Route::has('login'))
        @auth

        <li class="nav-item">
            <a href="{{ url('/profile') }}" class="nav-link">Profile</a>
        </li>
        <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power -off"></i>Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

        @if(Auth::user()->status=='1')
        <li class="nav-item">
            <a href="{{ url('/admin/product') }}" class="nav-link">AdminDashboard</a>
        </li>
     @endif
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