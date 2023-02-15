
@extends('layouts.main')
@section('content')
@section('title', 'newbook')

<div class="container content">
    <form id="create-form" action="{{ route('add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h3>Create Book</h3>
        <hr>

        <fieldset>
            <label for="">Title</label>
            <input class="input" type="text" name="title">
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </fieldset>

        <fieldset> 
            <label for="">Writer</label>
            <input class="input" type="text" name="writer">
            @error('writer')
                <div class="error">{{ $message }}</div>
            @enderror
        </fieldset>

        <fieldset>
            <label for="">Publisher</label>
            <input class="input" type="text" name="publisher">
            @error('penerbit')
                <div class="error">{{ $message }}</div>
            @enderror
        </fieldset>


        <fieldset>
            <label for="">Synopsis</label>
            <textarea class="input" name="synopsis" tabindex="5"></textarea>
            @error('sinopsis')
                <div class="error">{{ $message }}</div>
            @enderror
        </fieldset>

        <fieldset>
            <label for="">Cover</label>
            <input class="input" name="image" id="image" type="file" class="file-upload-field">
            @error('image')
                <div class="error">{{ $message }}</div>
            @enderror
        </fieldset>
        <br>
        <fieldset>
            <button class="input" type="submit" id="contactus-submit">Submit</button>
        </fieldset>
        <fieldset>
    </form>
</div>

@endsection

