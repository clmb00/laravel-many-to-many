<header>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm h-100">
        <div class="container-fluid">

            @guest
                <a class="navbar-brand d-flex align-items-center fs-4" href="{{ url('/') }}">
                    MyDashboard
                </a>
            @else
                <h4 class="ms-1">Welcome back, {{ Auth::user()->name }}!</h4>
            @endguest

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto"></ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif

                    @else

                        <form action="{{ url('/admin/projects') }}" class="d-flex nav-item" method="GET">
                            <input type="text" class="form-control search_input me-1" name="search" id="search" placeholder="Search project..">
                            <button class="btn btn-light btn-sm nav-link me-4" style="--bs-btn-padding-y: .125rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: 1rem;" href="{{ url('/admin/profile') }}"><i class="fa-solid fa-search"></i></button>
                        </form>
                        <li class="nav-item btn btn-light btn-sm me-2" style="--bs-btn-padding-y: .125rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: 1rem;">
                            <a class="nav-link" href="{{ url('/admin/profile') }}"><i class="fa-solid fa-bell"></i> Notifications</a>
                        </li>
                        <li class="nav-item btn btn-light btn-sm" style="--bs-btn-padding-y: .125rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: 1rem;">
                            <a class="nav-link" href="{{url('/') }}"><i class="fa-solid fa-globe"></i> View Public Page</a>
                        </li>
                        <li class="nav-item btn_logout btn btn-outline-danger btn-sm" style="--bs-btn-padding-y: .125rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: 1rem;">
                            <a class="nav-link text-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
