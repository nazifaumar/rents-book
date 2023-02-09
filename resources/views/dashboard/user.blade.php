@extends('layouts.main')
@section('content')
@section('title', 'user')
<br><h1><strong>User's Data</strong></h1><br>
@if (Session::get('danger'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Success!</strong> This account has been successfully deleted.
  </div>
@endif
<div class="row text-center">
    {!! $data->links() !!}
</div><br>
<table class="table dark">
    <thead>
        <tr style="text-align: center" class="table-striped">
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col" style="text-align: center">Action</th>
        </tr>
    </thead>
    @foreach ($data as $item)
        <tbody>
            <tr style="text-align: center">
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $item->name }} </td>
                <td>{{ $item->email }} </td>
                <td>{{ $item->phone }} </td>
                <td>{{ $item->address }} </td>
                <td style="text-align: center">
                    <button id="editUser" class="btn btn-primary text-white me-2" data-toggle="modal"
                        data-target='#edit_modal' data-id="{{ $item->id }}">Edit</button>
                    <!-- Modal -->
                    <form action="/delete/{{ $item['id'] }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger text-white me-2">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    @endforeach
</table>

<div class="modal fade" id="edit_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formId" action="" method="POST">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label"><strong>Name</strong></label>
                        <input type="text" name="name" id="name" value="" class="form-control">
                    </div>

                    <div class="col-12">
                        <label for="inputPassword4" class="form-label"><strong>Email</strong></label>
                        <input type="email" name="email" id="email" value="" class="form-control">
                    </div>

                    <div class="col-12">
                        <label class="form-label"><strong>Phone</strong></label>
                        <input type="number" name="phone" id="phone" value="" class="form-control">
                    </div>

                    <div class="col-12">
                        <label class="form-label"><strong>Password</strong></label>
                        <input name="password" type="password" value="" class="input form-control" id="password"
                            aria-label="password" aria-describedby="basic-addon1" />
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="password_show_hide();">
                                <i class="fas fa-eye" id="show_eye"></i>
                                <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label"><strong>Address</strong></label>
                        <textarea class="form-control" name="address" id="address"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
