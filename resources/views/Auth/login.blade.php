<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
  </head>
  <style>
      body{
        background: black;
      }
  </style>
  <body>
<section>
  
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          We can<br />
          <!-- berhasilgak? bisa login -->
          <span style="color: hsl(218, 81%, 75%)">access book for online and free !</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(219, 46%, 72%)">
          Don't have an account? <a href="/register" style="text-decoration: none;">Create a rentsAccount</a>
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <!-- kebiasaan kamu form gak pake validate error massagenya -->
            <form class=" card shadow p-3 row g-3 rounded-xl border-gray min-w-sm p-4 my-auto" action="/inputLogin" method="POST">
              @csrf

              @if (Session::get('notAllowed'))
                <div class="alert alert-danger">
                  {{ Session::get('notAllowed') }}
                </div>
              @endif
              
            <div class="col-12">
              <label for="inputEmail4" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="inputEmail4">
              @error('name')
              <div class="error" style="color: crimson;">{{$message}}</div>
              @enderror
            </div>
            <div class="col-12">
              <label for="inputCity" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="inputCity">
              @error('password')
              <div class="error" style="color: rgb(158, 66, 84);">{{$message}}</div>
              @enderror
            </div>
            <div class="col-12 d-grid gap-2 mx-auto">
              <button type="submit" class="btn btn-dark text-center">Login</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>