
<div class="container fondoNavbar w-100">
    <header class="blog-header">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a href="{{url('/')}}"> <img src="img/jm.png" class="imgLogo"> </a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark logoNavbar" href="{{url('/')}}">ZENEMIJ</a>
            </div>

            <div class="col-4 d-flex justify-content-end align-items-center">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-outline-secondary mr-3" href="{{ route('login') }}">{{ __('Inicia Sesión') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link btn btn-sm btn-outline-secondary mr-3" href="{{ route('register') }}">{{ __('Regístrate') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                <a><i class="fa fa-lg fa-shopping-cart"></i></a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" 	href="{{url('/componentes')}}">Componentes</a>
            <a class="p-2 text-muted" href="{{url('/ordenadores')}}">Ordenadores</a>
            <a class="p-2 text-muted" href="{{url('/telefonia')}}">Smartphone y Telefonía</a>
            <a class="p-2 text-muted" href="{{url('/fotografia')}}">Audio/Foto/Video</a>
            <a class="p-2 text-muted" href="{{url('/perifericos')}}">Periféricos</a>
            <a class="p-2 text-muted" href="{{url('/televisores')}}">Televisores</a>
            <a class="p-2 text-muted" href="{{url('/tablets')}}">Tablets</a>
            <a class="p-2 text-muted" href="{{url('/consolas')}}">Consolas</a>
            <a class="p-2 text-muted" href="{{url('/impresoras')}}">Impresoras</a>

        </nav>
    </div>
</div>




