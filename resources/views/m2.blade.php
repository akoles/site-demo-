<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <ul class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <ul class="navbar-nav ">
                        @isset($data)
                            @foreach($data as $menu)
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?=$menu->link?>"> <?= $menu->title ?></a>
                                </li>

                    @endforeach
                    @endisset
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Currencies">Currencies</a>
                </li>

                <div
                @if (Route::has('login'))

                    @auth
                        @if (session('status'))
                            <li class="alert alert-success" role="radio">
                                {{ session('status') }}
                                @endif
                                <!-- Authentication Links -->
                            @guest

                                <li class="nav-item">
                                    @if (Route::has('login'))
                                        <a class="nav-link"
                                           href="{{ route('login') }}">{{ ('Login') }}</a>
                                </li>

                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="{{ route('register') }}">{{ ('Register') }}</a>
                                </li>

                            @endif
                        @else
                            <li class="nav-item ">
                                <a class="nav-link " href="/account" >
                                    {{ Auth::user()->name }}
                                </a>
                                {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                                    <form id="logout-form" action="{{ route('logout') }}"
                                          method="POST" class="d-none">
                                    </form></a>--}}
                           {{-- <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}</a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                                <form id="logout-form" action="{{ route('logout') }}"
                                      method="POST" class="d-none">
                                </form></a>--}}

                            {{--<li class="nav-item">
                                <a class="nav-link" href="#"
                                   role="button"
                                   aria-haspopup="true"
                                   aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}</a>

                            <li class="nav-item">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                                <form id="logout-form" action="{{ route('logout') }}"
                                      method="POST" class="d-none">
                                </form>
                            </li>
                            </li>--}}
                            @csrf


                            {{--<li class="nav-item">
                                <a href="{{ route('login') }}"
                                   class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}"
                                       class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                </li>--}}

                        @endguest
                    @endauth
                @endif
            </ul>
    </ul>
    </div>
    </ul>
</nav>
