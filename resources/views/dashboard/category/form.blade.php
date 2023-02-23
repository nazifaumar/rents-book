
@extends('layouts.main')
@section('content')
@section('title', 'category')

<div class="container content">
    <form id="create-form" action="{{ route('addCategory')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h3>Create Category</h3>
        <hr>

        <fieldset>
            <label for="">Category</label>
            <input class="input" type="text" name="category_name">

        <fieldset>
            <button class="input" type="submit" id="contactus-submit">Submit</button>
        </fieldset>
        <fieldset>
    </form>
</div>


@endsection