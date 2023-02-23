<!DOCTYPE html>
<html lang="en">
<head>
    <title>Perpustakaan | @yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>

  <nav class="navbar navbar-dark navbar-expand-lg bg-black  ">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Horror</a></li>
                        <li><a class="dropdown-item" href="#">Comedy</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    @if (Auth::user())
                        <a href="{{ url('/logout') }}" class="btn btn-outline-light"><strong>logout</strong></a>
                    @else
                        <a href="{{ url('/login') }}" class="btn btn-outline-light"><strong>login</strong></a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
  @yield('content')
</div>

</body>
</html>
