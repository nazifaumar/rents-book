<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rents Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
</style>

<body>

    {{-- Awal Navbar     --}}
    <nav class="navbar navbar-dark navbar-expand-lg bg-black  ">
        <div class="container">
            {{-- <a class="navbar-brand" href="#">
                <img src="{{asset('images/icon-navbar.png')}}" alt="Bootstrap" width="50" height="44">
                Vinnie'sBooks
              </a> --}}
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
    {{-- Akhir Navbar --}}

    {{-- Carousel --}}
    <div id="carouselExampleInterval" class="carousel slide" style="max-height: 450PX; max-width: 100%;"
        data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="https://img.freepik.com/premium-vector/trendy-editable-instagram-stories-template-with-grainy-gradient-style_561513-209.jpg?w=1060"
                    class="d-block w-100" style="max-height: 450px;" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://img.freepik.com/premium-vector/fashion-store-social-media-post-template_342167-53.jpg?w=1060"
                    class="d-block w-100" style="max-height: 450px;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://img.freepik.com/premium-psd/clothing-fashion-social-media-post-template_206986-143.jpg?w=1060"
                    class="d-block w-100" style="max-height: 450px;" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- Akhir Carousel --}}

    {{-- Jumbotron --}}
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4">
                <h2>Vinnie's Books</h2>
                <a href="/register" class="btn btn-outline-dark">Mari daftar sekarang !</a>
            </div>
            <div class="col-lg-8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit sunt distinctio eaque voluptatem earum
                    quos voluptatum quo, asperiores debitis hic maiores! Vitae quia voluptate atque illum repudiandae
                    tempora! Perspiciatis, iure! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia rem ipsa
                    sint exercitationem consequatur molestiae in necessitatibus id? Illum ducimus ipsa aliquid numquam
                    porro alias voluptatum recusandae tempore nam obcaecati?</p>
            </div>
        </div>
    </div>
    {{-- Akhir Jumbotron --}}

    {{-- Card Popular Book --}}
    <section style="background-color: black;">
        <div class="container my-5">
            <div class="row text-center">
                <h2 class="text-white mt-3">Popular Books</h2>
                <div class="row mt-4 ms-5">
                    <div class="col-lg-4 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://thebookcoverdesigner.com/wp-content/uploads/2016/05/hostile-forces23.jpg"
                                style="max-height: 400px" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Hostile Forces</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark w-100">Read</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://thebookcoverdesigner.com/wp-content/uploads/2017/08/alone-in-the-dark.jpg"
                                style="max-height: 400px" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Alone in The Dark</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark  w-100">Read</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://thebookcoverdesigner.com/wp-content/uploads/2016/03/haunted-house-project-2.jpg"
                                style="max-height: 400px"class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Book Title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark w-100">Read</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Akhir Card --}}

    {{-- Contact --}}
    <div class="container">
        <div class="row text-center">
            <h2>Message</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Messege</label>
                        <textarea class="form-control" name="pesan" id="pesan"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Send</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    {{-- Akhir Contact --}}


    {{-- Footer --}}
    <footer class="bg-black text-center" style="height: 40px">
        <p class="text-white"> Created by <a href="https://www.instagram.com/jpp.ur/" target="_blank"
                style="text-decoration: none; color:rgba(240, 248, 255, 0.31);">nazifaumar</a></p>
    </footer>
    {{-- Akhir Footer --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>
