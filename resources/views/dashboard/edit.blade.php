@extends('layouts.main')
@section('content')
@section('title', 'create')

<div class="card bg-glass" style="border-radius: 15px"><br>
    <h3 style="text-align: center"><strong></strong></h3><br>
    <form class="p-3 row g-3 rounded-xl border-gray min-w-sm p-4 my-auto" action="/update/{{ $data['id'] }}"
        method="POST">
        @csrf
        <div class="col-6">
            <label for="inputEmail4" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="inputEmail4">
        </div>

        <div class="col-6">
            <label for="inputPassword4" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputPassword4">
        </div>

        <div class="col-6">
            <label for="inputAddress2" class="form-label">Phone</label>
            <input type="number" name="phone" class="form-control" id="inputAddress2">
        </div>

        <div class="col-6">
            <label for="inputCity" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="inputCity">
        </div>

        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <textarea class="form-control" name="address" id="pesan"></textarea>
        </div>

        <div>
            <button type="submit" class="btn btn-warning">Create</button>
        </div>
    </form>
</div>

@endsection
