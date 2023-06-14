<!doctype html>
<html lang="en">
 use App\Models\Menuset
<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>my site </title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>


<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">



        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <ul class="navbar-nav ">
                        @isset($data)
                            @foreach($data as $menu)
                            <li class="nav-item active">
                                <a class="nav-link" href="<?=$menu->link?>"> <?=$menu->title?></a>
                            </li>

                        @endforeach
                        @endisset
                    </ul>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Currencies">Currencies</a>
                </li>

                <li class="nav-item dropdown">

                    </ul>
                    <a class="nav-link dropdown-toggle" href="/Account" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/account">Account</a></li>
                        <li><a class="dropdown-item" href="/Mycourses">My courses</a></li>
                        <li><a class="dropdown-item" href="/Market">Market </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/Exit">Exit</a></li>

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
