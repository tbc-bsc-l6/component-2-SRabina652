<img src="{{asset('/images/logo.png')}}" alt="Logo" width="150" height="35">

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" style="color:#000; font-size:28px;">
        <!-- <i class="fa-sharp fa-solid fa-bars-staggered" style="color:#000; font-size:28px;"></i> -->
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
        <x-app-layout/>
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