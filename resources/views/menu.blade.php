<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <ul class="navbar-nav ">
                        @isset($data)
                            @foreach($data as $menu)
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?=$menu->link?>"> <?= $menu->title ?></a>
                                </li>

                            @endforeach
                        @endisset
                    </ul>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Currencies">Currencies</a>
                </li>
                <ul class="navbar-nav  dropdown">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">


                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                        @endif
                                        <!-- Authentication Links -->
                                        @guest
                                            @if (Route::has('login'))
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                       href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                            @endif

                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                       href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <ul class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                   role="button"
                                                   data-bs-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/account">Account</a></li>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                         aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="/logout">Log out</a></li>
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>


                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                              method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </ul>
                                                @endguest


                                            </ul>


                                    </div>


                            </div>
                        </div>
                </ul>
</nav>





