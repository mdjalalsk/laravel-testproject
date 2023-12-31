
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url("/")}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url("user")}}">User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url("service/{id}")}}">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url("about")}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route("showallcustomers")}}">Customer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('teacher')}}">Teacher</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{url('routeview')}}">routeview</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        {{-- authantication start --}}
        @if (Auth::check())
<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-responsive-nav-link class="nav-link" :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-responsive-nav-link>
</form>
@else

    <li class="nav-item">
        {{-- <a  href="{{url("about")}}">About</a> --}}
        <a class="nav-link" href="{{route("login")}}">Login</a>
      </li>
    <li class="nav-item">
        {{-- <a  href="{{url("about")}}">About</a> --}}
        <a class="nav-link" href="{{route("register")}}">Register</a>
      </li>
</ul>

{{-- <a href="{{route("register")}}">Register</a>   --}}
@endif
        {{-- authantication start --}}
      </div>
    </div>
  </nav>

{{-- <div>
    <ul>
        <li><a href="{{url("/")}}">Home </a></li>
        <li><a href="{{url("user")}}">Users </a></li>
        <li><a href="{{url("service")}}"> Service</a></li>
        <li><a href="{{url("about")}}">About </a></li>
    </ul>
</div> --}}