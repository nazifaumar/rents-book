<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<style>
    .main{
        height: 100vh;
    }
    .sidebar{
        background-color: #fff;
    }
    .sidebar a{
        text-decoration: none;
        display: block;
        color: black;
        padding: 15px 40px;
    }
    .sidebar a:hover{
        color: #2a5298;
    }
    .content{
        background-color: rgba(238,238,238,255);
        color: black;
        padding: 10px;
    }
</style>
<body>
    <div class="main d-flex flex-column justify-content-between">
     {{-- navbar --}}    
    <nav class="navbar  navbar-expand-lg bg-white" >
        <div class="container">
          <a class="navbar-brand" href="#">RentsBook</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
    </nav>
    {{-- endnavbar --}}

    {{-- content --}}
    <div class="body-main h-100">
        <div class="row g-0 h-100">
            <div class="sidebar col-2">
                <a href="/dashIndex"><i class="bi bi-house-fill p-2"></i>Dashboard</a>
                <a href="/user"><i class="bi bi-person-fill p-2"></i>User</a>
                <a href="/book"><i class="bi bi-book-fill p-2"></i>Books</a>
                <a href="/category"><i class="bi bi-tags-fill p-2"></i>Category</a>
                <a href="rentLog"><i class="bi bi-bookmark-fill p-2"></i>Rents Logs</a>
                <a href="/logout"><i class="bi bi-box-arrow-left p-2"></i>Logout</a>
            </div>
            <div class="content col-10">
                @yield('content')
            </div>
        </div>

    </div>

    {{-- endcontent --}}
     </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
    </html> 