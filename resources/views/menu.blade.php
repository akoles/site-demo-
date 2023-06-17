<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>
</html>

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
                <ul class="navbar-nav  dropdown"
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
                                                    <li class="nav-item dropdown">
                                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                           role="button"
                                                           data-bs-toggle="dropdown" aria-haspopup="true"
                                                           aria-expanded="false" v-pre>
                                                            {{ Auth::user()->name }}
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="/account">Account</a>
                                                            </li>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                 aria-labelledby="navbarDropdown">
                                                                <li><a class="dropdown-item" href="/logout">Log out</a>
                                                                </li>
                                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                                    {{ __('Logout') }}
                                                                </a>
                                                                </a>

                                                                <form id="logout-form" action="{{ route('logout') }}"
                                                                      method="POST" class="d-none">
                                                                    @csrf
                                                                </form>
                                                            </div>
                                                    </li>
                                                @endguest


                                                <li>

                                    </ul>
            </ul>
            </ul>
            </li>
            </ul>
            </ul>
        </div>


    </div>
    </div>
</nav>

<body>

</body>


</nav>

</html>
