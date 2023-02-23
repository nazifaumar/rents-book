@extends('layouts.user')
@section('content')
@section('title', 'dashboard')


  <div class="row mt-4 ms-5" style="display: flex; flex-wrap: wrap;">
    @foreach ($book as $item)
              <div class="col-lg-4 mb-3" style="margin-top: 30px; width: 25%">
                <div class="card" style="padding-bottom: 20px; width: 26.5rem; text-align: center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">
                  <img src="{{ asset('images/'.$item->image) }}" style="min-height: 400px; max-height: 400px; width: 100%; object-fit: cover;" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">{{ $item->title }} </h5>
                    <p class="card-text">{{ $item->synopsis }} </p>
                          <a href="#" class="btn btn-dark w-100">Read</a>
                      </div>
                  </div>
              </div>
            </div>
            @endforeach
            <br>
@endsection
