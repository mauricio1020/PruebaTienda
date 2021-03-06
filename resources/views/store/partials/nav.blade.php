<!-- example 6 - center on mobile -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
        <a class="navbar-brand d-none d-lg-inline-block" href="{{ route('inicio') }}">
           Shopping
        </a>
        <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
            <img src="//placehold.it/40?text=LOGO" alt="logo">
        </a>
        <div class="w-100 text-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
        <ul class="navbar-nav ml-auto flex-nowrap">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link m-2 menu-item nav-active">Panel de administración</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item">Conocenos</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item">Contacto</a>
            </li>
            @if(Auth::check())
            <li class="nav-item" aria-labelledby="navbarDropdown">
                <a class="nav-link m-2 menu-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @endif
        </ul>
    </div>
</nav>
