@extends('layouts.main')
@section('content')
@section('title', 'book')
<br><h1><strong>BOOK DATA</strong></h1><br>
<a href="/newBook"><button class="btn btn-success">Create +</button></a>
<br><br>
<table class="table dark">
    <thead>
        <tr style="text-align: center" class="table-striped">
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Writer</th>
            <th scope="col">Publisher</th>
            <th scope="col">Synopsis</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    @foreach ($book as $item) 
        <tbody>
            <tr style="text-align: center">             
                <th scope="row">1</th>
                <td>{{ $item->title }} </td>
                <td>{{ $item->writer }} </td>
                <td>{{ $item->publisher }} </td>
                <td>{{ $item->synopsis }} </td>
                <td class="image-table"><img src=" {{ asset('images/'.$item->image) }}"  style="width: 90px;"></td>
                <td class="d-inline">
                    <a href="/editBook/{id}" class="btn btn-primary">Edit</a>
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
@endsection
