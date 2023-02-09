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
            <input type="text" name="name" class="form-control" id="inputEmail4" value="{{ $data->name }}">
        </div>

        <div class="col-6">
            <label for="inputPassword4" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputPassword4" value="{{ $data->email }}">
        </div>

        <div class="col-6">
            <label for="inputAddress2" class="form-label">Phone</label>
            <input type="number" name="phone" class="form-control" id="inputAddress2" value="{{ $data->phone }}">
        </div>

        <div class="col-6">
            <label for="inputAddress2" class="form-label">Password</label>
            <div class="input-group">
                <input name="password" type="password" value="{{ $data->originalPass }}" class="input form-control"
                    id="password" required="true" aria-label="password"
                    aria-describedby="basic-addon1" />
                <div class="input-group-append">
                    <span class="input-group-text" onclick="password_show_hide();">
                        <i class="fas fa-eye" id="show_eye"></i>
                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <textarea class="form-control" name="address" id="pesan">{{ $data->address }}</textarea>
        </div>

        <div>
            <button type="submit" class="btn btn-warning">Create</button>
        </div>
    </form>
</div>

@endsection
