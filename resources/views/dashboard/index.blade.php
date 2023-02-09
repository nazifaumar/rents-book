@extends('layouts.main')
@section('content')
@section('title', 'dashboard')
<br>
@if (Session::get('danger'))
<div class="alert alert-danger">
    {{Session::get('danger')}}
</div>
@endif
<h3><strong>Hi, admin!</strong></h3>
<h6>Selamat Datang</h6>



<div class="row my-5">
    <div class="col-lg-4">
        <div class="card-data book">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-journal-album"></i>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end ">
                    <div class="card-desc">
                        Books
                    </div>
                    <div class="card-count">
                        5
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="col-lg-4">
        <div class="card-data category">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-bookmark-plus-fill"></i>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end ">
                    <div class="card-desc">
                        Category
                    </div>
                    <div class="card-count">
                        5
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="col-lg-4">
        <div class="card-data user">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end ">
                    <div class="card-desc">
                        User
                    </div>
                    <div class="card-count">
                        {{$userr->where('=', null)->count()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
