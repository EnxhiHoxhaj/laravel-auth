<header>
    <div class="container-fluid bg-secondary-subtle">
        <nav class="row justify-content-between py-3">
            <div class="col-2 pub">
                <a href="{{ route('home') }}">Boolpress</a>
            </div>
            <div class="col d-flex justify-content-end">
                <ul class=" col-2 d-flex justify-content-between">
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Registrati</a></li>
                    @else
                        <li>
                            <a href="#">
                                {{ Auth::user()->name }}
                            </a>
                        <li>
                            {{-- <a href="{{ route('logout') }}">
                                Logout
                            </a> --}}
                        </li>
                        </li>
                    @endguest
                </ul>

            </div>
        </nav>

    </div>
</header>
