@extends('layouts.main')
@section('content')
@section('title', 'user')
<h1>User's Data</h1>
<table class="table dark">
    <thead>
      <tr>
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
        <?php 
        $i = 1; ?>

      <tr>
        <th scope="row">{{$i++}}</th>
        <td>{{ $item->name }} </td>
        <td>{{ $item->email }} </td>
        <td>{{ $item->phone }} </td>
        <td>{{ $item->address }} </td>
        <td style="text-align: center">
            <button type="submit" class="btn btn-warning text-white">Edit</button>
            <form action="/delete/{{ $item['id'] }}" method="POST" class="d-inline">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger text-white me-2" >Delete</button></td>
            </form>
          
      </tr>
    </tbody>
    @endforeach
  </table>
@endsection
