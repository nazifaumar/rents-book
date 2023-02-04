@extends('layouts.main')
@section('content')
@section('title', 'user')
<br>
<h1><strong>User's Data</strong></h1>
<br>
<table class="table dark">
    <thead>
        <tr style="text-align: center">
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
                    <form action="/edit/{{ $item['id'] }}" method="GET" class="d-inline">
                        <button type="submit" class="btn btn-warning text-white">Edit</button>
                    </form>
                    <form action="/delete/{{ $item['id'] }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger text-white me-2">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    @endforeach
    <div class="row text-center">
        {!! $data->links() !!}
    </div>
</table>
@endsection
