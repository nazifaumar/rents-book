<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
</head>

<body>

    <div class="main d-flex flex-column justify-content-between">

        {{-- navbar --}}
        <nav class="navbar navbar-dark navbar-expand-lg bg-black ">
            <div class="container">
                <a class="navbar-brand" href="#">RentsBook</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#openClose" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
        <ul class="navbar-nav navbar-right">
                <a href="#" >
              <div class="d-sm-none d-lg-inline-block">
                <a href="/logout" class=" has-icon text-danger" style="text-decoration: none;">
                    <i class="fas fa-sign-out-alt"></i>
                  </a></div>
                </a>
          </ul>
            </div>
        </nav>

        
        {{-- endnavbar --}}

        {{-- content --}}
        <div class="body-main h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="openClose">
                    <a href="/dashboard" @if (request()->Route()->uri == 'dashboard') class="active" @endif><i class="bi bi-house-fill p-2"></i>Dashboard</a>
                    <a href="/user" @if (request()->Route()->uri == 'user') class="active" @endif><i class="bi bi-person-fill p-2"></i>User</a>
                    <a href="/book" @if (request()->Route()->uri == 'book') class="active" @endif><i class="bi bi-book-fill p-2"></i>Books</a>
                    <a href="/category" @if (request()->Route()->uri == 'category') class="active" @endif><i class="bi bi-tags-fill p-2"></i>Category</a>
                    <a href="rentLog" @if (request()->Route()->uri == 'rentLog') class="active" @endif><i class="bi bi-bookmark-fill p-2"></i>Rents Logs</a>
                </div>
                <div class="content col-lg-10">
                    @yield('content')
                </div>
            </div>

        </div>

        {{-- endcontent --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('body').on('click', '#editUser', function(event) {

                event.preventDefault();
                var id = $(this).data('id');
                $.get('edit/' + id, function(data) {
                    $('#edit_modal').modal('show');
                    $('#submit').click(function() {
                        $('#formId').attr('action', 'update/' + data.data.id);
                    });
                    $('#user_id').val(data.data.id);
                    $('#name').val(data.data.name);
                    $('#email').val(data.data.email);
                    $('#phone').val(data.data.phone);
                    $('#password').val(data.data.originalPass);
                    $('#address').val(data.data.address);
                })
            });

        });

        function password_show_hide() {
            var x = document.getElementById("password");
            var show_eye = document.getElementById("show_eye");
            var hide_eye = document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }
    </script>
</body>

</html>